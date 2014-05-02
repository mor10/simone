// Toggle Author Bio on and off
jQuery(document).ready(function($){
    $(".reveal-bio a").click(function(){
        $(".author-info").slideToggle('slow');
    
        if($('.reveal-bio a').hasClass('fa-minus-circle')){
            $('.reveal-bio a').removeClass('fa-minus-circle').addClass('fa-plus-circle reveal-fix');
            $('.author-index').addClass('hide-fix');
        } else {
            $('.reveal-bio a').removeClass('fa-plus-circle reveal-fix').addClass('fa-minus-circle');
            $('.author-index').removeClass('hide-fix');
        };
        
        return false;
    });
});