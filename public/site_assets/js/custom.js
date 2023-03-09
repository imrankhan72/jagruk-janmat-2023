 $(document).ready(function() {

     $("#poll_answer").hide();
     $("#answer1_count_container").hide();
     $("#answer2_count_container").hide();
     $("#answer3_count_container").hide();


     $( "#answer_poll" ).click(function(e) {

         e.preventDefault();
         alert( "Thanks for your vote" );

         var form = $( "#submit_poll" );
         form.submit();
     });

     $( "#view_poll_result" ).click(function(e) {

         e.preventDefault();

         $("#answer1_count_container").show();
         $("#answer2_count_container").show();
         $("#answer3_count_container").show();
         $("#view_poll_result").hide();
     });


     $("#owl-master").owlCarousel({
         
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
         
        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
        });



  $('.navigation1').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
     $('.navigation1').find('.owl-next').html('<i class="fa fa-angle-right"></i>');

// code for cycle

    $('#top_banner').cycle({ 
    fx:     'fade', 
    speed:   300, 
    timeout: 10000, 
    next:   '#s3', 
    pause:   1 
});



   $('#center_banner').cycle({ 
    fx:     'fade', 
    speed:   300, 
    timeout: 10000, 
    next:   '#s3', 
    pause:   1 
});




      $('#center_banner2').cycle({ 
    fx:     'fade', 
    speed:   300, 
    timeout: 10000, 
    next:   '#s3', 
    pause:   1 
});



    $('#center_banner02').cycle({ 
    fx:     'fade', 
    speed:   300, 
    timeout: 10000, 
    next:   '#s3', 
    pause:   1 
});


$('#right_banner1').cycle({ 
    fx:     'fade', 
    speed:   300, 
    timeout: 10000, 
    next:   '#s3', 
    pause:   1 
});


$('#right_banner13').cycle({ 
    fx:     'fade', 
    speed:   300, 
    timeout: 10000, 
    next:   '#s3', 
    pause:   1 
});



$('#right_banner').cycle({ 
    fx:     'fade', 
    speed:   300, 
    timeout: 10000, 
    next:   '#s3', 
    pause:   1 
});


});