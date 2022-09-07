<?php 
    include('../../../conexion/con_database.php');
    //incluye script de alerta swal
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";

    //clave primaria 
    $idacuerdo = creaidacu();

    $inNobligAcuerdo = $_POST['inNobligAcuerdo'];
    $inidCliente = $_POST['inidCliente'];
    $inFechAcuerdo = $_POST['inFechAcuerdo'];
    $inFechPago = $_POST['inFechPago'];
    $inValorAcuerdo = (int) filter_var($_POST['inValorAcuerdo'], FILTER_SANITIZE_NUMBER_INT);

    $inCuotas = $_POST['inCuotas'];
    //$inTipoAcuerdo = $_POST['inTipoAcuerdo'];
    $inComments = $_POST['inComments'];

    switch ($_POST['accion']){
        case 'insertar':
            //print_r($_POST);

            $datosAcuerdo = "('$idacuerdo','$inNobligAcuerdo', '$inidCliente', '$inFechAcuerdo', '$inFechPago', '$inValorAcuerdo', '$inCuotas', '$inComments')";
            $queryInsert = "INSERT INTO acuerdos (idacuerdo, numobligacion, idcliente, fechaacuerdo, fechapago, valor, cuotas, comentarios) VALUES " . $datosAcuerdo ;

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

            $queryUpdate = mysqli_query($conexion, $queryUpdate);
            
            if($queryUpdate){
                header("location:../views/muestra_acuerdos.php");
            };

        break;
        
        case 'eliminar':

            //primary key
            $idAcuerdo = $_POST['idAcuerdo'];

            $queryPrevDel = "INSERT INTO acuerddel (SELECT * FROM acuerdos WHERE idacuerdo = '".$idAcuerdo."')";
            $queryPrevDel = mysqli_query($conexion, $queryPrevDel);

            $queryDelete  = "DELETE FROM acuerdos WHERE idacuerdo = '$idAcuerdo'";
            $queryDelete = mysqli_query($conexion, $queryDelete);

            if($queryDelete){
                header("location:../views/muestra_acuerdos.php");
            };

        break;
    };

/*--------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------*/
//functions
function creaidacu(){
    include('../../../conexion/con_database.php');
    $idExist = true;

    while($idExist == true){
        $id = 'ACU';
        $numAleat = random_int(0000, 9999);
        $id = $id . $numAleat;

        $querySelect = 'SELECT idacuerdo FROM acuerdos WHERE idacuerdo ='."'".$id."'";
        $querySelect = mysqli_query($conexion, $querySelect);
        $querySelect = $querySelect->num_rows;

        if($querySelect == 0){
            $idExist = false;
        };
    };
    return $id ;
};
?>