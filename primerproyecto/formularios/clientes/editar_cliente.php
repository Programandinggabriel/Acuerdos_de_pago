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
            
            
            #actualizar{
                padding-top: 30px;
                width: 350px;
                margin: 0px -150px;
            }
            #borrar{
                padding-top: 15px;
                width: 350px;
                margin: 0px -150px;
            }
        </style>
    </head>
    <header>ACTUALIZAR DATOS</header>
    <form method="POST" action="acciones_clientes.php">
        <!--VARIABLE DE CASE == ACCION USUARIO-->
        <input type="hidden" name="accion" value="editar"></input>
        
        <div>
            <label>NUMERO DE CÉDULA</label>
            <input type="text" id="inCedulaClnt" name="inCedulaClnt" value="<?php echo $resultado[0]?>" 
            readonly="readonly"></input>
        </div>
        
        <div>
            <label>NÚMERO DE OBLIGACIÓN</label>
            <input type="text" id="inNumoblClnt" name="inNumoblClnt" value="<?php echo $resultado[1]?>"></input>
        </div>
        
        <div>
            <label>NOMBRE COMPLETO </label>
            <input type="text" id="inNomClnt" name="inNomClnt" value="<?php echo $resultado[2]?>"></input>
        </div>

        <div>
            <label>NUMERO DE CELULAR</label>
            <input type="text" id="inNumCelClnt"  name="inNumCelClnt" value="<?php echo $resultado[3]?>"></input>
        </div>

        <div>
            <label id="estratoOut">CORREO ELECTRÓNICO</label>
            <input type="email" id="inEmailClnt" name="inEmailClnt" value="<?php echo $resultado[4]?>"></input>
        </div>
        
        <div>
            <label>CIUDAD</label>
            <input type="text" id="inCiudadClnt" name="inCiudadClnt" value="<?php echo $resultado[5]?>"></input>
        </div>
        
        <div id="actualizar">
            <input type="submit" value="ACTUALIZAR"></input>
        </div>
        <div id="borrar">
            <input type="submit" value="BORRAR" onclick="cambiaValor()"></input>
            <script>
                function cambiaValor(){
                    document.getElementsByName("accion")[0].value = "eliminar";
                }
            </script>
        </div>
    </form>
    <?php 

?>  