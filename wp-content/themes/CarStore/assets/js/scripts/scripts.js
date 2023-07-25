var $ = jQuery.noConflict();

$(".search__open-bar").click(function ($) {
    if ($(".search__input").hasClass("search__input--disable")) {
        $(".search__input").removeClass("search__input--disable");
        $(".search__input").addClass("search__input--active");
        $(".search__open-bar").removeClass("search_button--active");
        $(".search__open-bar").addClass("search_button--disable");
        $(".search__submit").removeClass("search_button--disable");
        $(".search__submit").addClass("search_button--active");
        $(".search__close").removeClass("search_button--disable");
        $(".search__close").addClass("search_button--active");
    }
});
$(".search__close").click(function ($) {
    $(".search__input").removeClass("search__input--active");
    $(".search__input").addClass("search__input--disable");
    $(".search__open-bar").removeClass("search_button--disable");
    $(".search__open-bar").addClass("search_button--active");
    $(".search__submit").removeClass("search_button--active");
    $(".search__submit").addClass("search_button--disable");
    $(".search__close").removeClass("search_button--active");
    $(".search__close").addClass("search_button--disable");
});
document.addEventListener('DOMContentLoaded', function ($) {
    // Content upploading effect
    var AnimItems = document.getElementsByClassName('._anim-elem');

    function offset($) {
        var rect = element.getBoundingClientRect(),
            scrollLeft = window.pageXOffset,
            scrollTop = window.pageYOffset;
        return {
            top: rect.top + scrollTop,
            left: rect.left + scrollLeft
        };
    }

    function animOnScroll() {
      for (var i = 0; i < AnimItems.length; i++) {
        // Текущие параметры елемента
        var AnimItem = AnimItems[i];
        var AnimItemHeight = AnimItem.offsetHeight;
        var AnimItemOffset = offset(AnimItem).top; // Часть страницы, при которой срабатывает еффект

        var animStart = 4; // Точка налача анимации

        var animItemPoint = window.innerHeight - AnimItemHeight / animStart;

        if (AnimItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart;
        }

        if (window.pageYOffset > AnimItemOffset - animItemPoint && window.pageYOffset < AnimItemOffset + AnimItemHeight) {
          AnimItem.classList.add('_active__fx');
        }
      }
    }

    window.addEventListener('scroll', animOnScroll());
    setTimeout(animOnScroll, 300);
    console.log('JS succesfully initializated!');
});