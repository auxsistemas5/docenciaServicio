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
    $inputFileName = 'docentes.xlsx';
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
            $sqlC = "SELECT id FROM docentes WHERE document = '$row[1]'";
            $resC = mysqli_query($conexion,$sqlC);
            $dateC = mysqli_fetch_array($resC); 

            if(intval($dateC) < 1){

                if($row[3] == ""){
                    $row[3] = "0000-00-00";
                }
    
                if($row[4] == ""){
                    $row[4] = "0000-00-00";
                }
    
                if($row[9] == ""){
                    $row[9] == "";
                }
            
                $insert = "INSERT INTO docentes(name,document,id_institution,state,start,end,type_vinc,type_teacher,phone,email,type_prog,observation) 
                            VALUES ('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]')";
                $result = mysqli_query($conexion,$insert);

                if(!$result){
                    echo "no se pudo guardar";
                }else{
                    echo "se ingreso con exito";
                }

            }else{
                echo "ya esta";
            }

                
            
            
            
        }
    }
    
     

?>