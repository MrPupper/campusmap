$(function() {
    
    // Navigation control
    $('header').click(function() {
        
        // When navigation toggle (arrow image in header) is clicked,
        // determine if the menu is already displayed by checking class
        if( $('nav').hasClass('active') ) {
            
            // If menu is open, close it
            $('nav').slideUp();
            $('nav').removeClass('active');
            
            $('#navtoggle').css('transform', 'rotate(180deg)');
            
        } else {
            
            // If menu is closed, open it
            $('nav').slideDown();
            $('nav').addClass('active');
            
            $('#navtoggle').css('transform', 'rotate(0deg)');
            
        }
        
    });
    
    
    // Loading icon and overlay
    function loader(type) {
        
        if(type == "show") {
            
            // If the loader is to be displayed
            $('#loader').show();
            
        } else if(type == "hide") {
            
            // If the loader is to be hidden
            $('#loader').hide();
            
        } else {
            
            // If incompatible parameter exists, display error in console
            console.log("Parameter error, function 'loader()' only accepts 'show' or 'hide' as parameters.");
            return false;
            
        }
        
    }
    
});