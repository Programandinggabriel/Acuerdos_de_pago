//pregunta antes de enviar el formulario
document.getElementById('frm_acuedos').addEventListener('submit', confirma, false);
    function confirma (event){
        let ValPagar = parseInt(document.getElementById('inValorAcuerdo').value);
        
        event.preventDefault();
        if(ValPagar != 0){
            swal({
                title: "¿confirma guardar el acuedo?",
                text: "Se generara el acuerdo de pago por un valor de " + ValPagar,
                icon: "warning",
                buttons: true,
            })
            .then((guardar) => {
                if (guardar) {
                    return true ;
                } else {
                    return false; 
                };
            });
        };
    };

//valida el valor ingresado sea correcto
document.getElementById('inValorAcuerdo').addEventListener('change', ValidaPago, false);
    function ValidaPago(){
        let ValCap = parseInt(document.getElementById('inValCapital').value);
        let ValPagoMax = parseInt(document.getElementById('inValTotal').value); //pago maximo = valor total de deuda
        
        if(ValCap != 0 && ValPagoMax != 0){
            let ValPagar = parseInt(document.getElementById('inValorAcuerdo').value);
            let ValPagoMin = ValCap * 0.5;

            if ((ValPagar < ValPagoMin) || (ValPagar > ValPagoMax)){
                swal({  icon: 'error',
                    title: 'El valor a pagar no cumple con las políticas',
                    text: 'Se introdujo el valor de ($' + ValPagar + '), recuerde que el valor mínimo deberia ser ' + 
                    'de ' + ValPagoMin.toString() + ' y el valor máximo de ' + ValPagoMax.toString(),
                    buttons: 'Aceptar',
                    dangerMode: true,
                });
            }   
        }
    }

//Envia valor de fecha actual a input fecha de hoy
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();

$(document).ready( function() {
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    $('#datePicker').val(today);
    });

document.getElementById('inCuotas').addEventListener('change', tipo, false);
function tipo(){
    var cuota = document.getElementById('inCuotas').value;
    var tipo = document.getElementById('inTipoAcuerdo');
    
    if(cuota == 1){
        tipo.value = "CONTADO";
    }else if(cuota > 1){
        tipo.value = "CUOTAS";
    };
};

//añade function a evento para mostrar obligaciones para la cedula ingresada de el cliente 'x'
document.getElementById('btn_muestra_oblig').addEventListener('click', window_loc, false); 
function window_loc(){
        
        var idCliente = document.getElementById('inidCliente').value;
        
        if (idCliente == ''){
            //mostrar tabla con todas las obligaciones
        }else{
            url='../views/muestra_oblig.php?idCliente=' + idCliente.toString();
            window.location=url;
            window.history.pushState({}, document.title, `/project_acuerdos_de_pago/forms/acuerdo_pago/views/muestra_oblig.php`);
        };   
    };

//añade function a evento de boton retroceso para enviar a el index
document.getElementById('retroceso').addEventListener('click', retroceder, false);
    function retroceder(){
        window.location.href='../../../index.html'
    };

