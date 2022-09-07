$('#inValorAcuerdo').mask("000.000.000.000.000", {reverse: true});
$('input').attr("required", "true");
window.addEventListener('load',cargDatFrm(),false);

/*--------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------*/

//añade function a evento para mostrar obligaciones para la cedula ingresada de el cliente 'x'
document.getElementById('btn_oblig').addEventListener('click', verObl, false); 
    function verObl(){   
        sessionStorage.clear();
        var idCliente = document.getElementById('inidCliente').value;

        if (! idCliente == ''){
            var url='../views/muestra_oblig.php?idCliente=' + idCliente.toString();
            window.location=url;
        };   
    };


//valida el valor ingresado a pagar sea correcto
document.getElementById('inValorAcuerdo').addEventListener('change', ValidaPago, false);
    function ValidaPago(){
        // /[.]/g = caracteres a la izq y der toda la cadena, busca el '.' y reemplaza
        var ValCap = parseInt((document.getElementById('inValCapital').value).replace(/[.]/g,''));
        var ValPagoMax = parseInt((document.getElementById('inValTotal').value).replace(/[.]/g,''));
        
        if(ValCap != 0 && ValPagoMax != 0){
            var ValPagar = parseInt((document.getElementById('inValorAcuerdo').value).replace(/[.]/g,''));
            var ValPagoMin = ValCap * 0.5;

            //console.log(ValCap, ValPagoMax, ValPagar, ValPagoMin);
            if ((ValPagar < ValPagoMin) || (ValPagar > ValPagoMax)){
                swal({  icon: 'error',
                    title: '¡El valor a pagar no cumple con las políticas!',
                    text: 'Se introdujo el valor de ' + formatoCop(ValPagar) + ', recuerde que: \n' +
                    'Valor mínimo = ' + formatoCop(ValPagoMin) + '\n' +
                    'Valor máximo = ' + formatoCop(ValPagoMax) + '\n',
                    buttons: 'Aceptar',
                    dangerMode: true,
                });
            };   
        };
    };

//Envia valor de fecha actual a input fecha de hoy
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();

$(document).ready( function(){
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    $('#inFechAcuerdo').val(today);       

    document.getElementById('inFechPago').min = today;
});

//añade function a botón para elegir cuotas
document.getElementById('btn_cuotas').addEventListener('click', verCuota, false);
    function verCuota(){
        var ValPagar = parseInt((document.getElementById('inValorAcuerdo').value).replace(/[.]/g,''));
        var url = '../views/muestra_cuotas.php?inValorAcuerdo=' + ValPagar;

        if(ValPagar > 0){
            savDatFrm();
            window.open(url,'','width=1132,height=639,left=-1485,resizable=0');
        }else{
            swal({
                title: "Error en valor",
                text: "El valor acordado es incorrecto, no se puede mostrar alternativas para este",
                icon: "error",
                dangerMode: true,
            });
        };
    };

//añade function a evento de boton retroceso para enviar a el index
document.getElementById('retroceso').addEventListener('click', retroceder, false);
    function retroceder(){
        window.location.href='../../../index.html';
    };

//añade function a evento de boton limpiar
document.getElementById('limpiar').addEventListener('click', limpiar, false);
    function limpiar(){
        limpiafrm();
    };

//pregunta antes de enviar el formulario
document.getElementById('frm_acuedos').addEventListener('submit', confirma, false);
    function confirma (evesub){
        var ValPagar = parseInt((document.getElementById('inValorAcuerdo').value).replace(/[.]/g,''));
        var formulario = document.getElementById("frm_acuedos");

        evesub.preventDefault(); //cancela acción por defecto de el evento submit
        if(ValPagar != 0){
            swal({
                title: "¿confirma guardar el acuedo?",
                text: "Se generara el acuerdo de pago por un valor de " + formatoCop(ValPagar),
                icon: "warning",
                buttons: true,
            })
            .then((guardar) => {
                if (guardar) {
                    formulario.submit();
                    limpiafrm();
                    return true;
                } else {
                    window.alert('!No se guardo el acuerdo¡'); 
                    return false;
                };
            });
        };
    };

/*--------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------*/
