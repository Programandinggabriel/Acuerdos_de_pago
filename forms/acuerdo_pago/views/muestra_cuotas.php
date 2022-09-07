<?php 

include('../../../conexion/con_database.php');
$meses = array("Enero","Febrero", "Marzo", "Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");


?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="../../../js/bootstrap.js" type='text/javascript'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>

    <!--data tables styles-->
    <!--<link href='//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet'></link>
    <script src='//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>-->


    <title>Cuotas</title>
</head>

<section class="row justify-content-center p-5">
    <?php
    $querySum= "SELECT SUM(valor) FROM acuerdos WHERE MONTH(fechaacuerdo) =". intval(date('m')) ;
    $querySum = mysqli_query($conexion, $querySum);
    $querySum = mysqli_fetch_row($querySum);
    
    echo "<div class = 'container row justify-content-center'>";
        echo "<div class='row text-center w-90'>
                <div class='border border-success rounded col-6'>
                    <div class='row p-1'>
                        <div class='col-8'>
                            <label> <b> La suma de sus acuerdos en el mes de ". strtoupper($meses[intval(date("m"))-1])." es de:  </b><label>
                        </div>
                        <div class='col-4'>
                            <strong>" . '$' . number_format($querySum[0],0,'','.') . "</strong>
                        </div>
                    </div>
                </div>
                
            <div class='col-3'>
                <button class='btn btn-outline-warning' id='addfil'>  Mas cuotas 
                    <svg xmlns='http://www.w3.org/2000/svg' width='80' height='40' fill='currentColor' class='bi bi-plus-circle-fill' viewBox='0 0 16 16'>
                        <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z'/>
                    </svg>
                </button>
            </div> 
            
            <div class='col-3'>
                <button class='btn btn-outline-success' id='retroceso'> Atrás
                    <svg xmlns='http://www.w3.org/2000/svg' width='80' height='40' fill='currentColor' class='bi bi-arrow-90deg-left' viewBox='0 0 16 16'>
                        <path d='M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z'/>
                    </svg>
                </button>
            </div> 
            
            ";
        echo "</div>";
    echo"</div>";

    echo"<div class='row justify-content-center pt-3' style='height: 500px; overflow: auto;'>";
        echo "<table class='table table-striped mt-5 text-center' id='tbCuotas'>";
            echo "<th> Acción </th>";
            echo "<th> Valor acordado </th>";
            echo "<th> Cuota </th>";
            echo "<th> Valor cuota </th>";

            for($i=1; $i<= 6; $i++){
                echo "<tr>";
                echo "<td class='justify-content-center w-1'> 
                    <button type='button' class='btn btn-outline-secondary' onclick='tomaAlt(this)' id=".($i).">
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check2-square' viewBox='0 0 16 16'>
                                <path d='M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z'/>
                                <path d='m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z'/>
                            </svg>
                            Tomar alternativa  
                        </button>
                    </td>";
                    echo "<td> $ ". number_format(intval($_GET['inValorAcuerdo']),0,'','.') ."</td>";
                    echo "<td>". $i ."</td>";
                    echo "<td> $ ".  number_format(intval(intval($_GET['inValorAcuerdo']) / $i),0,'','.') ."</td>";
                echo "</tr>";
            };
        echo "</table>";
    echo"</div>";
    ?>
</section>
<script src='../js/muestra_cuotas.js' type='text/javascript'></script>
