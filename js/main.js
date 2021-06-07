const categorySlider = new Swiper(".category-slider", {
	keyboard: {
		enabled: true,
		onlyInViewport: false,
	},
	// Optional parameters
	slidesPerView: 4,
	spaceBetween: 28,
	loop: true,
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
		},
		1200: {
			slidesPerView: 4,
			spaceBetween: 28,
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
