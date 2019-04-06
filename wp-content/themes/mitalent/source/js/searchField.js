$(function() {
  $(document).on('click', '.search', function () {
    $('.search-form').css({width: '200px', "border-left": '1px solid black'});
    $('.search-field').css({width: '200px'});
    $('.search-form').addClass('active');
    $('.search-form input[type="text"]').css({display: 'block'});
    $('.search-form input[type="text"]').focus();
  });

  $(document).on('mousedown', function (e) {
    if (!$(e.target).parents('.search').length) {
      $('.search-form').css({width: '40px', "border-left": '0'});
      $('.search-field').css({width: '40px', "border-left": '0'});
      $('.search-form').removeClass('active');
      $('.search-form input[type="text"]').css({display: 'none'});
    }
  });
});
