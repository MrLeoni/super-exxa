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
  
  
  // Products page
  var alphabetGenerate = function() {
    var alphabet = "abcdefghijklmnopqrstuvxwyz".split('');
    var letters = [];
    
    for (var i = 0; i < alphabet.length; i++) {
      letters.push('<li data-search="' + alphabet[i]+ '">' + alphabet[i] + '</li>');
    }
    
    jQuery('#js-generate-list').html(letters.join(''));
  };
  alphabetGenerate();
  
  var responsiveSlider = function(mobile, desktop) {
    if (jQuery(window).width() < 768) {
      return mobile;
    } else {
      return desktop;
    }
  }
  
  // Using bxslider on the list for better UX in mobile devices
  jQuery('.alphabet-bxslider').bxSlider({
    minSlides: 1,
    maxSlides: 29,
    moveSlides: 4,
    slideWidth: 40,
    slideMargin: 0,
    controls: false,
    pager: false,
    infiniteLoop: responsiveSlider(true, false),
    auto: responsiveSlider(true, false),
    speed: 800,
    pause: 6000,
  });
  
  // Using AJAX to query custom posts
  jQuery('#js-generate-list li').click(function() {
    
    var letter = jQuery(this).attr('data-search');
    var container = jQuery('#lista-produtos');
    
    // jQuery('#lista-produtos').empty();
    jQuery.ajax({
      
      url: '/wp-admin/admin-ajax.php',
      type: 'POST',
      data: 'action=search&letter=' + letter,
      
      success:function(results) {
        container.empty();
        if(!results) {
          container.append("<h2 class='search-fail'>Parece que ainda não temos produtos cadastrados com a letra: <span>" + letter + "</span></h2>");
        } else {
          container.append(results);
        }
        
      },
      
      error:function(xhr) {
        console.log(xhr);
      }
      
    });
    
  });
  
  
});