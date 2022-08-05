
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();

document.getElementById('inFechAcuerdo').value = month + "/" + day + "/" + year;
document.getElementById('btn_muestra_oblig').addEventListener('click', window_loc, false); 
function window_loc(){

        
        var idCliente = document.getElementById('inidCliente').value;
        
        if ((idCliente != "") && idCliente != 0){
            url='../views/muestra_oblig.php?idCliente=' + idCliente.toString();
            window.location=url;
        }else{
            location.reload();
        }

        //var popup = window.open(url, 'vent_obligs', 'width=0, height=400, top=5, menubar=yes, resizable=no, scrollbars=no');
            
    };

document.getElementById('retroceso').addEventListener('click', retroceder, false);
    function retroceder(){
        window.location.href='../../../index.html'
    };
