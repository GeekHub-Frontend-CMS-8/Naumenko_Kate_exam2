$(document).ready(function(){
  $('.scroll-top').on('click', function() {
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
  });

  $(window).scroll(function(){
    if($(this).scrollTop()>=700){
      $('.scroll-top').css({display: 'block'});
    } else {
      $('.scroll-top').css({display: 'none'});
    }
  });
});