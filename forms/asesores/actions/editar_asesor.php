 <?php
    include('../../../conexion/con_database.php');

    $idasesor = $_GET['idasesor'];
    $querySelect = "SELECT * FROM asesores WHERE idasesor = '" .$idasesor. "'";
    $consulta = mysqli_query($conexion, $querySelect);
    
    $resultado = mysqli_fetch_array($consulta);

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
<form class='w-100 p-3 text-center' method="POST" action="acciones_asesor.php">
    <h1 class='text-center' style='margin-top: 100px;'>DATOS DEL ASESOR</h1>
    <!--VARIABLE DE CASE == ACCION USUARIO-->
    <input type="hidden" name="accion" value="editar"></input>
        
        <div class='row mt-5'>
            <div class='col-md-2 col-form-label'>
                <label>N° DOCUMENTO</label>
            </div>
            <div class='col-md-3'>
                <input type="text" class="form-control bg-light" name="inNdocAsesor" readonly value="<?php echo $resultado[0]?>"></input>
            </div>    

            <div class='col-md-2 col-form-label'>
                <label>NOMBRES Y APELLIDOS COMPLETOS</label>
            </div>
            <div class='col-md-3'>
                <input type="text" class="form-control bg-light" name="inNombreAsesor" value="<?php echo $resultado[1]?>"></input>
            </div>
        </div>
        
        <div class='row mt-5'>
            <div class='col-md-2 col-form-label'>
                <label>FECHA DE NACIMIENTO</label>
            </div>
            <div class='col-md-3'>
                <input type="date" class="form-control bg-light" name="inFechNacAsesor" value="<?php echo $resultado[2]?>"></input>
            </div>

            <div class='col-md-2 col-form-label'>
                <label>EDAD</label>
            </div>
            <div class='col-md-1'>
                <input type="number" class="form-control bg-light" name="inEdadAsesor" value="<?php echo $resultado[3]?>"></input>
            </div>

            <div class='col-md-1 col-form-label'>
                <label>ESTRÁTO SOCIAL</label>
            </div>
            <div class='col-md-1'>
                <input type="number" class="form-control bg-light" max="6" min="1" name="inEstratoAsesor" value="<?php echo $resultado[6]?>"></input>
            </div>
        </div>

        <div class='row mt-5'>
            <div class='col-md-2 col-form-label'>
                <label>CORREO EMPRESARIAL</label>
            </div>
            <div class='col-md-3'>
                <input type="email" class="form-control bg-light" name="inCorreoAsesor" value="<?php echo $resultado[4]?>"></input>
            </div>

            <div class='col-md-2 col-form-label'>
                <label>CORREO EMPRESARIAL</label>
            </div>
            <div class='col-md-3'>
                <input type="address" class="form-control bg-light" name="inViviendaAsesor" value="<?php echo $resultado[5]?>"></input>
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
    </form>
</section>
    <script src='../js/editar_asesor.js'></script>
<?php  

?>