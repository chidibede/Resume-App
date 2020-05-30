$(document).ready(function(){

    // prevent enter from submitting form
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
   
    // start of click event listener for updating profession
    $('#profession').on('submit', function(e){

        const route = $('#profession').data('route');
        var frm_serialized = $(this).serialize();
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
               
                $('#profession-alert').html(result.success).fadeIn(1000).fadeOut(2000);
                $( "#profession-label" ).load(window.location.href + " #profession-label" );
            }
        });

    });
    // end of click event listener


    // start of click event listener for updating location
    $('#location').on('submit', function(e){

        const route = $('#location').data('route');
        var frm_serialized = $(this).serialize();
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
               
              
                $('#location-alert').html(result.success).fadeIn(1000).fadeOut(2000);
                $( "#location-label" ).load(window.location.href + " #location-label" );
            }
        });

    });
    // end of click event listener for updating location



    // start of click event listener for updating Email
    $('#email').on('submit', function(e){

        const route = $('#email').data('route');
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
               
              
                $('#email-alert').html(result.success).fadeIn(1000).fadeOut(2000);
                $( "#email-label" ).load(window.location.href + " #email-label" );
            }
        });

    });
    // end of click event listener for updating Email

       // start of click event listener for updating phone number
       $('#phone').on('submit',function(e){

        const route = $('#phone').data('route');
        var frm_serialized = $(this).serialize();
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
               
              
                $('#phone-alert').html(result.success).fadeIn(1000).fadeOut(2000);
                $( "#phone-label" ).load(window.location.href + " #phone-label" );
            }
        });

    });
    // end of click event listener for updating phone number


       // start of click event listener for adding skills
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
                $("#skill-list").load(" #skill-list > *")
            }
        });

    });
    // end of click event listener for adding skills
    


    // start of event listener for updating skills
    $("body").on('click', '.updateSkills', function(e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        skill_name_id = '#skill_name'+id;
        level_id = '#level'+id;
        skill_id_id = '#skill_id'+id
        var skill_name = $(skill_name_id).val();
        var skill_id = $(skill_id_id).val();
        var level = $(level_id).val();
        var data = {skill_name: skill_name, level: level, skill_id: skill_id};
        const route = $('#skills-'+ id).data('route');
        frm_serialized = $('#skills-'+id).serialize();


        $.ajax({
            url: route,
            type:  'POST',
            dataType: 'json',
            data: frm_serialized,
            success: function(result) {
            
                $('#skills-edit-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#skill-list").load(" #skill-list > *");
               
            }
        });

    });
    // end of event listener for updating skills



     // start of click event listener for adding languages
     $('#languages').on('submit',function(e){

        const route = $('#languages').data('route');
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
               
                $('#languages-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#languages")[0].reset();
                $("#languages-list").load(" #languages-list > *")
            }
        });

    });
    // end of click event listener for adding languages
    


    // start of event listener for updating languages
    $("body").on('click', '.updateLanguages', function(e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        language_name_id = '#language_name'+id;
        level_id = '#level'+id;
        language_id_id = '#language_id'+id
        var language_name = $(language_name_id).val();
        var language_id = $(language_id_id).val();
        var level = $(level_id).val();
        var data = {language_name: language_name, level: level, language_id: language_id};
        const route = $('#languages-'+ id).data('route');
        frm_serialized = $('#languages-'+id).serialize();


        $.ajax({
            url: route,
            type:  'POST',
            dataType: 'json',
            data: frm_serialized,
            success: function(result) {
            
                $('#languages-edit-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#languages-list").load(" #languages-list > *");
               
            }
        });

    });
    // end of event listener for updating languages
    
});