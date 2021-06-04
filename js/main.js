const categorySlider = new Swiper(".category-slider", {
	keyboard: {
		enabled: true,
		onlyInViewport: false,
	},
	// Optional parameters
	slidesPerView: 4,
	spaceBetween: 30,
	loop: true,
	// Navigation arrows
	navigation: {
		nextEl: ".category-slider__button--next",
	},
});
