(function($) {
  $(function() {
    // Detect touch screen and enable scrollbar if necessary
    function is_touch_device() {
      try {
        document.createEvent("TouchEvent");
        return true;
      } catch (e) {
        return false;
      }
    }
    if (is_touch_device()) {
      $('#nav-mobile').css({ overflow: 'auto'})
    }


    // Plugin initialization
    $('.button-collapse').sideNav({'edge': 'left'});


  });
})(jQuery);