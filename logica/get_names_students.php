<?php
    require 'conexion.php';

    $nombre = $_POST['nombre'];

    $sql = 'SELECT * FROM usuarios where document LIKE "%'.strip_tags($nombre).'%" ORDER BY username DESC  ';
    $consulta = mysqli_query($conexion,$sql);
    $html = "";
    if($consulta){
        while($datos = mysqli_fetch_array($consulta)){
            //muestra la variable html con el nombre sugerido y al clickear se auto pone
            $html = '<div><a class="suggest-element" data="'.utf8_encode($datos['document']).'" id="product'.$datos['id'].'">'.utf8_encode($datos['document']).'</a></div>';
        }
    }
    if($html != ""){

        echo $html;
    }else{
        $html = "SIN RECOMENDACIONES ";
        echo $html;
    }
 
 
 
?>