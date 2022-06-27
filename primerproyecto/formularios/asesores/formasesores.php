<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <style>
            form{
                width: 800px;
                margin: 30px auto;
                padding: 20px 20px;
            }            
        </style>
    </head>
<body style="background: #C6C1AC">
    <h1>DATOS DE EL ASESOR</h1>
    <form method="POST" action="acciones_asesor.php">
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value="insertar"></input>
        
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">N° DOCUMENTO ASESOR</label>
            <div class="col-sm-8">
                <input type="text" class="form-control bg-secondary bg-secondary" id="inNombreAsesor" name="inNdocAsesor"></input>
            </div>    
        </div>
            
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">NOMBRES Y APELLIDOS COMPLETOS</label>
            <div class="col-sm-8">
                <input type="text" class="form-control bg-secondary" id="inApellidoAsesor" name="inNombreAsesor"></input>
            </div>
        </div>
            
        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">FECHA DE NACIMIENTO</label>
            <div class=col-sm-8>
                <input type="date" class="form-control bg-secondary" name="inFechNacAsesor"></input>
            </div>
        </div>

        <div class="form-group row mt-3">
        <label class="col-sm-3 col-form-label col-form-label-sm">DIRECCION DE VIVIENDA</label>
            <div class=col-sm-8>
                <input type="text" class="form-control bg-secondary" name="inViviendaAsesor"></input> 
            </div>
        </div>

        <div class="form-group row mt-3">
            <label class="col-sm-3 col-form-label col-form-label-sm">ESTRÁTO SOCIAL</label>
            <div class="col-sm-2">
                <input type="number" class="form-control bg-secondary" name="inEstratoAsesor"></input>
            </div>
        </div>
            
        <div class="form-group row mt-3">
        <label class="col-sm-3 col-form-label col-form-label-sm">CORREO EMPRESARIAL</label>
        <div class=col-sm-8>
            <input type="email" class="form-control bg-secondary" name="inCorreoAsesor"></input>
        </div>
        <div class="form-group row mt-5">
            <div id="col-sm-4">
                <button type="submit" class="form-control btn btn-outline-secondary text-dark"><b>INSERTAR</b></input>
            </div>
        </div>
    </form>
</body>
</html>