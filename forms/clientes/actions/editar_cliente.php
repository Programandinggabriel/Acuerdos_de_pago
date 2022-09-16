<?php 
    include('../../../conexion/con_database.php');
    
    $numOblUpdate = $_GET['inNumobligClnt'];
    $querySelect = "SELECT * FROM infclient WHERE numobligacion LIKE '" .$numOblUpdate ."'";
    $respuesta = mysqli_query($conexion,  $querySelect);
    
    $resultado = mysqli_fetch_array($respuesta);
    
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
<section class="p-2 row justify-content-center">
    <h1 class='text-center' style='margin-top: 100px;'>DATOS DE EL CLIENTE</h1>  
    <form class='w-100 p-3 text-center' method="POST" action="acciones_clientes.php"> 
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value="insertar"></input>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label'>
                <label>NUMERO DE OBLIGACIÓN</label>
            </div>
            <div class='col-md-3'>
                <input class="form-control bg-light" type="number" value =<?php echo $resultado[0];?> required name="inNumobligClnt"></input>
            </div>

            <div class='col-md-2 col-form-label'>
                <label>NÚMERO DE IDENTIFICACIÓN</label>
            </div>
            <div class='col-md-3'>
                <input class="form-control bg-light" type="number" value=<?php echo $resultado[1];?> required name="inCedulaClnt"></input>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label'>
                <label>NOMBRE COMPLETO</label>
            </div>
            <div class='col-md-3'>
                <input class="form-control bg-light" type="text" value=<?php echo $resultado[2];?> required  name="inNomClnt"></input>
            </div>

            <div class='col-md-2 col-form-label'>
                <label>EDAD</label>
            </div>
            <div class='col-md-3'>
                <input class="form-control bg-light" type="number" value =<?php echo $resultado[3];?> name="inEdadClnt"></input>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label'>
                <label>CIUDAD</label>
            </div>
            <div class='col-md-3'>
                <input class="form-control bg-light" type="text" value =<?php echo $resultado[4];?> name="inCiudadClnt"></input>
            </div>

            <div class='col-md-2 col-form-label'>
                <label>NUMERO DE CELULAR</label>
            </div>
            <div class='col-md-3'>
                <input class="form-control bg-light" type="number" value =<?php echo $resultado[5];?> name="inNumCelClnt"></input>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label'>
                <label>CORREO ELECTRÓNICO</label>
            </div>
            <div class='col-md-3'>
                <input  class="form-control bg-light" type="email" value =<?php echo $resultado[6];?> name="inEmailClnt"></input>
            </div>

            <div class='col-md-1 col-form-label'>
                <label>SALDO CAPITAL</label>
            </div>
            <div class='col-md-2'>
                <input class="form-control bg-light" type="number" value =<?php echo $resultado[7];?> required name="inSaldoCap"></input>
            </div>

            <div class='col-md-1 col-form-label'>
                <label>SALDO TOTAL</label>
            </div>
            <div class='col-md-2'>
                <input class="form-control bg-light" type="number" value =<?php echo $resultado[8];?> required name="inSaldoCap"></input>
            </div>
        </div>

        <div class='container border border-success rounded p-2 w-75' style='margin-top: 100px;'>
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
                    <button type="submit" class="btn btn-outline-primary"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-cassette-fill" viewBox="0 0 16 16">
                            <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h.191l1.862-3.724A.5.5 0 0 1 4 10h8a.5.5 0 0 1 .447.276L14.31 14h.191a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13ZM4 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM6 6a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1Z"/>
                            <path d="m13.191 14-1.5-3H4.309l-1.5 3h10.382Z"/>
                        </svg>
                        <b> Guardar </b>
                    </button>
                </div>
                
                <div class="col-3">
                    <input type="file" class="form-control-file"> 
                    
                    </input>
                </div>
            
            </div>   
            </div>
        </div>
    </form>
<script src='../js/frm_clientes.js'></script>
<?php 

?>  