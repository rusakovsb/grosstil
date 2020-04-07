(function ($) {
  Drupal.behaviors.themeScripts = {
      attach: function(context, settings) {		
		
	      $(window).scroll(function(){
          if ($(window).scrollTop() >= 30) {
            $('header').addClass('sticky');
          }
          else {
            $('header').removeClass('sticky');
          }
        });	

    }
  };
})(jQuery);