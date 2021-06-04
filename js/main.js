const categorySlider = new Swiper(".category-slider", {
	keyboard: {
		enabled: true,
		onlyInViewport: false,
	},
	// Optional parameters
	slidesPerView: 4,
	spaceBetween: 28,
	loop: true,
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
	slidesPerView: 5,
	spaceBetween: 32,
	loop: false,
	// Navigation arrows
	navigation: {
		nextEl: ".unreleased-slider__button--next",
		prevEl: ".unreleased-slider__button--prev",
	},
});
