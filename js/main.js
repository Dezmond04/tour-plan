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

	// var menuButton = $(".menu-button");
	// menuButton.on("click", function () {
	// 	$(".navbar-bottom").toggleClass("navbar-bottom--visible");
	// });

	$(".menu-button").on("click", function () {
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
	// Обработка форм
	$(".form").each(function () {
		$(this).validate({
			errorClass: "invalid",
			messages: {
				name: {
					required: "Please specify your name",
					minlength: "Name must be at least 2 letters long",
				},
				phone: "We need your phone number to contact you",
				user_email: {
					required: "We need your email address to contact you",
					email: "Your email address must be in the format of name@domain.com",
				},
			},
		});
	});
});
