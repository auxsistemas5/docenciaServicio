
<?php   
  require '../logica/conexion.php';


  $sql = "SELECT * FROM calificacion_docente where (calificacion_docente.mes_calificado BETWEEN '2022-03-01' AND '2022-03-31') AND (result_conocimiento != '' or result_actitud != '' or result_seminario != '') group by student ";
  $verificar = mysqli_query($conexion, $sql);

    while($estudiantes = mysqli_fetch_array($verificar)){
        ?>
         
             <td><?php echo $estudiantes['student'] ?></td>
        <?php
        
        $student = $estudiantes['student'];

        $consultarValores = "SELECT calificacion_docente.result_conocimiento,calificacion_docente.result_actitud,calificacion_docente.result_seminario ,calificacion_docente.mes_calificado
        FROM calificacion_docente WHERE calificacion_docente.mes_calificado BETWEEN '2022-03-01' AND '2022-03-31' AND student = '$student'  
        AND (calificacion_docente.result_conocimiento IS NOT NULL OR 
        calificacion_docente.result_actitud IS NOT NULL 
        OR calificacion_docente.result_seminario IS NOT NULL )";

        $consultarDocencia = "SELECT result_seminario from calificacion_docencia where student = '$student' ";

        $verificarDoc = mysqli_query($conexion,$consultarDocencia);
        $verificarCon = mysqli_query($conexion, $consultarValores);
        $contador = 0;
        $conocimiento = 0;
        $actitud = 0;
        $seminario = 0;
        $con = 0;
        $act =0;
        $semi = 0;
        while($notas = mysqli_fetch_array($verificarCon)){
            if($notas['result_conocimiento'] != NULL){
                $conocimiento = $conocimiento + $notas['result_conocimiento'];
                $con++;
                
            }else{
                
            }

            if($notas['result_actitud'] != NULL){
                $actitud = $actitud + $notas['result_actitud'];
                $act ++;
                
            }else{
                
            }

            if($notas['result_seminario'] != NULL){
               $seminario = $seminario + $notas['result_seminario'];
               $semi ++;
            }else{
                
            }

            $contador++;
            $fecha = $notas['mes_calificado'];
        
        }
        
        if($conocimiento == 0){$conocimiento = "NO CALIFICADO";}
        if($actitud ==0){$actitud = "NO CALIFICADO";}
        if($seminario == 0){$seminario = "NO CALIFICADO";}
        
        if($con > 1){$conocimiento = $conocimiento / $con;}
        if($act > 1){$actitud = $actitud / $act;}
        if($semi > 1){$seminario = $seminario / $semi;}

        $docencia = mysqli_fetch_array($verificarDoc);
        if($docencia > 0){
            if($docencia['result_seminario'] != NULL){

                $resultDoc = $docencia['result_seminario'];
                $seminario = floatval($seminario) + $resultDoc;
                $seminario = $seminario / 2;
            }else{
                $seminario = $seminario;
            }
        }else{
            $resultDoc= "NO CALIFICADO";
        }

        $total = floatval($seminario) + floatval($actitud) + floatval($conocimiento);
        $total = $total / 3;


        ?>
        <td aling="center"><?php echo $conocimiento//." - ".$con?></td>
        <td aling="center"><?php echo $actitud//." - ".$act?></td>
        <td aling="center"><?php echo $seminario //." - ".$semi?></td>
        <td><?php echo number_format($total,2,".") ?></td>
        <td><a href="../logica/create_pdf_for_final_results.php?name=<?php echo $student?>&conocimiento=<?php echo $conocimiento?>&actitud=<?php echo $actitud?>&seminario=<?php echo $seminario ?>&fecha=<?php echo $fecha ?>" target="_blank"  class="btn btn-info btn-sm">RESULTADOS</a></td>
         </tr>
        <?php

    }
  

?>