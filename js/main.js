$(document).ready(function () {
	const hotelSlider = new Swiper(".hotel-slider", {
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		// Optional parameters
		loop: true,

		// Navigation arrows
		navigation: {
			nextEl: ".hotel-slider__button--next",
			prevEl: ".hotel-slider__button--prev",
		},
		effect: "coverflow",
	});
	const reviewsSlider = new Swiper(".reviews-slider", {
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		// Optional parameters
		loop: true,

		// Navigation arrows
		navigation: {
			nextEl: ".reviews-slider__button--next",
			prevEl: ".reviews-slider__button--prev",
		},
	});

	$(".newsletter").parallax({ imageSrc: "./img/newsletter-bg.jpg" });

	var menuButton = $(".menu-button");
	menuButton.on("click", function () {
		$(".navbar-bottom").toggleClass("navbar-bottom--visible");
	});

	ymaps.ready(init);

	function init() {
		var myMap = new ymaps.Map(
			"map",
			{
				center: [32.089666, 34.77077],
				zoom: 15,
			},
			{
				searchControlProvider: "yandex#search",
			},
		);

		myMap.behaviors.disable("scrollZoom");

		myGeoObject = new ymaps.GeoObject({});
		myMap.geoObjects.add(myGeoObject).add(
			new ymaps.Placemark(
				[32.089666, 34.77077],
				{
					balloonContentHeader: "Hilton Hotel",
					balloonContentBody: "Hilton Hotel Элитный пляжный отель с рестораном",
					balloonContentFooter:
						"Официальный сайт: <a href='https://web-coup.ru/homeworks/tour-plan/'>https://web-coup.ru/homeworks/tour-plan/</a>",
					hintContent: "Hilton Hotel",
				},
				{
					preset: "islands#dotIcon",
					iconColor: "#ff2b2b",
				},
			),
		);
	}

	var modalButton = $("[data-toggle=modal]");
	var closeModalButton = $(".modal__close");
	modalButton.on("click", openModal);
	closeModalButton.on("click", closeModal);

	function openModal() {
		var modalOverlay = $(".modal__overlay");
		var modalDialog = $(".modal__dialog");
		modalOverlay.addClass("modal__overlay--visible");
		modalDialog.addClass("modal__dialog--visible");
	}
	function closeModal(event) {
		event.preventDefault();
		var modalOverlay = $(".modal__overlay");
		var modalDialog = $(".modal__dialog");
		modalOverlay.removeClass("modal__overlay--visible");
		modalDialog.removeClass("modal__dialog--visible");
	}
});
