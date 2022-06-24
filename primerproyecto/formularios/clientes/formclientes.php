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
                justify-content: center;                
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
    <header>DATOS DE EL CLIENTE</header>
    
    <form method="post" action="acciones_clientes.php">
            <!--VARIABLE DE CASE == ACCION USUARIO-->
            <input type="hidden" name="accion" value= "insertar"></input>
            
            <div >
                <label>NUMERO DE CÉDULA</label>
                <input type="text" id="inCedulaClnt" name="inCedulaClnt"></input>
                <output id="outcedulaClnt"></output>
            </div>
            
            <div>
                <label>NÚMERO DE OBLIGACIÓN</label>
                <input type="text" id="inNumoblClnt"  name="inNumoblClnt"></input>
                <output id="outNumoblClnt"></output>
            </div>
            
            <div>
                <label>NOMBRE COMPLETO </label>
                <input type="text" id="inNomClnt" name="inNomClnt"></input>
                <output id="outnomClnt"></output>
            </div>

            <div>
                <label>NUMERO DE CELULAR</label>
                <input type="text" id="inNumCelClnt"  name="inNumCelClnt"></input>
                <output id="outNumcelClnt"></output> 
            </div>

            <div>
                <label id="estratoOut">CORREO ELECTRÓNICO</label>
                <input type="email" id="inEmailClnt" name="inEmailClnt" ></input>
                <output id="outEmailClnt"></output> 
            </div>
            
            <div>
                <label>CIUDAD</label>
                <input type="text" id="inCiudadClnt" name="inCiudadClnt" ></input>
                <output id="outCiudadClnt"></output>   
            </div>
    
            <div id="enviar">
                <input type="submit"></input>
            </div>
        </form>
    
</body>
</html>