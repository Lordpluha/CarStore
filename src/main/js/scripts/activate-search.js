$(".search__open-bar").click(function (e) {
	if($(".search__input").hasClass("search__input--disable")) {
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

$(".search__close").click(function(event) {
	$(".search__input").removeClass("search__input--active");
	$(".search__input").addClass("search__input--disable");

	$(".search__open-bar").removeClass("search_button--disable");
	$(".search__open-bar").addClass("search_button--active");

	$(".search__submit").removeClass("search_button--active");
	$(".search__submit").addClass("search_button--disable");

	$(".search__close").removeClass("search_button--active");
	$(".search__close").addClass("search_button--disable");
});