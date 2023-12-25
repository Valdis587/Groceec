$(document).ready(function() { 

$('.header__menu-category-button').click(function() {
    $('.header__menu-primary-nav').removeClass('open-primary');
    $('.header__menu-category-nav').toggleClass('open-category');

});
$('.header__menu-category-close').click(function() {
    $('.header__menu-category-nav').removeClass('open-category');

});

$('.header__button').click(function() {
    $('.header__menu-category-nav').removeClass('open-category');
    $('.header__menu-primary-nav').toggleClass('open-primary');

});

$('.header__menu-primary-close').click(function() {
    $('.header__menu-primary-nav').removeClass('open-primary');

});

$('.header__menu-category-list > .menu-item-has-children').click(function() {
    $('.header__menu-category-list .sub-menu').toggleClass('open-sub-category');
});

$('.category-item-children').click(function() {
    $('.sidebar__widget-sub-category-list').toggleClass('widget-open-sub-category');
});

$('.header__minicart-button').click(function() {
        $('.header__minicart-wrapper').toggleClass('mini-cart-open');
    });

    $('.header__minicart-close').click(function() {
        $('.header__minicart-wrapper').removeClass('mini-cart-open');
    });


  	/* ---------------------------------------------------
		Back to Top
	-------------------------------------------------- */
    $(".footer__back").addClass("hidden-top");
    $(window).scroll(function () {
    if ($(this).scrollTop() === 0) {
        $(".footer__back").addClass("hidden-top")
    } else {
        $(".footer__back").removeClass("hidden-top")
    }
});

$('.footer__back').on("click", function () {
    $('body,html').animate({scrollTop:0}, 1200);
    return false;
});


 

});


