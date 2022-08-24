<?php include('../../../conexion/con_database.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.js"></script>
    <title>Cuotas</title>
</head>

<section class="bg-light row justify-content-center">
    <?php
    
    //$querySelect = "SELECT * FROM clientes_deuda WHERE idcliente = '".$_GET['idCliente']."'";
    //$querySelect = mysqli_query($conexion, $querySelect);

    //if(mysqli_num_rows($querySelect) >= 1){
        
        //$arrObligs = mysqli_fetch_row($querySelect);
        //print_r($arrObligs);
        echo "<div class='p-2 w-50'>
                <div class='border border-success rounded' id='container'>
                    <div class='p-3'>
                    <div class='container row'> 
                    <table class='my-4'>
                        <tr>
                            <td>    
                                <label> <b> Suma de acuerdos en el mes de ".date("mmmm").": </b><label>
                            </td>
                            
                            <td>" 
                                . 'suma acuerdos '."
                            </td>     
                        </tr>    
                    </table>
                    </div>
                    </div>
                </div>" ;
        echo "<table class='table table-striped mt-5 text-center'>";
            echo "<th> Acción </th>";
            echo "<th> Valor acordado </th>";
            echo "<th> Cuota </th>";
            echo "<th> Valor cuota </th>";

            for($i=1; $i<= 6; $i++){
                echo "<tr>";
                echo "<td class='justify-content-center w-1'>
                        <button type='button' class='btn btn-outline-secondary' onclick= window.location.href='../actions/frm_acuerdos.php?inCuotas=".$i."'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check2-square' viewBox='0 0 16 16'>
                                <path d='M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z'/>
                                <path d='m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z'/>
                            </svg>
                            Tomar alternativa
                        </button>
                    </td>";
                    echo "<td>". $_GET['inValorAcuerdo'] ."</td>";
                    echo "<td>". $i ."</td>";
                    echo "<td>". intval(intval($_GET['inValorAcuerdo']) / $i) ."</td>";
                echo "</tr>";
            };
            echo "</table>";
            echo "</div>";
        
        ?>
            </div>
        </div>
    </div>
</section>
</html>