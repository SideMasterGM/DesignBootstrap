//Carousel
$('.carousel').carousel({
          interval: 4000,
          keyboard:true,
          pause:"hover"
        })
//Lightbox
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
              event.preventDefault();
              $(this).ekkoLightbox();
          });
