<?php 
    //objeto base de datos, propiedad conexion
    include ('../../conexion/conexionbasedatos.php');
    
    // aqui imprimo para saber si las variables llegaron por el POST
    /*echo i"<br>".$_POST['incedulaClnt']; 
    echo "<br>".$_POST['inNumoblClnt']; 
    echo "<br>".$_POST['innomClnt'];
    */

    //se usa para cualquier ACCION DE CLIENTES !!!!!!
    $inCedulaClnt = $_POST['inCedulaClnt'];
    //!!!!!!

    switch($_POST['accion']){
        case 'insertar':
            $inNumoblClnt = $_POST['inNumoblClnt'];
            $inNomClnt = $_POST['inNomClnt'];
            $inNumCelClnt = $_POST['inNumCelClnt']; 
            $inEmailClnt = $_POST['inEmailClnt'];
            $inCiudadClnt = $_POST['inCiudadClnt'];
            
            $datosCliente = "('$inCedulaClnt','$inNumoblClnt', '$inNomClnt', '$inNumCelClnt', '$inEmailClnt', 
            '$inCiudadClnt')";
            
            //echo $datosCliente

            $queryInsert = "INSERT INTO 
            clientes (idcliente, numobligacion, nombrecliente, numcelular, correocliente, ciudadresidencia) 
            VALUES $datosCliente";
            
            //echo $queryInsert;

            // como manipular el objeto error para saber que tipo de error resta devolviendo mysqli
            if($resultado = mysqli_query($conexion, $queryInsert)){
                //metodo imprime cliente
            }
            break;

            
        case 'editar':
            $inNumoblClnt = $_POST['inNumoblClnt'];
            $inNomClnt = $_POST['inNomClnt'];
            $inNumCelClnt = $_POST['inNumCelClnt']; 
            $inEmailClnt = $_POST['inEmailClnt'];
            $inCiudadClnt = $_POST['inCiudadClnt'];

            //"idcliente='$inCedulaClnt' = la llave primaria no se envia 
            $datosCliente = "numobligacion='$inNumoblClnt', nombrecliente='$inNomClnt', 
            numcelular='$inNumCelClnt', correocliente='$inEmailClnt', ciudadresidencia='$inCiudadClnt'";

            $queryUpdate = "UPDATE clientes SET ". $datosCliente ." WHERE idcliente = " . "'" . $inCedulaClnt ."'";

            //echo $queryInsert;
            $actualizados = mysqli_query($conexion, $queryUpdate);
            if($actualizados)
                header('location: imprime_cliente.php');
            break;
        case 'eliminar':
            $queryDelete = "DELETE FROM clientes WHERE idcliente = " . "'" . $inCedulaClnt ."'";
            $eliminado = mysqli_query($conexion, $queryDelete);
            break;
    } 

    ?>
    <script type="text/javascript">
        // redirige para mostrar la accion realizada en cualquiera de los casos
        window.location.href = "imprime_cliente.php";
    </script>  
<?php


?>
