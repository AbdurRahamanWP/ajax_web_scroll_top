jQuery(document).ready(function () {
 
 // Handle image upload using wp.media library
 jQuery('#button_icon_img').on('click', function () {
   
    var images = wp.media({
        title: 'Upload Image',
        multiple: true
    }).open().on("select", function () {

        // Get the selected image from the media library
        var uploadImage = images.state().get('selection').first();
        var selectedImage = uploadImage.toJSON().url;

        // Display the selected image in an HTML element with id="showImage"
        jQuery('#show_image').html("<img src='" + selectedImage + "'/>");
        jQuery('#button_image').val(selectedImage);
    });
});


jQuery('#scroll_top_form').on('submit', function (e) {
  e.preventDefault();
  // alert('form submit');

  $.post(
    ajaxScrollTop.ajax_url,
    $(this).serialize(),
    function(response){}
    
  );

});



});