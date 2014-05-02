/* 
 * Toggles search on and off
 */
jQuery(document).ready(function($){
    $(".search-toggle").click(function(){
        $(".search-box-wrapper").slideToggle('slow', function(){
            $('.search-toggle').toggleClass('active');
        });
        return false;
    });
});
