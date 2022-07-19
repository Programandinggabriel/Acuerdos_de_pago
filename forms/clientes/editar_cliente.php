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
        <meta name="viewport" content="width=d40ce-width, 40tial-scale=1.0"> <!--responsive-->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <script src="../../js/bootstrap.js"></script>
        <title>Insertar</title>
    </head>
    <body class="bg-light p-2"> 
        <form class="border border-success rounded p-5" method="POST" action="acciones_clientes.php" >
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
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label" >NOMBRE COMPLETO </label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNomClnt" name="inNomClnt" value="<?php echo $resultado[1]?>"></input>
                </div>
            </div>
            
            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label" > EDAD </label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="number" id="inEdadClnt" name="inEdadClnt" value="<?php echo $resultado[2]?>"></input>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">CIUDAD</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inCiudadClnt" name="inCiudadClnt" value="<?php echo $resultado[3]?>"></input>
                </div>
            </div> 

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NUMERO DE CELULAR</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNumCelClnt"  name="inNumCelClnt" value="<?php echo $resultado[4]?>"></input>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">CORREO ELECTRÓNICO</label>
                <div class=col-sm-8>
                    <input  class="form-control bg-light" type="email" id="inEmailClnt" name="inEmailClnt" value="<?php echo $resultado[5]?>"></input>
                </div>
            </div>

            <div class="form-groip row mt-3">
                <label class="col-sm-3 col-form-label col-form-label-sm">NÚMERO DE OBLIGACIÓN</label>
                <div class=col-sm-8>
                    <input class="form-control bg-light" type="text" id="inNumoblClnt" name="inNumoblClnt" value="<?php echo $resultado[6]?>"></input>
                </div>
            </div>
            
            <div class="container border border-success rounded p-2 mt-5"><!--style='margin-left: 70px;-->
                <div class="row">
                <div class="col-12 d-flex justify-content-center text-center">
                    <div class="col-4">
                        <button class="btn btn-outline-success" type='button' onclick= window.location.href='../../index.html'> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                            </svg>
                        Retroceso
                        </button> 
                    </div>
                    <div class="col-4">
                        <button class="btn btn-outline-primary" type="submit"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z"/>
                            </svg>
                            Actualizar
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-outline-danger" type="submit" onclick='cambiavalor()'> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                            Eliminar
                            <script>
                                function cambiaValor(){
                                    document.getElementsByName("accion")[0].value = "eliminar";
                                }
                            </script>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </body>
    <?php 

?>  