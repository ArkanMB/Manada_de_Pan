$(document).ready(function(){
  $(".opciones-nav2").click(function(e){
    e.preventDefault(); // Evitar el comportamiento predeterminado del enlace

    // Verificar si se hizo clic en el enlace "Sobre nosotros"
    if ($(this).hasClass("opciones-nav2") && $(this).text() === "Sobre nosotros") {
      // Mostrar el contenido de "Sobre nosotros"
      $("#contenido-sobre-nosotros").fadeIn();
    }
  });
});