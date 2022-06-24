<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            header{
                width: 600px; 
                text-align: center; 
                margin: 30px auto;
            }

            form{
                width: 800px;
                margin: 30px auto;
                padding: 20px 20px;
            }
            label{
                display: block;
                padding-left: 15px;
                text-indent: -20px;
                text-align: left;                
            }
            input{
              width: 350px;
              height: 30px;
              padding: 0;
              margin: 0;
              vertical-align: top;
              position: relative;
              top: -25px;
              margin-left: 330px;
              text-align: center;
            }
            #enviar{
                padding-top: 30px;
                width: 350px;
                margin: 0px -150px;
            }
            
        </style>
    </head>
<body>
    <header>DATOS DE EL ASESOR</header>
    <form method="POST" action="acciones_asesor.php">
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value= "insertar"></input>
        <div>
            <label>N° DOCUMENTO ASESOR</label>
            <input type="text" id="inNombreAsesor" name="inNdocAsesor"></input>
            <output id="outNombreAsesor"></output>
        </div>
            
        <div>
            <label>NOMBRES Y APELLIDOS COMPLETOS</label>
            <input type="text" id="inApellidoAsesor" name="inNombreAsesor"></input>
            <output id="outApellidoAsesor"></output>
        </div>
            
        <div>
            <label>FECHA DE NACIMIENTO</label>
            <input type="date" name="inFechNacAsesor"></input>
            <output id="outFechaNacimiento"></output>
        </div>

        <div>
            <label>DIRECCION DE VIVIENDA</label>
            <input type="text" name="inViviendaAsesor"></input>
            <output id="outDireccionDeVivienda"></output> 
        </div>

        <div>
            <label id="estratoOut">ESTRÁTO SOCIAL</label>
            <input type="range" id="entradaEstrato" max="7" min="1" value="1" name="inEstratoAsesor"></input>
            <output id="outEstratoSocial"></output> 
            
            <script>
                var entrada = document.getElementById('entradaEstrato');
                var salida = document.getElementById('outEstratoSocial');
                salida.value = entrada.value;
                entrada.addEventListener("input",function(){
                    salida.value = entrada.value;}, false);
            </script>
        </div>
            
        <div>
            <label>CORREO EMPRESARIAL</label>
            <input type="email" name="inCorreoAsesor"></input>
            <output id="outemail"></output>
        </div>
        <div id="enviar">
            <input type="submit" value= "INSERTAR"></input>
        </div>
    </form>
</body>
</html>