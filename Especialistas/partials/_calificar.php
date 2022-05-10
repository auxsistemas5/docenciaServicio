<?php

    require '../logica/conexion.php';
    $nombre = $_SESSION['name'];
    $sqlPorgrama = "SELECT type_prog,programs_name,services_name FROM docentes INNER JOIN programas ON docentes.type_prog = programas.id INNER JOIN servicios ON servicios.id = docentes.type_servi WHERE docentes.name = '$nombre'";

    $sqlConsultaEspe = mysqli_query($conexion,$sqlPorgrama);

    $datoEspe = mysqli_fetch_array($sqlConsultaEspe);

    $programa = $datoEspe[1];
    $servicio = $datoEspe[2];
    $fechaActual = date('m');


    if($servicio == 'PREHOSPITALIZACIÓN'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE  usuarios.position = 'INTERNO' AND registro.anulated = 0 AND servicios.services_name = 'MEDICINA INTERNA' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-03-31'   ORDER BY registro.admission_date";

        $sqlEstudiantesPorEspecialista1 = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE  usuarios.position = 'INTERNO' AND registro.anulated = 0 AND servicios.services_name = 'CIRUGÍA' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-03-31'   ORDER BY registro.admission_date";
    }else{

        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE  usuarios.position = 'INTERNO' AND registro.anulated = 0  AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-03-31'  ORDER BY registro.admission_date";
    }

    /*
    //valida las fechas en rango de dos meses para calificar los usuarios
    if($fechaActual == '01'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM(((registro INNER JOIN programas ON programas.id = registro.id_program)INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user) where registro.id = (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id  AND usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio')) AND registro.finish_date BETWEEN '2022-01-01' AND '2022-01-31'   ORDER BY registro.admission_date";

    }else if($fechaActual == '02'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM(((registro INNER JOIN programas ON programas.id = registro.id_program)INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user) where registro.id = (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id  AND usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio')) AND registro.finish_date BETWEEN '2022-01-01' AND '2022-02-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '03'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM(((registro INNER JOIN programas ON programas.id = registro.id_program)INNER JOIN servicios ON servicios.id = registro.id_service) INNER JOIN usuarios ON usuarios.id = registro.id_user) where registro.id = (SELECT MAX(registro.id) FROM registro WHERE (registro.id_user = usuarios.id  AND usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio')) AND registro.finish_date BETWEEN '2022-02-01' AND '2022-03-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '04'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-03-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '05'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-03-01' AND '2022-05-31'  ORDER BY registro.admission_date";

    }else if($fechaActual == '06'){
       $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-05-01' AND '2022-06-30'  ORDER BY registro.admission_date";

    }else if($fechaActual == '07'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-06-01' AND '2022-07-30'  ORDER BY registro.admission_date";
    }else if($fechaActual == '08'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-07-01' AND '2022-08-31'  ORDER BY registro.admission_date";
    }else if($fechaActual == '09'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-08-01' AND '2022-09-30'  ORDER BY registro.admission_date";
    }else if($fechaActual == '10'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-09-01' AND '2022-10-31'  ORDER BY registro.admission_date";
    }else if($fechaActual == '11'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-10-01' AND '2022-11-30'  ORDER BY registro.admission_date";
    }else if($fechaActual == '12'){
        $sqlEstudiantesPorEspecialista = "SELECT registro.id,servicios.services_name,registro.admission_date,usuarios.id,usuarios.username,usuarios.document,usuarios.phone,usuarios.position,programas.programs_name,usuarios.email, usuarios.photo,registro.finish_date
        FROM registro INNER JOIN programas ON programas.id = registro.id_program INNER JOIN servicios ON servicios.id = registro.id_service INNER JOIN usuarios ON usuarios.id = registro.id_user WHERE usuarios.state = 1 AND usuarios.position = 'INTERNO' AND servicios.services_name = '$servicio' AND registro.finish_date BETWEEN '2022-11-01' AND '2022-12-31'  ORDER BY registro.admission_date";
    }
    */
    


    if($servicio == 'PREHOSPITALIZACIÓN'){
        $sqlConsultaEstudiante = mysqli_query($conexion,$sqlEstudiantesPorEspecialista);
        $sqlConsultaEstudiante1 = mysqli_query($conexion,$sqlEstudiantesPorEspecialista1);
        require '_calificar_prehospitalizacion.php';
    }else{
        $sqlConsultaEstudiante = mysqli_query($conexion,$sqlEstudiantesPorEspecialista);
        require '_calificar_student.php';
    }
?>
