<?php
    include('../../../conexion/con_database.php');

    $idAcuerdo = $_GET['idAcuerdo'];
    $querySelect = "SELECT * FROM acuerdos WHERE idacuerdo = '" .$idAcuerdo. "'";
    $consulta = mysqli_query($conexion, $querySelect);
    
    $info_Acuerdo = mysqli_fetch_row($consulta);
    
    $querySelect = "SELECT * FROM infclient WHERE numobligacion = '" .$info_Acuerdo[1]. "'";
    $consulta = mysqli_query($conexion, $querySelect);

    $info_Cliente = mysqli_fetch_row($consulta);

    //VISTA FORM
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  

    <script src='../js/funciones/funciones.js'></script>

    <title>Editar</title>
</head>

<section class="p-3 row justify-content-center">
    <h1 class=' text-center mb-5'>DATOS DE EL ACUERDO</h1>
    <form class='border border-success rounded w-90 p-3 text-center' method='POST' action="acciones_acuerdos.php" id='frm_acuedos'>
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" id="accion" name="accion"></input>
        <input type="hidden" name="idAcuerdo" value="<?php echo $info_Acuerdo[0]?>"></input>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label-md'>
                <label>NUMERO IDENTIFICACIÓN (CLIENTE)</label>
            </div>
            <div class='col-sm-3'>
                <input  class="form-control bg-light" type="number" value=<?php echo $info_Acuerdo[2]?> name="inidCliente" id ="inidCliente" readonly ></input>
            </div>
            <div class="col-sm-1"></div>

            <div class='col-md-2 col-form-label-md'>
                <label>NUMERO DE OBLIGACIÓN</label>
            </div>
            <div class="col-sm-3">
                <input  class="form-control bg-light" type="number" value=<?php echo $info_Acuerdo[1]?> id="inNobligAcuerdo" name="inNobligAcuerdo" readonly></input>
            </div>  
        </div>
        
        <div class='row mt-5'>
            <div class='col-md-2 col-form-label-md'>
                <label>VALOR CAPITAL</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="text"  value=<?php echo number_format($info_Cliente[7],0,'','.')?> id="inValCapital" name="inValCapital" readonly></input>
            </div>
            
            <div class='col-1'></div>

            <div class='col-md-2 col-form-label-md'>
                <label>VALOR TOTAL</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="text" value=<?php echo number_format($info_Cliente[8],0,'','.')?> id="inValTotal" name="inValTotal" readonly></input>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label-md'>
                <label>VALOR ACORDADO</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="text" value=<?php echo number_format($info_Acuerdo[5],0,'','.')?> id="inValorAcuerdo" name="inValorAcuerdo"></input>
            </div>
            
            <div class='col-1'></div>

            <div class='col-md-2 col-form-label-md'>
                <label>CUOTAS DE EL ACUERDO</label>
            </div>
            <div class=col-sm-1>
                <input  class="form-control bg-light" type="number" value=<?php echo $info_Acuerdo[6]?> name="inCuotas" id ="inCuotas" readonly></input>
            </div>
            <div class=col-md-2>
                <input  class="form-control bg-light" type="text" name="inTipoAcuerdo" id ="inTipoAcuerdo" readonly></input>
            </div>
            <div class='col-1'>
                <button  class="btn btn-outline-info" type="button" id="btn_cuotas">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                    </svg>
                </button>  
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label-md'>
                <label>FECHA ACUERDO</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="date" value=<?php echo $info_Acuerdo[3] ?> name="inFechAcuerdo" id='inFechAcuerdo'></input> 
            </div>
            
            <div class='col-1'></div>

            <div class='col-md-2 col-form-label-md'>
                <label>FECHA DE PAGO (CUOTAS)</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="date" value=<?php echo $info_Acuerdo[4] ?> name="inFechPago" id='inFechPago'></input>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2'>
                <label>COMENTARIOS</label>
            </div>
            <div class='col-md-9'>
                <textarea 
                    class='form-control bg-light'
                    rows='8' 
                    id='inComments'
                    name='inComments'><?php echo $info_Acuerdo[8] ?>
                </textarea>
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
                    <button class="btn btn-outline-primary" type="submit" id='actualizar'> 
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
    </div>
</form>
</section>    
<script src='../js/editar_acuerdo.js'></script>

<?php  
    if(isset($_GET['inCuotas'])){
        echo"<script>"; 
            echo "document.getElementById('inCuotas').value=" . $_GET['inCuotas'].";";
            echo "$('#inCuotas').trigger('change');";
        echo"</script>"; 
    };
?>