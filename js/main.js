$(document).ready(function () {
	const categorySlider = new Swiper(".category-slider", {
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		// Optional parameters
		// slidesPerView: 2,
		// spaceBetween: 10,
		// slidesPerColumn: 2,
		// slidesPerColumnFill: "row",
		// loop: false,
		breakpoints: {
			320: {
				slidesPerView: 2,
				spaceBetween: 10,
				slidesPerColumn: 2,
				slidesPerColumnFill: "row",
				loop: false,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 30,
				slidesPerColumn: 2,
				slidesPerColumnFill: "row",
				loop: false,
			},
			992: {
				slidesPerView: 3,
				slidesPerColumnFill: "column",
				loop: true,
			},
			1200: {
				slidesPerView: 4,
				spaceBetween: 28,
				loop: true,
			},
		},

		// Navigation arrows
		navigation: {
			nextEl: ".category-slider__button--next",
		},
	});

	const unreleasedSlider = new Swiper(".unreleased-slider", {
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		// Optional parameters
		slidesPerView: 1,
		loop: false,
		breakpoints: {
			320: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 4,
				spaceBetween: 32,
			},
			992: {
				slidesPerView: 5,
				spaceBetween: 32,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: ".unreleased-slider__button--next",
			prevEl: ".unreleased-slider__button--prev",
		},
	});

	var modalButton = $("[data-toggle=modal]");
	var closeModalButton = $(".modal__close");
	var closeModalOverlay = $(".modal__overlay");
	modalButton.on("click", openModal);
	closeModalButton.on("click", closeModal);
	closeModalOverlay.on("click", closeModal);

	var modalOverlay = $(".modal__overlay");
	var modalDialog = $(".modal__dialog");

	function openModal() {
		modalOverlay.addClass("modal__overlay--visible");
		modalDialog.addClass("modal__dialog--visible");
	}
	function closeModal(event) {
		event.preventDefault();
		modalOverlay.removeClass("modal__overlay--visible");
		modalDialog.removeClass("modal__dialog--visible");
	}

	$(document).on("keydown", function (e) {
		if (e.which === 27) {
			// key = esc (27)
			if (modalDialog.hasClass("modal__dialog--visible")) {
				modalOverlay.removeClass("modal__overlay--visible");
				modalDialog.removeClass("modal__dialog--visible");
			}
		}
	});
	$(".menu-button").on("click", function () {
		$(".navbar-menu__mobile").toggleClass("navbar-menu__mobile--visible");
	});
});
