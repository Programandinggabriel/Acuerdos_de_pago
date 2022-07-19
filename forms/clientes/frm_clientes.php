<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <script src="../../js/bootstrap.js"></script>
        <title> INSERTAR </title>
    </head>
<body class="bg-light p-2">
    <form class="border border-success rounded" method="post" action="acciones_clientes.php" style="width: 90%; margin: 0px auto; padding: 20px 20px;"> 
        <h1 class='text-center'>DATOS DEL CLIENTE</h1>    
        <!--VARIABLE DE CASE == ACCION USUARIO-->
            <input type="hidden" name="accion" value= "insertar"></input>
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NUMERO DE CÉDULA</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" id="inCedulaClnt" type="text" name="inCedulaClnt"></input>
                </div>
            </div>
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label" >NOMBRE COMPLETO </label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNomClnt" name="inNomClnt"></input>
                </div>
            </div>
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label" > EDAD </label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="number" id="inEdadClnt" name="inEdadClnt"></input>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">CIUDAD</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inCiudadClnt" name="inCiudadClnt"></input>
                </div>
            </div> 

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NUMERO DE CELULAR</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNumCelClnt"  name="inNumCelClnt"></input>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">CORREO ELECTRÓNICO</label>
                <div class=col-sm-8>
                    <input  class="form-control bg-light" type="email" id="inEmailClnt" name="inEmailClnt"></input>
                </div>
            </div>

            <div class="form-groip row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NÚMERO DE OBLIGACIÓN</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNumoblClnt" name="inNumoblClnt"></input>
                </div>
            </div>

            <div class='container p-4' style="margin-left: 35%;">
                <div class="row">
                    <div class="col-2">
                        <button type='button'  class="btn btn-outline-success" onclick= window.location.href='../../index.html'> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                            </svg>
                            Atrás
                        </button>        
                    </div>    
                    <div class="col-3">
                        <button type="submit" class="btn btn-outline-secondary text-dark w-50"> <b> INSERTAR </b></button>
                    </div>
                </div>
            </div>
        </form>
</body>
</html>