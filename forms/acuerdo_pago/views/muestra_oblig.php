<?php include('../../../conexion/con_database.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--responsive-->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.js"></script>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title> Obligaciones de <?php echo $_GET['idCliente']?></title>
</head>

<section class="bg-light row justify-content-center">
    <?php
    //tabla
    $querySelect = "SELECT * FROM clientes_deuda WHERE idcliente = '".$_GET['idCliente']."'";
    $querySelect = mysqli_query($conexion, $querySelect);

    if(mysqli_num_rows($querySelect) >= 1){
        
        $arrObligs = mysqli_fetch_row($querySelect);
        //print_r($arrObligs);
        echo "<div class='p-2 w-50'>
                <div class='border border-success rounded' id='container'>
                    <div class='p-3'>
                    <div class='container row'> 
                    <table class='my-4'>
                        <tr>
                            <td>    
                                <label> <b> Numero identificación: </b><label>
                            </td>
                            
                            <td>" 
                                .$arrObligs[1]  . "
                            </td>     
                        </tr>    
                        <tr>    
                            <td>
                                <label> <b> Nombre: </b></label>
                            </td>
                            <td>
                                ". $arrObligs[2] ."
                            </td>
                        </tr>
                        <tr>    
                            <td>
                                <label><b> Edad:</b></label>
                            </td>
                            <td>
                                ". $arrObligs[3] ."
                            </td>
                        </tr>   
                        <tr>   
                            <td>
                                <label><b> Ciudad:</b></label>
                            </td>
                            <td>
                                ". $arrObligs[4] ."
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><b> Numero celular:</b></label>
                            </td>
                            <td>
                                ". $arrObligs[5] ."
                            </td>
                        </tr>  
                        <tr>   
                            <td>
                                <label><b> Correo:</b></label>
                            </td>
                            <td>    
                                ". $arrObligs[6] ."
                            </td>
                        </tr>
                    </table>
                    </div>
                    </div>
                </div>" ;
        echo "<table class='table table-striped mt-5 text-center'>";
            echo "<th> Acción </th>";
            echo "<th> Numero obligación </th>";
            echo "<th> Numero documento </th>";
            echo "<th> Saldo capital </th>";
            while($arrObligs =  mysqli_fetch_array($querySelect)){
                echo "<tr>";

                echo "<td class='justify-content-center w-1'>
                        <button type='button' class='btn btn-outline-primary' 
                            onclick=window.location.href='../actions/frm_acuerdos.php?inidCliente=".$arrObligs[1].
                            "&inNobligAcuerdo=".$arrObligs[0]."&inValorAcuerdo=".$arrObligs[7]."'>

                        <svg xmlns='http://www.w3.org/2000/svg' width='100' height='16' fill='currentColor' class='bi bi-cash-coin' viewBox='0 0 16 16'>
                            <path fill-rule='evenodd' d='M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z'/>
                            <path d='M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z'/>
                            <path d='M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z'/>
                            <path d='M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z'/>
                        </svg>
                            Gestionar
                        </button>
                    </td>";
                echo "<td>" . $arrObligs[0] . "</td>";
                echo "<td>" . $arrObligs[1] . "</td>";
                echo "<td>" . $arrObligs[7] . "</td>";
                echo "</tr>";

    };
            echo "</table>";
            echo "</div>";
            }else{
                echo "<script>
                        //alerta
                        swal({  icon: 'error',
                                title: 'Sin resultados',
                                text: 'no se encontraron obligaciones',
                                button: 'Regresar',
                          })
                          .then((btn_val) => {
                            window.history.back();
                          })
                          ;
                      </script>"
                ;
            }
            ?>
            </div>
        </div>
    </div>
    <script src='../js/muestra_oblig.js'></script>
</section>
</html>