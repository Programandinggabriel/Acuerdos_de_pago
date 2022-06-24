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
    
</body>
</html>
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
                echo "<td> <a href=editar_cliente.php?idcliente=" .$filaActual[0] .">editar</a></td>";
            echo "</tr>";   
        }
    echo "</table>"; 
?>