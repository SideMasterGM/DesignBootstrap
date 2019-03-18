//Carousel
$('.carousel').carousel({
          interval: 6000,
          keyboard:true,
          pause:"hover"
        })
//Lightbox
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
              event.preventDefault();
              $(this).ekkoLightbox();
          });
//ScrollSpy
$('service-height').scrollspy({ target: '#list-example' })
//Animación Para Botón Subir
$("#IrArriba").click(function () {
   $("html, body").animate({scrollTop: 0}, 1000);
});