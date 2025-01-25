(function( $ ) {
	'use strict';

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




    });

    jQuery(document).ready(function ($) {
      $('#scroll_top_form').on('submit', function (e) {
          e.preventDefault();
  
   
          const formData = $(this).serializeArray();
          const data = {
              action: 'handle_scroll_top',
              scroll_top_nonce: $('#scroll_top_nonce').val(),
          };
  
          formData.forEach((item) => {
              data[item.name] = item.value;
          });
  
          // Use $.post() for AJAX request
          $.post(ajaxScrollTop.ajax_url, data, function (response) {
              if (response.success) {
                  alert(response.data); 
              } else {
                  alert(response.data); 
              }
          }).fail(function () {
              alert('An error occurred while processing the request.');
          });
      });
  });
  
  

})( jQuery );