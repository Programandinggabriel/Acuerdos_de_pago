$('#inValorAcuerdo').mask("000.000.000.000.000", {reverse: true});
$('input').attr("required", "true");
window.addEventListener('load',cargDatFrm(),false);

/*--------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------*/

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

//funcion retroceso
document.getElementById('retroceso').addEventListener('click', retroceder, false);
    function retroceder(){window.location.href='../../../index.html'};

//funcion cambio valor a input hidden (elim, act)
document.getElementById('actualizar').addEventListener('click', setValEdit, false);
    function setValEdit(){document.getElementById("accion").value = "editar"};

document.getElementById('eliminar').addEventListener('click', setValElim, false);
    function setValElim(){document.getElementById("accion").value = "eliminar"};

//preguntas y validacion antes de enviar el form

document.getElementById('frm_acuedos').addEventListener('submit',confirma,false);
function confirma(eveSub){
    eveSub.preventDefault();

    var form = document.getElementById('frm_acuedos');
    var accionUs = document.getElementById('accion').value;
    
    if(accionUs == 'editar'){
        swal({
            title: "¿Actualizar el acuerdo?",
            icon: "warning",
            buttons: true,
        })
        .then((btnAct) => {
            if (btnAct) {
                form.submit();
                return true;
            };
        });
    }else if(accionUs == 'eliminar'){
        swal({
            title: "¿confirma eliminar el acuerdo?",
            icon: "warning",
            dangerMode: true,
            buttons: true,
        })
        .then((btnElim) => {
            if (btnElim) {
                form.submit();
                return true;
            };
        });
    };
};