window.addEventListener('load', inicio);

function inicio(){
    var caja_imagen;
    var codigo;
    productos = document.getElementById('productos').children;
    for (let i = 0; i < productos.length; i++) {
        caja_imagen = productos[i];
        caja_imagen.addEventListener('click', reenvio);
    }

    function reenvio(){
        codigo = this.lastElementChild.firstElementChild.firstElementChild.value;
        location.href = '../Controller/ficha-producto.php?codigo='+codigo;        
    }


    $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
    });

}