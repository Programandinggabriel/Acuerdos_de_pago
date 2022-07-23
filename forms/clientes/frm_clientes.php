<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <script src="../../js/bootstrap.js"></script> 
        <title> INSERTAR </title>
    </head>
<body class="bg-light p-2 row justify-content-center">
<form class="border border-success rounded p-5 w-75" method="POST" action="acciones_clientes.php" > 
    <h1 class='text-center'>DATOS DEL CLIENTE</h1>    
    <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value= "insertar"></input>

        <div class="text-center">
            <div class="form-group row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg">NUMERO DE OBLIGACIÓN</label>
                <div class=col-sm-4>
                    <input class="form-control bg-light" type="text" required name="inNumobligClnt"></input>
                </div>
            </div>           

            <div class="form-group row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg">NUMERO DE CÉDULA</label>
                <div class=col-sm-4>
                    <input class="form-control bg-light" type="text" required name="inCedulaClnt"></input>
                </div>
            </div>
            
            <div class="form-group row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg" >NOMBRE COMPLETO </label>
                <div class=col-sm-4>
                    <input class="form-control bg-light" type="text" required  name="inNomClnt"></input>
                </div>
            </div>
            
            <div class="form-group row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg" > EDAD </label>
                <div class=col-sm-4>
                    <input class="form-control bg-light" type="number" name="inEdadClnt"></input>
                </div>
            </div>

            <div class="form-group row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg">CIUDAD</label>
                <div class=col-sm-4>
                    <input class="form-control bg-light" type="text" name="inCiudadClnt"></input>
                </div>
            </div> 

            <div class="form-group row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg">NUMERO DE CELULAR</label>
                <div class=col-sm-4>
                    <input class="form-control bg-light" type="text" name="inNumCelClnt"></input>
                </div>
            </div>

            <div class="form-group row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg">CORREO ELECTRÓNICO</label>
                <div class=col-sm-4>
                    <input  class="form-control bg-light" type="email" name="inEmailClnt"></input>
                </div>
            </div>

            <div class="form-groip row mt-3 justify-content-center">
                <label class="col-sm-3 col-form-label-lg">SALDO CAPITAL</label>
                <div class=col-sm-4>
                    <input class="form-control bg-light" type="number" required name="inSaldoCap"></input>
                </div>
            </div>
        </div>
    
        <div class='container border border-success rounded p-2 mt-5 w-75'>
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
        
    <script>
        document.getElementById('retroceso').addEventListener('click', retroceder, false);
        function retroceder(){window.location.href='../../index.html'};
    </script>
</body>
</html>