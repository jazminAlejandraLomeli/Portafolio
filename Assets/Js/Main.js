$(document).ready(function () {
  ClicbuttonLess();
  ClicbuttonHome();
  console.log("yjgsjdsjgdsd");
  copiarTexto(".telefono", "¡Teléfono copiado!");
  copiarTexto(".e-mail", "¡E-mail copiado!");
  copiarTexto(".e-mail2", "¡E-mail copiado!");
});
/* Funcion para dar clic y copiar la informacion */
function copiarTexto(selector, Informacion) {
  $(selector).click(function () {
    var texto = $(this).text();
    var $tempInput = $("<input>"); // Crear un elemento de entrada temporal
    $("body").append($tempInput);
    $tempInput.val(texto).select();
    document.execCommand("copy");
    $tempInput.remove();

    // Mostrar el mensaje cerca del cursor
    var mensaje = $("<div>")
      .text(Informacion)
      .css({
        position: "fixed",
        top: event.clientY + 10,
        left: event.clientX + 10,
        color: "gray",
        fontWeight: "italic",
        zIndex: 9999,
      });
    $("body").append(mensaje);

    // Desaparecer el mensaje después de un tiempo
    setTimeout(function () {
      mensaje.remove();
    }, 2000);
  });
}
/* Funcion para ocultar la barra de navegacion del del lado derecho, mostrar el boton flotante de HOME y agrandar el contenedor principal */
function ClicbuttonLess() {
  // $(".Button-Less").click("off");
  $(".Button-Less").on("click", function () {
    /* Ocultar el menu del lado derecho, va crecer el contenedor del centro y aparecera el boton de home */ // ButtonHome;
    $(".card-style-nav").addClass("Oculta");
    /* Agrandar contenedor*/
  
    $(".card-styles").removeClass("col-md-7").addClass("col-md-8");
    $(".card-styles").removeClass("col-xl-8").addClass("col-xl-9");
  

    /*Mostrar boton Home*/
    $(".ButtonHome").fadeIn(1200).removeClass("d-none");
  });
}


/* Funcion para Mostrar el Menu de navegacion del lado derecho, ocultar boton flotante de HOME y encoger el contenedor principal */
function ClicbuttonHome() {
  $(".btn-Home").on("click", function () {
    $(".card-style-nav").removeClass("Oculta").addClass("fadeInAnimation"); // Agregar la clase para fadeIn
    /* Encogemos el  contenedor*/
    $(".card-styles").removeClass("col-md-8").addClass("col-md-7");
    $(".card-styles").removeClass("col-xl-9").addClass("col-xl-8");
    /*Ocultamos boton Home*/
    $(".ButtonHome").fadeOut(900).addClass("d-none");

    setTimeout(function () {
      $(".card-style-nav").removeClass("fadeInAnimation");
    }, 1100);
  });
}
