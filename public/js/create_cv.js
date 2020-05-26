$(document).ready(function(){
   
    // start of click event listener for updating profession
    $('#profession-btn').click(function(e){

        const route = $('#profession').data('route');
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            url: route,
            type:  'POST',
            data: {profession: $('#profession-input').val()},
            success: function(result) {
               
                $('#profession-alert').html(result.success).fadeIn(1000).fadeOut(2000);
            }
        });

    });
    // end of click event listener


    // start of click event listener for updating location
    $('#location-btn').click(function(e){

        const route = $('#location').data('route');
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            url: route,
            type:  'POST',
            data: {location: $('#location-input').val(), nationality: $('#nationality-input').val() },
            success: function(result) {
               
              
                $('#location-alert').html(result.success).fadeIn(1000).fadeOut(2000);
            }
        });

    });
    // end of click event listener for updating location



    // start of click event listener for updating Email
    $('#email-btn').click(function(e){

        const route = $('#email').data('route');
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            url: route,
            type:  'POST',
            data: {email: $('#email-input').val() },
            success: function(result) {
               
              
                $('#email-alert').html(result.success).fadeIn(1000).fadeOut(2000);
            }
        });

    });
    // end of click event listener for updating Email

});