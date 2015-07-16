$(document).ready(function(){
  $(".video-wrapper").fitVids();
});

/* Smooth scrolling */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 400);
            return false;
        }
    }
});

$(function() {
    $("img.lazy").lazyload({
      threshold : 200,
      effect: "fadeIn"
  });
});

$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 500;             // set to whatever you want it to be

    if(y_scroll_pos > scroll_pos_test) {
        $(".scrollToTop").css({opacity: '0.5', display: 'block'});
    } else {
      $(".scrollToTop").css("opacity","0");
    }
});

$(".scrollToTop").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});