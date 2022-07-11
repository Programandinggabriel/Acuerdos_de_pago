<?php 
    include('../../conexion/conexionbasedatos.php');
    
    $idclienteUpdate = $_GET['idcliente'];
    $querySelect = "SELECT * FROM clientes WHERE idcliente LIKE '" .$idclienteUpdate ."'";
    $respuesta = mysqli_query($conexion,  $querySelect);
    
    //echo $queryUpdate;
    if($respuesta){
       //SIEMPRE SE EDITARA POR PRIMARY KEY SOLO DARA 1 REG 
        $resultado = mysqli_fetch_array($respuesta);
    }
    //CARGA FORMULARIO DEL PRINCIPIO
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <script src="../../js/bootstrap.js"></script>
        <title>Insertar</title>
    </head>
    <body class="bg-light"> 
        <form method="POST" action="acciones_clientes.php" style="width: 800px; margin: 0px auto; padding: 20px 20px;">
        <button class="btn btn-outline-success m-4 mb-0 mx-0" type='button' onclick= window.location.href='../../index.html'> 
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="70" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
            </svg>
        </button> 
        <h1 class='text-center'>DATOS DEL CLIENTE</h1>
            <!--VARIABLE DE CASE == ACCION USUARIO-->
            <input type="hidden" name="accion" value="editar"></input>
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NUMERO DE CÉDULA</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" id="inCedulaClnt" type="text" name="inCedulaClnt" value="<?php echo $resultado[0]?>" 
                    readonly="readonly"></input>
                </div>
            </div>
            
            <div class="form-groip row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NÚMERO DE OBLIGACIÓN</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNumoblClnt" name="inNumoblClnt" value="<?php echo $resultado[1]?>"></input>
                </div>
            </div>
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label" >NOMBRE COMPLETO </label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNomClnt" name="inNomClnt" value="<?php echo $resultado[2]?>"></input>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NUMERO DE CELULAR</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNumCelClnt"  name="inNumCelClnt" value="<?php echo $resultado[3]?>"></input>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">CORREO ELECTRÓNICO</label>
                <div class=col-sm-8>
                    <input  class="form-control bg-light" type="email" id="inEmailClnt" name="inEmailClnt" value="<?php echo $resultado[4]?>"></input>
                </div>
            </div>
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">CIUDAD</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inCiudadClnt" name="inCiudadClnt" value="<?php echo $resultado[5]?>"></input>
                </div>
            </div> 
            <div class="form-group row mt-5">
                <input class="btn btn-outline-secondary text-dark" style="margin-left: 15%; width: 200px" value="ACTUALIZAR" type="submit"></input>
                <input class="btn btn-outline-secondary text-dark" style="margin-left: 15%; width: 200px" value="BORRAR" type="submit" onclick="cambiaValor()"></input>
                <script>
                    function cambiaValor(){
                        document.getElementsByName("accion")[0].value = "eliminar";
                    }
                </script>
            </div>
        </form>
    </body>
    <?php 

?>  