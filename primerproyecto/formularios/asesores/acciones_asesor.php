<?php 
    include('../../conexion/conexionbasedatos.php');

    //variable indice para cualquier CASE  
    $inNdocAsesor = $_POST['inNdocAsesor'];
    //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    switch($_POST['accion']){
        case 'insertar':
            $inNombreAsesor = $_POST['inNombreAsesor'];
            $inFechNacAsesor = $_POST['inFechNacAsesor'];
            $inViviendaAsesor = $_POST['inViviendaAsesor'];
            $inEstratoAsesor = $_POST['inEstratoAsesor'];
            $inCorreoAsesor = $_POST['inCorreoAsesor'];
            
            $datosAsesor = "('$inNdocAsesor','$inNombreAsesor', '$inFechNacAsesor', '$inViviendaAsesor', '$inEstratoAsesor'
            , '$inCorreoAsesor')";
            $queryInsert = "INSERT INTO asesores VALUES ". $datosAsesor;

            $resultado = mysqli_query($conexion, $queryInsert);
            if($resultado){
            }
            break;

        
        case 'editar':
            $inNombreAsesor = $_POST['inNombreAsesor'];
            $inFechNacAsesor = $_POST['inFechNacAsesor'];
            $inViviendaAsesor = $_POST['inViviendaAsesor'];
            $inEstratoAsesor = $_POST['inEstratoAsesor'];
            $inCorreoAsesor = $_POST['inCorreoAsesor'];
         
             $datosAsesor = "nomcompleto='$inNombreAsesor', fechanacimiento='$inFechNacAsesor', 
             direccionvivienda='$inViviendaAsesor', estrato='$inEstratoAsesor' , correoasesor='$inCorreoAsesor'";
             
             $queryUpdate = "UPDATE asesores SET ". $datosAsesor. " WHERE idasesor = '" .$inNdocAsesor."'";
             
             $resultado = mysqli_query($conexion, $queryUpdate);
             if($resultado){
             }
            break;
        case 'eliminar':
            $queryDelete = "DELETE FROM asesores WHERE idasesor = " . "'" . $inNdocAsesor ."'";
            $eliminado = mysqli_query($conexion, $queryDelete);
            break;
    }
    ?>
    <script type="text/javascript">
        // redirige para mostrar la accion realizada en cualquiera de los casos
        window.location.href = "imprime_asesor.php";
    </script>  
<?php

?>