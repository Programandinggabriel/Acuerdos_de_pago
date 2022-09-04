<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    

    <title>Nuevo acuerdo</title>
</head>
<section class="p-5 row justify-content-center">
    <h1 class=' text-center mb-5'>DATOS DE EL ACUERDO</h1>
    <form class='border border-success rounded w-90 p-3 text-center' method='POST' action="acciones_acuerdos.php" id='frm_acuedos'>
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value='insertar'>   
        
        <div class='row mt-5'>
            <div class='col-md-2 col-form-label-md'>
                <label>NUMERO IDENTIFICACIÓN (CLIENTE)</label>
            </div>
            <div class='col-sm-3'>
                <input class="form-control bg-light" type="number" min="1" step="any" placeholder='!ingrese numero de obligación¡' name="inidCliente" id ="inidCliente" ></input>
            </div>
            <div class="col-sm-1">
                <button class="btn btn-outline-primary" id="btn_oblig" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>  
            </div>

            <div class='col-md-2 col-form-label-md'>
                <label>NUMERO DE OBLIGACIÓN</label>
            </div>
            <div class="col-sm-3">
                <input class="form-control bg-light" type="number" step="any" id="inNobligAcuerdo" name="inNobligAcuerdo" readonly ></input>
            </div> 
        </div>
        
        <div class='row mt-5'>
            <div class='col-md-2 col-form-label-md'>
                <label>VALOR CAPITAL</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="text" id="inValCapital" name="inValCapital" readonly ></input>
            </div>
            
            <div class='col-1'></div>

            <div class='col-md-2 col-form-label-md'>
                <label>VALOR TOTAL</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="text" id="inValTotal" name="inValTotal" readonly ></input>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label-md'>
                <label>VALOR ACORDADO</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="text" id="inValorAcuerdo" name="inValorAcuerdo" ></input>
            </div>
            
            <div class='col-1'></div>

            <div class='col-md-2 col-form-label-md'>
                <label>CUOTAS DE EL ACUERDO</label>
            </div>
            <div class=col-sm-1>
                <input  class="form-control bg-light" type="number" min="1" step="any" name="inCuotas" id ="inCuotas"  readonly></input>
            </div>
            <div class=col-md-2>
                <input  class="form-control bg-light" type="text" name="inTipoAcuerdo" id ="inTipoAcuerdo"  readonly></input>
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
                <input class="form-control bg-light" type="date"  name="inFechAcuerdo" id='inFechAcuerdo' readonly></input> 
            </div>
            
            <div class='col-1'></div>

            <div class='col-md-2 col-form-label-md'>
                <label>FECHA DE PAGO (CUOTAS)</label>
            </div>
            <div class=col-sm-3>
                <input class="form-control bg-light" type="date" name="inFechPago" id='inFechPago' ></input>
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
                    placeholder='Ejemplo: En el mes de (...), el cliente pagara 2 cuotas para asi cumplir con el acuerdo estipulado, antes del periodo de tiempo acordado...' 
                    id='inComments'>
                </textarea>
            </div>
        </div>

        <div class='container border border-success rounded p-2 mt-5 w-75'>
            <div class='row'>
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
                        <button type="submit" class="btn btn-outline-primary"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-cassette-fill" viewBox="0 0 16 16">
                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h.191l1.862-3.724A.5.5 0 0 1 4 10h8a.5.5 0 0 1 .447.276L14.31 14h.191a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13ZM4 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM6 6a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1Z"/>
                                <path d="m13.191 14-1.5-3H4.309l-1.5 3h10.382Z"/>
                            </svg>
                            <b> Guardar </b>
                        </button>
                    </div>
                    
                    <div class="col-3">
                        <button type="submit" class="btn btn-outline-warning" id='limpiar'> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-cassette-fill" viewBox="0 0 16 16">
                                <path d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                            <b> Limpiar </b>
                        </button>
                    </div>
                </div> 
            </div>
        </div>
    </form>
</section>
<script src='../js/frm_acuerdos.js'></script>
</html>

<?php 
    //validacion de llegada de variables al seleccionar obligacion
    if(isset($_GET['inidCliente']) && isset($_GET['inNobligAcuerdo']) && isset($_GET['inValCapital']) && isset($_GET['inValTotal'])){
        echo "<script>";
               echo"with(document){
                    getElementById('inidCliente').value= '". $_GET['inidCliente'] ."';
                    getElementById('inNobligAcuerdo').value='". $_GET['inNobligAcuerdo'] ."';
                    getElementById('inValCapital').value= '". number_format($_GET['inValCapital'],0,'','.')."';
                    getElementById('inValTotal').value='". number_format($_GET['inValTotal'],0,'','.')."';
                }";
        echo"</script>"; 
    };

    if(isset($_GET['inCuotas'])){
        echo"<script>"; 
            echo "document.getElementById('inCuotas').value=" . $_GET['inCuotas'].";";
            echo "$('#inCuotas').trigger('change');";
        echo"</script>"; 
    };
    /*
    echo"//limpia la url quita variables get
    window.history.pushState({}, document.title, '/' + 'project_acuerdos_de_pago/forms/acuerdo_pago/actions/frm_acuerdos.php');";
    */
    
?>