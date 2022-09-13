//funcion a evento click de boton 'addfil'
$("#addfil").click(()=>{
        var ulFila = $('#tbCuotas tr:last');
        var CuotaAdd = parseInt(ulFila.find('td:eq(2)').text()) + 1;
        var ValAc = parseInt((ulFila.find('td:eq(1)').text()).replace(/[$.]/g,''));
        var fila = 
        "<tr>"+
            "<td class='justify-content-center w-1'>" +
            "<button type='button' class='btn btn-outline-secondary' onclick='tomaAlt(this)' id='"+(CuotaAdd)+"'>" +
                "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check2-square' viewBox='0 0 16 16'>" + 
                    "<path d='M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z'></path>" + 
                    "<path d='m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z'></path>" +
                "</svg>" + 
                "Tomar alternativa" + 
            "</button>" + 
            "</td>" +
            "<td> "+ formatoCop(ValAc) +"</td>" + 
            "<td>"+ CuotaAdd +"</td>"+
            "<td> " + formatoCop(parseInt(ValAc / CuotaAdd))+ "</td>" +
        "</tr>";
        
        $('#tbCuotas>tbody').append(fila);        
    });

//function a evento click boton retroceso (envia index)
document.getElementById('retroceso').addEventListener('click', retroceder, false);
    function retroceder(){
        window.history.back();
    };


/*--------------------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------*/
//formatea num a pesos
function formatoCop(valor){
    const formatter = new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0
    });
    return formatter.format(valor);  
};
//funcion al evento click boton tomar alt
function tomaAlt(btnAlt){
    var cuota = parseInt(btnAlt.id);
    var winPadre = window.opener;

    winPadre.document.getElementById('inCuotas').value = cuota;    
    var tipo = winPadre.document.getElementById('inTipoAcuerdo');

    if(cuota == 1){
        tipo.value = "ACUERDO A CONTADO";
    }else if(cuota > 1){
        tipo.value = "ACUERDO A CUOTAS";
    };
};