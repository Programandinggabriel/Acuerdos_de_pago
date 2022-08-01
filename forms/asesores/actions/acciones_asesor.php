<?php 
    include('../../conexion/con_database.php');
    
    //variable indice para cualquier CASE  
    $inNdocAsesor = $_POST['inNdocAsesor'];
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    switch($_POST['accion']){
        case 'insertar':
            echo $inNdocAsesor;
            //validacion previa
            $querySelect = 'SELECT idasesor FROM asesores WHERE idasesor='. "'". $inNdocAsesor . "'";
            $resultado = mysqli_query($conexion, $querySelect);
            
            if(mysqli_num_rows($resultado) >= 1){
                echo 
                "<script> 
                    window.alert('registro ya existente');
                    window.history.back();
                </script>";
                exit();
            }
            //
            
            $inNombreAsesor = $_POST['inNombreAsesor'];
            $inFechNacAsesor = $_POST['inFechNacAsesor'];
            $inEdadAsesor = $_POST['inEdadAsesor'];
            $inCorreoAsesor = $_POST['inCorreoAsesor'];
            $inViviendaAsesor = $_POST['inViviendaAsesor'];
            $inEstratoAsesor = $_POST['inEstratoAsesor'];
            
            
            $datosAsesor = "('$inNdocAsesor','$inNombreAsesor', '$inFechNacAsesor', '$inViviendaAsesor', '$inEstratoAsesor'
            , '$inCorreoAsesor')";
            $queryInsert = "INSERT INTO asesores VALUES ". $datosAsesor;

            $queryInsert = mysqli_query($conexion, $queryInsert);

            break;
        case 'editar':
            $inNombreAsesor = $_POST['inNombreAsesor'];
            $inFechNacAsesor = $_POST['inFechNacAsesor'];
            $inEdadAsesor = $_POST['inEdadAsesor'];
            $inCorreoAsesor = $_POST['inCorreoAsesor'];
            $inViviendaAsesor = $_POST['inViviendaAsesor'];
            $inEstratoAsesor = $_POST['inEstratoAsesor'];
         
             $datosAsesor = "nomcompleto='$inNombreAsesor', fechanacimiento='$inFechNacAsesor', 
             edad='$inEdadAsesor', direccionvivienda='$inViviendaAsesor', estrato='$inEstratoAsesor'
             , correoasesor='$inCorreoAsesor'";
             
             $queryUpdate = "UPDATE asesores SET ". $datosAsesor. " WHERE idasesor = '" .$inNdocAsesor."'";
             
             $queryUpdate = mysqli_query($conexion, $queryUpdate);
             if($resultado){
             }
            break;
        case 'eliminar':
            $queryDelete = "DELETE FROM asesores WHERE idasesor = " . "'" . $inNdocAsesor ."'";
            $queryDelete = mysqli_query($conexion, $queryDelete);
            break;
    }
    header("location: muestra_asesor.php"); 

?>