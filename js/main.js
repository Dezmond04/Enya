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
			nextEl: ".category__button-slider--next",
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
			nextEl: ".unreleased__button-slider--next",
			prevEl: ".unreleased__button-slider--prev",
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
		const body = document.body;
		body.style.height = "100vh";
		body.style.overflowY = "hidden";
	}
	function closeModal(event) {
		event.preventDefault();
		modalOverlay.removeClass("modal__overlay--visible");
		modalDialog.removeClass("modal__dialog--visible");
		const body = document.body;
		body.style.overflowY = "visible";
	}

	$(document).on("keydown", function (e) {
		if (e.which === 27) {
			// key = esc (27)
			if (modalDialog.hasClass("modal__dialog--visible")) {
				modalOverlay.removeClass("modal__overlay--visible");
				modalDialog.removeClass("modal__dialog--visible");
				const body = document.body;
				body.style.overflowY = "visible";
			}
		}
	});
	$(".menu-button").on("click", function () {
		$(".navbar-menu--mobile").toggleClass("navbar-menu__mobile--visible");
	});

	$(".recommendation-card__like").click(function () {
		if ($(this).hasClass("recommendation-card__like")) {
			$(this)
				.removeClass("recommendation-card__like")
				.addClass("recommendation-card__like--active");
			$(this).attr("src", "img/heart-active.svg");
			return;
		}

		if ($(this).hasClass("recommendation-card__like--active")) {
			$(this)
				.removeClass("recommendation-card__like--active")
				.addClass("recommendation-card__like");
			$(this).attr("src", "img/heart.svg");
			return;
		}
	});

	$(".story__favorites-image").click(function () {
		if ($(this).hasClass("story__favorites-image")) {
			$(this)
				.removeClass("story__favorites-image")
				.addClass("story__favorites-image--active");
			$(this).attr("src", "img/favorites-solid.svg");
			return;
		}

		if ($(this).hasClass("story__favorites-image--active")) {
			$(this)
				.removeClass("story__favorites-image--active")
				.addClass("story__favorites-image");
			$(this).attr("src", "img/favorites.svg");
			return;
		}
	});
	$(".form").each(function () {
		$(this).validate({
			errorClass: "invalid",
			messages: {
				name: {
					required: "Пожалуйста, введите ваше имя",
					minlength: "Ваше имя должно содиражать больше 2 символов",
				},
				phone: {
					required: "Нам нужен номер вашего телефона что бы связаться с вами",
					minlength: "Ваш телефон должен состоять из 11 символов",
				},
				user_email: {
					required: "Нам нужна ваша почта что бы связаться с вами",
					email: "Ваша почта должна быть в формате name@domain.com",
				},
			},
		});
	});
	$(document).ready(function () {
		$(".input_phone").mask("+7 (000) 000-00-00");
	});
});
