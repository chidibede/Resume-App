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


       // start of click event listener for updating skills
       $('#skills').on('submit',function(e){

        const route = $('#skills').data('route');
        frm_serialized = $(this).serialize();
        var div=$('#skill-list').html();
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
    // end of click event listener for updating skills
    

    $(".updateSkills").on('click', function(e) {
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
                console.log(data);
            }
        });

    });

    
});