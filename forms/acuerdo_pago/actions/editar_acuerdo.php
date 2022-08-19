<?php
    include('../../../conexion/con_database.php');

    $idAcuerdo = $_GET['idAcuerdo'];
    $querySelect = "SELECT * FROM acuerdos WHERE idacuerdo = '" .$idAcuerdo. "'";
    $consulta = mysqli_query($conexion, $querySelect);
    
    $info_Acuerdo = mysqli_fetch_array($consulta);
    
    $querySelect = "SELECT * FROM clientes_deuda WHERE numobligacion = '" .$idAcuerdo. "'";
    $consulta = mysqli_query($conexion, $querySelect);

    $info_Cliente = "";

    //VISTA FORM
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.js"></script>
    <title>Editar</title>
</head>
<body class="bg-light p-2 row justify-content-center"> 
    <form class="border border-success rounded w-75 p-3" method="POST" action="acciones_acuerdos.php">
    <h1 class='text-center'>DATOS DE EL ACUERDO</h1>
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value="editar"></input>
        <input type="hidden" name="idAcuerdo" value="<?php echo $info_Acuerdo[0]?>"></input>


        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">NUMERO DE OBLIGACIÓN</label>
            <div class="col-sm-4">
                <input type="number" class="form-control bg-light" name="inidCliente" value="<?php echo $info_Acuerdo[1]?>" readonly ></input>
            </div>    
        </div>
            
        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">NUMERO IDENTIFICACIÓN (CLIENTE)</label>
            <div class="col-sm-4">
                <input type="number" class="form-control bg-light" name="inNobligAcuerdo" value="<?php echo $info_Acuerdo[2]?>" readonly></input>
            </div>
        </div>
            
        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">VALOR CAPITAL</label>
            <div class=col-sm-4>
                <input type="number" class="form-control bg-light" name="inValCapital" value="" readonly></input>
            </div>
        </div>

        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">VALOR TOTAL </label>
            <div class=col-sm-4>
                <input class="form-control bg-light" type="number" step="any" id="inValTotal" name="inValTotal" value="" readonly></input>
            </div>
        </div>

        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">VALOR ACORDADO </label>
            <div class=col-sm-4>
                <input class="form-control bg-light" type="number" step="any" id="inValorAcuerdo" name="inValorAcuerdo" value="<?php echo $info_Acuerdo[5]?>"></input>
            </div>
        </div>

        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">FECHA ACUERDO</label>
            <div class="col-sm-4">
                <input type="date" class="form-control bg-light" name="inFechAcuerdo" value="<?php echo $info_Acuerdo[3]?>"></input>
            </div>
        </div>

        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">FECHA DE PAGO</label>
            <div class=col-sm-4>
                <input type="date" class="form-control bg-light" name="inFechPago" value="<?php echo $info_Acuerdo[4]?>"></input>
        </div>

        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">CUOTAS</label>
            <div class=col-sm-4>
            <input type="number" class="form-control bg-light" name="inCuotas" value="<?php echo $info_Acuerdo[6]?>"></input>
        </div>
        
        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">TIPO</label>
            <div class="col-sm-4">
                <input type="text" class="form-control bg-light" max="6" min="1" name="inTipoAcuerdo" value="<?php echo $info_Acuerdo[7]?>"></input>
            </div>
        </div>  
        
        <div class="form-group row mt-3 justify-content-center">
            <label class="col-sm-3 col-form-label-lg">COMENTARIOS (OPCIONAL)</label>
            <div class="col-sm-4">
                <textarea  class="form-control bg-light" rows='5' name='inComments'><?php echo $info_Acuerdo[8]?></textarea>
            </div>
        </div>  
        

        <div class='container border border-success rounded p-2 mt-5 w-75'><!--style='margin-left: 70px;-->
            <div class="row">
                <div class="col-12 d-flex justify-content-center text-center">
                    <div class="col-3">
                        <button class="btn btn-outline-success" type='button' id='retroceso'> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                            </svg>
                        Retroceso
                        </button> 
                    </div>
                    <div class="col-3">
                        <button class="btn btn-outline-primary" type="submit"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                            </svg>
                            Actualizar
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-outline-danger" type="submit" id='eliminar'> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        <script src='../js/editar_acuerdo.js'></script>
    </form>
<?php  
?>