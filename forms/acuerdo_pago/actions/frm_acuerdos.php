<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.js"></script>
    

    <title>Nuevo acuerdo</title>
</head>
<section class="bg-light p-5 row justify-content-center">
    <form class="border border-success rounded w-75 p-3" Method='POST' action='' name='insert_acrd'>
    <h1 class='text-center'>DATOS DEL ACUERDO</h1>
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value='insertar'>   
            <div class='text-center'>
            <div class="container">
                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg">NUMERO IDENTIFICACIÓN (CLIENTE)</label>
                    <div class="col-sm-3">
                        <input  class="form-control bg-light" type="number" min="1" step="any" id ="inidCliente" name="inidCliente"></input>
                    </div>
                    <div class="col-1">
                    <button  class="btn btn-outline-primary" id="btn_muestra_oblig" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>  
                </div>
                </div>
           
            </div>

                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg">NUMERO DE OBLIGACIÓN</label>
                    <div class="col-sm-4">
                        <input  class="form-control bg-light" type="number" min="1" step="any" id="inNobligAcuerdo" name="inNobligAcuerdo" required></input>
                    </div>    
                </div>

                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg">VALOR CAPITAL </label>
                    <div class=col-sm-4>
                        <input class="form-control bg-light" type="number" min="1" step="any" id="inValorAcuerdo" name="inValorAcuerdo"></input>
                </div>

                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg">FECHA ACUERDO</label>
                    <div class=col-sm-4>
                        <input class="form-control bg-light" type="date" id="inFechAcuerdo" name="inFechAcuerdo"></input>
                    </div>
                </div>
                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg"> FECHA DE PAGO </label>
                    <div class="col-sm-4">
                        <input class="form-control bg-light" type="date" name="inFechPago"></input>
                    </div>
                </div>

                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg"> CUOTAS </label>
                    <div class=col-sm-4>
                    <input class="form-control bg-light" type="number" min="1" step="any" name="inViviendaAsesor"></input>
                </div>
                
                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg"> TIPO </label>
                    <div class="col-sm-4">
                        <input class="form-control bg-light" type="text" readonly name="inTipoAcuerdo"></input>
                    </div>
                </div>

                <div class="form-group row mt-3 justify-content-center">
                    <label class="col-sm-3 col-form-label-lg"> COMENTARIOS (OPCIONAL) </label>
                    <div class="col-sm-4">
                        <textarea class="form-control bg-light" type="text" autocomplete='on' rows='5' name="inComments"></textarea>
                    </div>
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
                        <button class="btn btn-outline-primary" type="submit" > 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-cassette-fill" viewBox="0 0 16 16">
                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h.191l1.862-3.724A.5.5 0 0 1 4 10h8a.5.5 0 0 1 .447.276L14.31 14h.191a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13ZM4 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM6 6a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1Z"/>
                                <path d="m13.191 14-1.5-3H4.309l-1.5 3h10.382Z"/>
                            </svg>
                            <b> Guardar </b>
                        </button>
                    </div>

                </div> 
                </div>
            </div>
    </form>
    <script src="../js/frm_acuerdos.js"></script>
</section>
</html>

<?php 
    //validacion de llegada de variables al seleccionar obligacion
    if(isset($_GET['inidCliente']) && isset($_GET['inNobligAcuerdo']) && isset($_GET['inValorAcuerdo'])){
        echo "<script>;
                with(document){
                    getElementById('inidCliente').value=".$_GET['inidCliente']."
                    getElementById('inNobligAcuerdo').value=".$_GET['inNobligAcuerdo']."
                    getElementById('inValorAcuerdo').value=".$_GET['inValorAcuerdo']."
                } 
                //window.location = './frm_acuerdos.php';
                /*window.location.hash='no-back-button';
                window.location.hash='Again-No-back-button';*/
            </script>"; 

    }
    
?>