$(function() {
    $(".galery-hidden").hide();
    
    $('.img-galery').on('click', function() {
        $('.ZoomImageSource').attr('src', $(this).attr('src'));
        $('#ZoomImage').modal('show');
    });

    $("#galery-more_images").click( () => {
        $(".galery-hidden").show();
        $(".row-more_images").hide();
    });
});