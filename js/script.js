$(function() {
    $(".galery-hidden").hide();
    
    $('.img-galery').on('click', function() {
        $('.ZoomImageSource').attr('src', $(this).attr('src'));
        $('#ZoomImage').modal('show');
    });

    $("#galery-more_images").click( () => {
        let moreGalery = $("#galery-more_images").val();

        if (moreGalery == "More images..."){
            $(".galery-hidden").show();
            $("#galery-more_images").val("Less images...");
        } else {
            $(".galery-hidden").hide();
            $("#galery-more_images").val("More images...");
        }
    });
});