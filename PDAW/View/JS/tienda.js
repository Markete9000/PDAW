$(document).ready(function(){

    var productos;
    var caja_imagen;
    var codigo;
    productos = document.getElementById('productos').children;
    for (let i = 0; i < productos.length; i++) {
        caja_imagen = productos[i];
        codigo = caja_imagen.firstElementChild.value;
        caja_imagen.addEventListener('click', reenvio);
    }

    function reenvio(){
        codigo = this.lastElementChild.firstElementChild.firstElementChild.value;
        location.href = '../Controller/ficha-producto.php?codigo='+codigo;        
    }

    $('.menu li:has(ul)').click(function(e){
        e.preventDefault();
        if ($(this).hasClass('activado')) {
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }else{
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        }
    });
    
});