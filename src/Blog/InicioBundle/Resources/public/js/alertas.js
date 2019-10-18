
function success(mensaje) {
    if (mensaje){
        return  alert('post ingresado');
    }else{
       return  alert('campo invalido verifique los campos');
    }
}

 $("#mensaje").click(function () {
    var className = $("p").attr("class");
    if( className == "hola") {
        $("p").addClass("azul");
    }else if(className == "hola azul")
        $("p").removeClass("azul");
});

$("#postForm").hide();

$("#visible").on("click", function () {
    $("#postForm").show("slow")
});



function propalert(funcion){
    var titulo = $("#post_titulo").attr("class");
    funcion(titulo);
}



/*$("#propalert").click(function () {
       propalert();
});
*/

propalert(function (titulo) {
    if( titulo == $("#post_titulo").attr("class") ){
        $("#post_contenido").css("background-color","blue");
    }
});

$(function () {
    function log(mensaje) {
        $("#post_contenido").text(mensaje).prependTo("#post_tema");
        $("#post_contenido").scrollTop(0);
    }

    $("#post_titulo").autocomplete({
        source: ["titulo", "otra opcion","torneo"],
        minLength: 2,
        select: function (event, ui) {
            log("selected" + ui.item.value() + ui.item.id);
        }
    })
});
