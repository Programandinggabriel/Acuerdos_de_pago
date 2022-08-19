<?php 
    include('../../../conexion/con_database.php');
    //incluye script de alerta swal
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    $inNobligAcuerdo = $_POST['inNobligAcuerdo'];
    $inidCliente = $_POST['inidCliente'];
    $inFechAcuerdo = $_POST['inFechAcuerdo'];
    $inFechPago = $_POST['inFechPago'];
    $inValorAcuerdo = $_POST['inValorAcuerdo'];

    $inCuotas = $_POST['inCuotas'];
    //$inTipoAcuerdo = $_POST['inTipoAcuerdo'];
    $inComments = $_POST['inComments'];

    switch ($_POST['accion']){
        case 'insertar':
            //print_r($_POST);

            $datosAcuerdo = "('$inNobligAcuerdo', '$inidCliente', '$inFechAcuerdo', '$inFechPago', '$inValorAcuerdo', '$inCuotas', '$inComments')";
            $queryInsert = "INSERT INTO acuerdos (numobligacion, idcliente, fechaacuerdo, fechapago, valor, cuotas, comentarios) VALUES " . $datosAcuerdo ;

            $queryInsert = mysqli_query($conexion, $queryInsert);

            //muestra alerta al insertar acuerdo
            if ($queryInsert){
                echo"
                <body>
                    <script>
                    //alerta
                    swal({  icon: 'success',
                            title: 'Registrado',
                            text: 'Se a creado el acuerdo con éxito',
                            button: 'Regresar',
                    })
                    .then((btn_val) => {
                        window.history.back();
                    });
                </script>
                </body>";
            };
        break;

        case 'editar':
            //primary key
            $idAcuerdo = $_POST['idAcuerdo'];

            $queryUpdate = "UPDATE acuerdos SET 
            fechaacuerdo= '$inFechAcuerdo', fechapago= '$inFechPago', valor= '$inValorAcuerdo', cuotas= '$inCuotas', comentarios= '$inComments' 
            WHERE idacuerdo= '$idAcuerdo'";

            print($queryUpdate);

            $queryUpdate = mysqli_query($conexion, $queryUpdate);

            echo $queryUpdate;
            if($queryUpdate){
                echo 'actualizado';
                header("location:../views/muestra_acuerdos.php");
            };

        break;
        
        case 'eliminar':
            
            //primary key
            $idAcuerdo = $_POST['idAcuerdo'];

           $queryDelete  = "DELETE FROM acuerdos WHERE idacuerdo = '$idAcuerdo'";
           echo $queryDelete;
           $queryDelete = mysqli_query($conexion, $queryDelete);
            
           if($queryDelete){
                header("location:../views/muestra_acuerdos.php");
            };

        break;
    }

?>