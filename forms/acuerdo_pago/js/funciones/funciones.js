function savDatFrm(){
    sessionStorage.setItem('inidCliente',$('#inidCliente').val());
    sessionStorage.setItem('inNobligAcuerdo',$('#inNobligAcuerdo').val());
    sessionStorage.setItem('inValCapital',$('#inValCapital').val());
    sessionStorage.setItem('inValTotal',$('#inValTotal').val());
    sessionStorage.setItem('inValorAcuerdo',$('#inValorAcuerdo').val());
    sessionStorage.setItem('inFechPago',$('#inFechPago').val());
    sessionStorage.setItem('inCuotas',$('#inCuotas').val());
    sessionStorage.setItem('inTipoAcuerdo',$('#inTipoAcuerdo').val());
    sessionStorage.setItem('inComments',$('#inComments').val());
};

function cargDatFrm(){
    $('#inidCliente').val(sessionStorage.getItem('inidCliente'));
    $('#inNobligAcuerdo').val(sessionStorage.getItem('inNobligAcuerdo'));
    $('#inValCapital').val(sessionStorage.getItem('inValCapital'));
    $('#inValTotal').val(sessionStorage.getItem('inValTotal'));
    $('#inValorAcuerdo').val(sessionStorage.getItem('inValorAcuerdo'));
    $('#inFechPago').val(sessionStorage.getItem('inFechPago'));
    $('#inCuotas').val(sessionStorage.getItem('inCuotas'));
    $('#inTipoAcuerdo').val(sessionStorage.getItem('inTipoAcuerdo'));
    $('#inComments').val(sessionStorage.getItem('inComments'));
};

//limpiar formulario
function limpiafrm(){
    $("input[id!=inFechAcuerdo]").val("");
    $("textarea").val("");
    sessionStorage.clear();
}

//formatea numeros a pesos
function formatoCop(valor){
    const formatter = new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0
    });
    return formatter.format(valor);  
};