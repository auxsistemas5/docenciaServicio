<?php

    require 'logica/conexion.php';
    require 'vendor/autoload.php';

    class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {
        public function readCell($column, $row, $worksheetName = ""){  
        
            if ($row > 0){
                return true;
            }
            return false;
        }
    }

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    $inputFileName = 'formato.xlsx';
    /** Identify the type of $inputFileName */
    $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
    /** Create a new Reader of the type that has been identified **/
    $reader = \Phpoffice\PhpSpreadsheet \IOFactory::createReader ($inputFileType);

    //leo los datos para obtener los valores de cada celda//
    $reader->setReadFilter( new MyReadFilter() );

    /** Load $inputFileName to a Spreadsheet Object */
    $spreadsheet = $reader->load($inputFileName);
    $cantidad = $spreadsheet->getActiveSheet()->toArray();
    foreach ($cantidad as $row) {
        if($row[0] != ''){
            $id = "SELECT id FROM usuarios WHERE document = '$row[1]'";
            $result = mysqli_query($conexion,$id);
            $mostrar = mysqli_fetch_array($result);

            if($mostrar > 0){
                
                $insert = "INSERT INTO registro (id_user,admission_date,finish_date,id_program,id_service,teacher,type_teacher) VALUES 
                ('$mostrar[0]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[13]')";
    
                $print = mysqli_query($conexion,$insert);
            }
        }

    }