$(document).ready(function () {
  console.log("yjgsjdsjgdsd");
  copiarTexto(".telefono", "¡Teléfono copiado!");
  copiarTexto(".e-mail", "¡E-mail copiado!");
  copiarTexto(".e-mail2", "¡E-mail copiado!");
});

function copiarTexto(selector, Informacion) {
  $(selector).click(function () {
    var texto = $(this).text(); // Obtener el texto 
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
