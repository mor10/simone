jQuery(function($){
   /* 
    * Toggles search on and off
    */
   $('.search-toggle').on('click',function(event){
      var that = $(this),
      wrapper = $('.search-box-wrapper');
      
      that.toggleClass('active');
      wrapper.toggleClass('hide');
      
      if(that.is('.active)') || $('.search-toggle .screen-reader-text')[0] === event.target) {
          wrapper.find('.search-field').focus();
      }
   });
   
   var sf;
var breakpoint = 600;
   sf = $('ul.nav-menu');
    if($(document).width() >= breakpoint){
        sf.superfish({
            delay: 200,
            speed: 'fast'
        });
    }
    $(window).resize(function(){
        if($(document).width() >= breakpoint & !sf.hasClass('sf-js-enabled')){
            sf.superfish({
                delay: 200,
                speed: 'fast'
            });
        } else if($(document).width() < breakpoint) {
            sf.superfish('destroy');
        }
    });
});