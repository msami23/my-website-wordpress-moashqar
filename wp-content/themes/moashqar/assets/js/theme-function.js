jQuery(document).ready(function($){

    //contact us form
    $('#contact-us-form').on('submit', function(e)  {
        e.preventDefault();
        
        var form = $(this);
        var formData  = form.serialize();

        // $('.loading').show();
        
        $.ajax({
            url: woolearn_data.woolearn_ajax_url,
            type: 'POST',
            data:{
                action:'woolearn_contact_send_email',
                form_data : formData, 
            },
            beforeSend: function(){
                $('.loading').show();
                $('.error-message').hide();
                $('.sent-message').hide();
            },
            success: function(response){
                $('.loading').hide();


                if (response.success === true) {
                    $('.sent-message').html(response.data);
                    $('.sent-message').show();
                }else{
                    $('.error-message').html(response.data);
                    $('.error-message').show();
                }

            },
            // error: function(xhr, status, error){
            //     $('.loading') .hide();
            //     $('.error-message') .html('Error!');
            //     $('.error-message') .show();

            // }

            
        });
        

    });

});

