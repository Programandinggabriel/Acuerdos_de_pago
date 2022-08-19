document.getElementById('retroceso').addEventListener('click', retroceder, false);
function retroceder(){window.location.href='../../../index.html'};

document.getElementById('eliminar').addEventListener('click', cambiaValor, false);
function cambiaValor(){document.getElementsByName("accion")[0].value = "eliminar"};