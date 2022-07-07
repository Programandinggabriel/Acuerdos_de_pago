<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.js"></script>
    <title>Insertar</title>
</head>
<body class="bg-body">
    <form method="POST" action="acciones_asesor.php" style="width: 800px; margin: 30px auto; padding: 20px 20px;">
        <h1 class='text-center'>DATOS DEL ASESOR</h1>
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value="insertar"></input>
        
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">N° DOCUMENTO</label>
            <div class="col-sm-8">
                <input type="text" class="form-control bg-light" name="inNdocAsesor" required="required"></input>
            </div>    
        </div>
            
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">NOMBRES Y APELLIDOS COMPLETOS</label>
            <div class="col-sm-8">
                <input type="text" class="form-control bg-light" name="inNombreAsesor"></input>
            </div>
        </div>
            
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">FECHA DE NACIMIENTO</label>
            <div class=col-sm-8>
                <input type="date" class="form-control bg-light" name="inFechNacAsesor"></input>
            </div>
        </div>

        <div class="form-group row mt-3">
        <label class="col-sm-3 col-form-label col-form-label-sm">DIRECCION DE VIVIENDA</label>
            <div class=col-sm-8>
                <input type="text" class="form-control bg-light" name="inViviendaAsesor"></input> 
            </div>
        </div>

        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">ESTRÁTO SOCIAL</label>
            <div class="col-sm-2">
                <input type="number" class="form-control bg-light" max="6" min="1" name="inEstratoAsesor"></input>
            </div>
        </div>
            
        <div class="form-group row mt-3">
        <label class="col-sm-3 col-form-label col-form-label-sm">CORREO EMPRESARIAL</label>
        <div class=col-sm-8>
            <input type="email" class="form-control bg-light" name="inCorreoAsesor"></input>
        </div>
        <div class="form-group row mt-5">
            <button type="submit" class="btn btn-outline-secondary text-dark w-50" style="margin-left: 26%"><b>INSERTAR</b></input>   
        </div>
    </form>
</body>
</html>