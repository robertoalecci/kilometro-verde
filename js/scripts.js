$( document ).ready(function() {
    
    $(document).scroll(function() {
        if ( $(document).scrollTop() >= 300 ) $('nav').addClass('scrolled');
        else $('nav').removeClass('scrolled');
    });


});