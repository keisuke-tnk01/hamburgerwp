$(function () {
  $('#js-open__menu').click(function () {
    $('.u-open__menu__wrapper').fadeIn();
    $('.p-sidebar__wrapper').addClass('is-open');
    $('.c-menu__cancel__btn').addClass('is-open');
    $('.c-sidebar__title').addClass('is-open');
    $('body').addClass('is-open');
  });
});

$(function () {
  $('#js-close__menu').click(function () {
    $('.p-sidebar__wrapper').removeClass('is-open');
    $('.c-menu__cancel__btn').removeClass('is-open');
    $('.c-sidebar__title').removeClass('is-open');
    $('.u-open__menu__wrapper').fadeOut();
    $('body').removeClass('is-open');
  });
});