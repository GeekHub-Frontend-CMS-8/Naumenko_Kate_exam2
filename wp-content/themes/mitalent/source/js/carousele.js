$(document).ready(function () {
  const container = $('.carousel');
  const items = container.find('img');
  let activeItem = 0;
  const itemsLength = items.length;
  const dots = $('.dots');

  for(let i = 0; i < itemsLength; i++) {
    const dot = document.createElement('div');
    $(dot).addClass('dot');
    $(dot).attr('data-id', i);
    if (i === activeItem) {
      $(dot)  .addClass('active');
    }
    dots.append(dot);
  }

  $('.left-btn').on('click', function() {
    activeItem = activeItem == 0 ? itemsLength - 1 : activeItem - 1;

    showActiveItem();
  });

  $('.right-btn').on('click', function() {
    activeItem = activeItem == itemsLength - 1 ? 0 : activeItem + 1;

    showActiveItem();
  });

  $('.dot').on('click', function () {
    activeItem = $(this).data('id');
    showActiveItem();
  });

  function showActiveItem() {
    showActiveDot();
    items.css({display: 'none'});
    $(items[activeItem]).css({
      "opacity":"0",
      "display":"block",
    }).show().animate({opacity:1})
  }

  function showActiveDot() {
    $('.dot').removeClass('active');
    $($('.dot')[activeItem]).addClass('active');
  }
});