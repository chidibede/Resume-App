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
        $('#profession-alert').html('loading...');
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
        $('#location-alert').html('loading...');
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
        $('#email-alert').html('loading...');
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
        $('#phone-alert').html('loading...');
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
        $('#skills-alert').html('loading...');
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
        const route = $('#skills-'+ id).data('route');
        frm_serialized = $('#skills-'+id).serialize();
        $('#skills-edit-alert').html('loading...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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
        $('#languages-alert').html('loading...');

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
        const route = $('#languages-'+ id).data('route');
        frm_serialized = $('#languages-'+id).serialize();
        $('#languages-edit-alert').html('loading...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


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



    // start of click event listener for adding current job
    $('#current_job').on('submit', function(e){

        const route = $('#current_job').data('route');
        frm_serialized = $(this).serialize();
        $('#current-job-alert').html('loading...');
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
               
                $('#current-job-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#current-job-list").load(" #current-job-list > *");
                $(".current-job-refresh").load(" .current-job-refresh > *")
                
            }
        });

    });
    // end of click event listener for adding current job


    
    // start of event listener for updating Current Job
    $("body").on('click', '.updateCurrentJob', function(e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        const route = $('#current_job-'+ id).data('route');
        frm_serialized = $('#current_job-'+id).serialize();
        $('#current-job-edit-alert').html('loading...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: route,
            type:  'POST',
            dataType: 'json',
            data: frm_serialized,
            success: function(result) {
            
                $('#current-job-edit-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#current-job-list").load(" #current-job-list > *");

               
            }
        });

    });
    // end of event listener for updating Current Job


     // start of click event listener for adding former job
     $('#former_employment').on('submit', function(e){

        const route = $('#former_employment').data('route');
        frm_serialized = $(this).serialize();
        $('#former-job-alert').html('loading...');
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
               
                $('#former-job-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#former_employment")[0].reset();
                $("#former-job-list").load(" #former-job-list > *");
                
            }
        });

    });
    // end of click event listener for adding former job


    
    // start of event listener for updating Former Job
    $("body").on('click', '.updateFormerJobs', function(e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        const route = $('#former_job-'+ id).data('route');
        frm_serialized = $('#former_job-'+id).serialize();
        $('#former-job-edit-alert').html('loading...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: route,
            type:  'POST',
            dataType: 'json',
            data: frm_serialized,
            success: function(result) {
            
                $('#former-job-edit-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#former-job-list").load(" #former-job-list > *");

               
            }
        });

    });
    // end of event listener for updating Current Job
    
    
    // start of click event listener for adding Education
    $('#education').on('submit', function(e){

        const route = $('#education').data('route');
        frm_serialized = $(this).serialize();
        $('#education-alert').html('loading...');
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
               
                $('#education-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#education")[0].reset();
                $("#education-list").load(" #education-list > *");
                
            }
        });

    });
    // end of click event listener for adding Education


    
    // start of event listener for updating Education
    $("body").on('click', '.updateEducation', function(e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        const route = $('#education-'+ id).data('route');
        frm_serialized = $('#education-'+id).serialize();
        $('#education-edit-alert').html('loading...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: route,
            type:  'POST',
            dataType: 'json',
            data: frm_serialized,
            success: function(result) {
            
                $('#education-edit-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#education-list").load(" #education-list > *");

               
            }
        });

    });
    // end of event listener for updating Education

    // start of click event listener for adding former job
    $('#volunteer').on('submit', function(e){

        const route = $('#volunteer').data('route');
        frm_serialized = $(this).serialize();
        $('#volunteer-alert').html('loading...');
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
               
                $('#volunteer-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#volunteer")[0].reset();
                $("#volunteer-list").load(" #volunteer-list > *");
                
            }
        });

    });
    // end of click event listener for adding volunteer


    
    // start of event listener for updating volunteer
    $("body").on('click', '.updateVolunteer', function(e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        const route = $('#volunteer-'+ id).data('route');
        frm_serialized = $('#volunteer-'+id).serialize();
        $('#volunteer-edit-alert').html('loading...');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({
            url: route,
            type:  'POST',
            dataType: 'json',
            data: frm_serialized,
            success: function(result) {
            
                $('#volunteer-edit-alert').html(result.success).fadeIn(800).fadeOut(2000);
                $("#volunteer-list").load(" #volunteer-list > *");

               
            }
        });

    });
    // end of event listener for updating Volunteer Job

    // start of click event listener for adding former job
$('#projects').on('submit', function(e){

    const route = $('#projects').data('route');
    frm_serialized = $(this).serialize();
    $('#project-alert').html('loading...');
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
           
            $('#project-alert').html(result.success).fadeIn(800).fadeOut(2000);
            $("#projects")[0].reset();
            $("#project-list").load(" #project-list > *");
            
        }
    });

});
// end of click event listener for adding project



// start of event listener for updating project
$("body").on('click', '.updateProject', function(e) {
    e.preventDefault();
    var id = $(this).attr("data-id");
    const route = $('#project-'+ id).data('route');
    frm_serialized = $('#project-'+id).serialize();
    $('#project-edit-alert').html('loading...');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
        url: route,
        type:  'POST',
        dataType: 'json',
        data: frm_serialized,
        success: function(result) {
        
            $('#project-edit-alert').html(result.success).fadeIn(800).fadeOut(2000);
            $("#project-list").load(" #project-list > *");

           
        }
    });

});
// end of event listener for updating project 


});