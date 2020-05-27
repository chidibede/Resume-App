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
            }
        });

    });
    // end of click event listener for updating phone number


       // start of click event listener for updating location
       $('#skills-btn').click(function(e){

        const route = $('#skills').data('route');
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

            url: route,
            type:  'POST',
            data: {skill_name: $('#skill_name').val(), level: $('#level').val() },
            success: function(result) {
               
              
                $("#skills")[0].reset();
                $('#skills-alert').html(result.success).fadeIn(1000).fadeOut(2000);
            }
        });

    });
    // end of click event listener for updating skills

    // var id = JSON.parse("{{ json_encode($skills->id) }}");
    // console.log(id)

    // // start of click event listener for updating location
    // $('#skills-1').click(function(e){

    //     e.preventDefault();

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({

    //         url: "{{url('/create_skills/{id}')}}",
    //         type:  'POST',
    //         data: {skill_name: $('#skill_name').val(), level: $('#level').val() },
    //         success: function(result) {
               
              
    //             $("#skills")[0].reset();
    //             $('#skills-alert').html(result.success).fadeIn(1000).fadeOut(2000);
    //         }
    //     });

    // });
    // end of click event listener for updating skills

});