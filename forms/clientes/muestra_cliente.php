<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0"> <!--responsive-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/bootstrap.js"></script>
    <title>Clientes Actuales</title>
</head>
<body>

<div class='p-2'>
    <div class='border border-success rounded'>
        <div class="p-3">
            <button type='button' class="btn btn-outline-success m-2 mb-3 mx-0" onclick= window.location.href='../../index.html'> 
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="70" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg>
            </button>

            <!--tabla-->
            <?php
                include ('../../conexion/conexionbasedatos.php');
                
                $query_select = "SELECT * FROM clientes";
                $consulta = mysqli_query($conexion, $query_select);
                //obtiene objeto fields 
                //$encabezados = mysqli_fetch_fields($resultado);
                //obtiene array metodo obj mysqli_query
                //$resultados = mysqli_fetch_array($resultado);
                echo "<table class='table table-striped'>";
                    //cencabezados
                    echo "<tr>";
                        echo "<th> Número de identificación </th>";
                        echo "<th> Nombre de cliente </th>";
                        echo "<th> Edad </th>";
                        echo "<th> Ciudad </th>";
                        echo "<th> Número de celular </th>";
                        echo "<th> Correo electrónico </th>";            
                        echo "<th> Número de obligación </th>";

                        echo"<th> Editar </th>";
                    echo "</tr>";
                    //recorre mientras halla filas
                    while($resultado  = mysqli_fetch_array($consulta)){
                        echo "<tr>"; 
                            echo "<td>".$resultado[0]."</td>";
                            echo "<td>".$resultado[1]."</td>";
                            echo "<td>".$resultado[2]."</td>";
                            echo "<td>".$resultado[3]."</td>";
                            echo "<td>".$resultado[4]."</td>";
                            echo "<td>".$resultado[5]."</td>";
                            echo "<td>".$resultado[6]."</td>";

                            echo "<td> <button type='button' 
                                class='btn btn-outline-success'
                                onclick=window.location.href='editar_cliente.php?idcliente=$resultado[0]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                    <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 
                                        9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0
                                        1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a
                                        .5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                                </svg>
                                Editar
                            </button></td>";
                        echo "</tr>";   
                    }
                echo "</table>"; 
            ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php ?>