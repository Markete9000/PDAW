$(document).ready(function(){
    
    $('.pedidos').click(function(){
        window.location.href = $('a', this).attr("href");
    });

    $('.incidencias').click(function(){
        window.location.href = $('a', this).attr("href");
    });

    $('.cerrar').click(function(){
        window.location.href = $('a', this).attr("href");
    });

    $('#contraseña').dblclick(function(){
        if ($(this).attr('type') == 'password'){
            $(this).attr('type', 'text');
        }else{
            $(this).attr('type', 'password');
        }
    });

});




// addEventListener('load',inicio);

// function inicio(){
//     // var pedidos = document.getElementById('pedidos');
//     // var incidencias = document.getElementById('incidencias');
//     // var cerrar = document.getElementById('cerrar');
//     var contraseña = document.getElementById('contraseña');
//     var check = document.getElementById('checkbox');

//     // pedidos.addEventListener('click',reenvio);
//     // incidencias.addEventListener('click',reenvio);
//     // cerrar.addEventListener('click',reenvio);
//     contraseña.addEventListener('click', cambio)
//     check.addEventListener('change',cambio);

//     function reenvio(){
//         window.location.href = pedidos.firstElementChild.getAttribute('href');
//     }

//     function cambio(){
//         if (contraseña.type == 'password') {
//             contraseña.type = "text";
//         }else{
//             contraseña.type = "password";
//         }
//     }

// }