<?php 
    //objeto base de datos, propiedad conexion
    include('../../../conexion/con_database.php');
    
    // aqui imprimo para saber si las variables llegaron por el POST
    /*echo i"<br>".$_POST['incedulaClnt']; 
    echo "<br>".$_POST['inNumoblClnt']; 
    echo "<br>".$_POST['innomClnt'];
    */

    //se usa para cualquier ACCION DE CLIENTES !!!!!!
    $inNumobligClnt = $_POST['inNumobligClnt'];
    //!!!!!!

    switch($_POST['accion']){
        case 'insertar':
            
            //validacion previa
            $querySelect = 'SELECT numobligacion FROM infclient WHERE numobligacion =' . "'". $inNumobligClnt . "'";
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
            $inCedulaClnt = $_POST['inCedulaClnt'];
            $inNomClnt = $_POST['inNomClnt'];
            $inEdadClnt = $_POST['inEdadClnt'];
            $inCiudadClnt = $_POST['inCiudadClnt'];
            $inNumCelClnt = $_POST['inNumCelClnt']; 
            $inEmailClnt = $_POST['inEmailClnt'];
            $inSaldoCap = $_POST['inSaldoCap'];
            
            $datosCliente = "('$inNumobligClnt', '$inCedulaClnt','$inNomClnt','$inEdadClnt', '$inCiudadClnt', 
            '$inNumCelClnt','$inEmailClnt','$inSaldoCap')";
            
            //echo $datosCliente

            $queryInsert = "INSERT INTO 
            infclient (numobligacion, idcliente, nombrecliente, edad, ciudadresidencia, numcelular, correocliente, saldocapital) 
            VALUES $datosCliente";
            
            $queryInsert = mysqli_query($conexion, $queryInsert);
            break;
        
        case 'editar':
            $inCedulaClnt = $_POST['inCedulaClnt'];
            $inNomClnt = $_POST['inNomClnt'];
            $inEdadClnt = $_POST['inEdadClnt'];
            $inCiudadClnt = $_POST['inCiudadClnt'];
            $inNumCelClnt = $_POST['inNumCelClnt']; 
            $inEmailClnt = $_POST['inEmailClnt'];
            $inSaldoCap = $_POST['inSaldoCap'];

            //"idcliente='$inCedulaClnt' = la llave primaria no se envia 
            $datosCliente = "numobligacion='$inNumobligClnt', idcliente='$inCedulaClnt, nombrecliente='$inNomClnt', edad='$inEdadClnt', 
            ciudadresidencia='$inCiudadClnt', numcelular='$inNumCelClnt', correocliente='$inEmailClnt', saldocapital='$inSaldoCap'";

            $queryUpdate = "UPDATE infclient SET ". $datosCliente ." WHERE numobligacion = " . "'" . $inNumobligClnt ."'";
            echo $queryInsert;
            $actualizados = mysqli_query($conexion, $queryUpdate);
            break;
        case 'eliminar':
            $queryDelete = "DELETE FROM infclient WHERE numobligacion = " . "'" . $inNumobligClnt ."'";
            $eliminado = mysqli_query($conexion, $queryDelete);
            break;
    } 
        header('location: ../views/muestra_cliente.php');
    ?> 
