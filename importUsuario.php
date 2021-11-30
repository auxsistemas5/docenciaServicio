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
            $r = mysqli_fetch_array($result);

            if($r > 1){
                echo "hay";
            }else if($r < 1){
                $insert = "INSERT INTO usuarios(username,document,password,phone,id_institucion,position,formation,email,state) 
                            VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]',$row[8])";
                $result = mysqli_query($conexion,$insert);
                
                //echo $id;
            }
            
        }
    }
    
     

?>