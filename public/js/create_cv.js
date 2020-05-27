$(document).ready(function(){

    // prevent enter from submitting form
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
   
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
                $( "#profession-label" ).load(window.location.href + " #profession-label" );
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
                $( "#location-label" ).load(window.location.href + " #location-label" );
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
                $( "#email-label" ).load(window.location.href + " #email-label" );
            }
        });

    });
    // end of click event listener for updating Email

       // start of click event listener for updating phone number
       $('#phone-btn').click(function(e){

        const route = $('#phone').data('route');
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            url: route,
            type:  'POST',
            data: {phone: $('#phone-input').val() },
            success: function(result) {
               
              
                $('#phone-alert').html(result.success).fadeIn(1000).fadeOut(2000);
                $( "#phone-label" ).load(window.location.href + " #phone-label" );
            }
        });

    });
    // end of click event listener for updating phone number


       // start of click event listener for updating skills
       $('#skills').on('submit',function(e){

        const route = $('#skills').data('route');
        frm_serialized = $(this).serialize();
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            url: route,
            type:  'POST',
            data: frm_serialized,
            success: function(result) {
               
                $('#skills-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#skills")[0].reset();
                $( "#skill-list" ).load(window.location.href + " #skill-list" );
            }
        });

    });
    // end of click event listener for updating skills
    

});