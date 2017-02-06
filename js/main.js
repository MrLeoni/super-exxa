jQuery(document).ready(function() {
  
  // Produtos banner slider
  jQuery(".bannerSlider").bxSlider({ 
    controls : false,
    auto: true,
    speed: 800,
    pause: 8000,
    autoHover: true
  });
  
  // Get the current year
  function currentDate() {
    var date = new Date();
    jQuery("#js-date").html(date.getFullYear());
  }
  currentDate();
  
  // Show & hide main menu
  jQuery('#js-nav-btn').click(function() {
    
    var linkBox = jQuery('.link-box');
    var linkBoxDisplay = linkBox.css('display');
    
    if( linkBoxDisplay === 'none') {
      linkBox.slideDown(200);
      jQuery(this).addClass('active');
    } else if (linkBoxDisplay === 'block') {
      linkBox.slideUp(150);
      jQuery(this).removeClass('active');
    }
    
  });
  
});