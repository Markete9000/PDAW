window.addEventListener('load', inicio);

var conexion1;
var id;
var datos;
var incidencias, incidencia, cajas;
var boton, botonincidencia;
var c = 0;

function inicio(){
    caja = document.getElementById("incidencias");
    document.getElementById("close").addEventListener('click', cerrar);
    incidencias = caja.children;
    
    for (let i = 0; i < incidencias.length; i++) {
        botonincidencia = incidencias[i].firstElementChild.nextElementSibling.nextElementSibling.nextElementSibling.firstElementChild.firstElementChild;
        botonincidencia.addEventListener("click", cargaIncidencia);
    }
}

function cargaIncidencia(e){
    // location.reload();
    id = e.target.name;
    conexion1=new XMLHttpRequest();
    conexion1.onreadystatechange = procesarEventos;
    conexion1.open('GET','../Controller/cargarIncidencia.php?id='+id, true);
    conexion1.send();
}

function procesarEventos(){
    if(conexion1.readyState == 4){
        datos= JSON.parse(conexion1.responseText);
        document.getElementById("cajasasunto").innerHTML = datos.asunto;
        document.getElementById("cajasincidente").innerHTML = datos.incidente;
        document.getElementById("box").style.display = "block";
    }
}

function cerrar(){
    document.getElementById("box").style.display = "none";
}