window.addEventListener('load',cargDatFrm());


//añade function a evento para mostrar obligaciones para la cedula ingresada de el cliente 'x'
document.getElementById('btn_oblig').addEventListener('click', verObl, false); 
    function verObl(){   
        sessionStorage.clear();
        var idCliente = document.getElementById('inidCliente').value;

        if (! idCliente == ''){
            var url='../views/muestra_oblig.php?idCliente=' + idCliente.toString();
            
            window.location=url;
            //window.history.pushState({}, document.title, `/project_acuerdos_de_pago/forms/acuerdo_pago/views/muestra_oblig.php`);
        };   
    };


//valida el valor ingresado a pagar sea correcto
document.getElementById('inValorAcuerdo').addEventListener('change', ValidaPago, false);
    function ValidaPago(){
        var ValCap = parseInt(document.getElementById('inValCapital').value);
        var ValPagoMax = parseInt(document.getElementById('inValTotal').value);
        
        if(ValCap != 0 && ValPagoMax != 0){
            var ValPagar = parseInt(document.getElementById('inValorAcuerdo').value);
            var ValPagoMin = ValCap * 0.5;

            if ((ValPagar < ValPagoMin) || (ValPagar > ValPagoMax)){
                swal({  icon: 'error',
                    title: 'El valor a pagar no cumple con las políticas',
                    text: 'Se introdujo el valor de ($' + ValPagar + '), recuerde que el valor mínimo deberia ser ' + 
                    'de ' + ValPagoMin.toString() + ' y el valor máximo de ' + ValPagoMax.toString(),
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

//añade function a evento de input cuotas para TIPO
$('#inCuotas').change(
    function tipo(){
        var cuota = document.getElementById('inCuotas').value;
        var tipo = document.getElementById('inTipoAcuerdo');
        
        if(cuota == 1){
            tipo.value = "CONTADO";
        }else if(cuota > 1){
            tipo.value = "CUOTAS";
        };
    });

//añade function a botón para elegir cuotas
document.getElementById('btn_cuotas').addEventListener('click', verCuota, false);
    function verCuota(){
        var ValPagar = parseInt(document.getElementById('inValorAcuerdo').value);
        var url = '../views/muestra_cuotas.php?inValorAcuerdo=' + ValPagar;

        if(ValPagar > 0){
            savDatFrm();
            window.location.href=url;
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
        var ValPagar = parseInt(document.getElementById('inValorAcuerdo').value);
        var formulario = document.getElementById("frm_acuedos");

        evesub.preventDefault(); //cancela acción por defecto de el evento submit
        if(ValPagar != 0){
            swal({
                title: "¿confirma guardar el acuedo?",
                text: "Se generara el acuerdo de pago por un valor de " + ValPagar,
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
function savDatFrm(){
    with(sessionStorage){
        setItem('inidCliente',$('#inidCliente').val());
        setItem('inNobligAcuerdo',$('#inNobligAcuerdo').val());
        setItem('inValCapital',$('#inValCapital').val());
        setItem('inValTotal',$('#inValTotal').val());
        setItem('inValorAcuerdo',$('#inValorAcuerdo').val());
        setItem('inFechPago',$('#inFechPago').val());
        setItem('inCuotas',$('#inCuotas').val());
        setItem('inTipoAcuerdo',$('#inTipoAcuerdo').val());
        setItem('inComments',$('#inComments').val());
    };
};

function cargDatFrm(){
    with(sessionStorage){
        $('#inidCliente').val(getItem('inidCliente'));
        $('#inNobligAcuerdo').val(getItem('inNobligAcuerdo'));
        $('#inValCapital').val(getItem('inValCapital'));
        $('#inValTotal').val(getItem('inValTotal'));
        $('#inValorAcuerdo').val(getItem('inValorAcuerdo'));
        $('#inFechPago').val(getItem('inFechPago'));
        $('#inCuotas').val(getItem('inCuotas'));
        $('#inTipoAcuerdo').val(getItem('inTipoAcuerdo'));
        $('#inComments').val(getItem('inComments'));
    };
};

function limpiafrm(){
    $("input[id!=inFechAcuerdo]").val("");
    $("textarea").val("");
    sessionStorage.clear();
}

//formatea num a pesos
function formatoCop(valor){
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0
    });
    return formatter.format(valor);  
};