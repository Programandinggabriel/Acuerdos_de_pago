<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0 "> <!--responsive-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.js"></script>
    <title>Asesores Actuales</title>
</head>
<body class="bg-light">

<button type='button' class="btn btn-outline-success m-4 mx-5" onclick= window.location.href='../../index.html'> 
    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="70" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
    </svg>
</button>

<?php
    include('../../conexion/conexionbasedatos.php');
    $querySelect = "SELECT * FROM asesores";
    $consulta = mysqli_query($conexion, $querySelect);
    
    echo "<table class='table table-striped'>";
        echo"<th>Numero de documento</th>";
        echo"<th>Nombre completo</th>";
        echo"<th>Fecha de nacimiento</th>";
        echo"<th>Edad</th>";
        echo"<th>Correo asesor</th>";
        echo"<th>Direccion de vivienda</th>";
        echo"<th>Estrato</th>";

        echo"<th>Editar</th>";
        while($respuesta = mysqli_fetch_array($consulta)){
            echo "<tr>";
                echo "<td>". $respuesta[0] ."</td>";
                echo "<td>". $respuesta[1] ."</td>";
                echo "<td>". $respuesta[2] ."</td>";
                echo "<td>". $respuesta[3] ."</td>";
                echo "<td>". $respuesta[4] ."</td>";
                echo "<td>". $respuesta[5] ."</td>";
                echo "<td>". $respuesta[6] ."</td>";
                echo "<td><button type='button' class='btn btn-outline-success' 
                    onclick= window.location.href='edita_asesor.php?idasesor=$respuesta[0]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-down-square-fill' viewBox='0 0 16 16'>
                        <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z'/>
                    </svg>
                        Editar
                </button>
                </td>";
            echo "</tr>";
        }
    echo "</table>";
?>
</body>
</html>
<?php ?>