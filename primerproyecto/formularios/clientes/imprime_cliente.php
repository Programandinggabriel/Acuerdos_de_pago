<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.js"></script>
    <title>Contenido Actual</title>
</head>
<body>

<button type='button' class="btn btn-secondary m-4" onclick= window.location.href='../../index.html'> 
    <svg id="atras" xmlns="http://www.w3.org/2000/svg" width="150" height="70" fill="currentColor" class="bi bi-skip-backward-btn-fill" viewBox="0 0 16 16">
        <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.21-6.907L8.5 7.028V5.5a.5.5 0 0 0-.79-.407L5 7.028V5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0V8.972l2.71 1.935a.5.5 0 0 0 .79-.407V8.972l2.71 1.935A.5.5 0 0 0 12 10.5v-5a.5.5 0 0 0-.79-.407z"/>
    </svg>
</button>

<!--tabla-->
<?php
    include ('../../conexion/conexionbasedatos.php');
    
    $query_Select = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexion, $query_Select);
    //obtiene objeto fields 
    $encabezados = mysqli_fetch_fields($resultado);
    //obtiene array metodo obj mysqli_query
    //$resultados = mysqli_fetch_array($resultado);


    echo "<table class='table table-striped'>";
        //cencabezados
        echo "<tr>";
            foreach($encabezados as $encabezado){
                echo "<th>" .$encabezado->name. "</th>"; // propiedad name obj fields
            }
            echo"<th> EDITAR </th>";
        echo "</tr>";
        //recorre mientras halla filas
        while($filaActual  = mysqli_fetch_array($resultado)){
            echo "<tr>";
                //por cada fila recorrida se introduce en sus respectivas col
                for ($columnaActual = 0;$columnaActual < count($encabezados);$columnaActual++){    
                    echo "<td>".$filaActual[$columnaActual]."</td>";
                }
                echo "<td> <button type='button' 
                    class='btn btn-outline-success'
                    onclick=window.location.href='editar_cliente.php?idcliente=$filaActual[0]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down-square-fill' viewBox='0 0 16 16'>
                        <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z'/>
                    </svg>
                    editar
                </button></td>";
            echo "</tr>";   
        }
    echo "</table>"; 
?>

</body>
</html>
<?php ?>