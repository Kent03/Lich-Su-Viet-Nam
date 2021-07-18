$(function () {
//animate (xử lý dlieu chuyen đong)
	new WOW().init();
// xử lý khối swiperjs
	var swiper = new Swiper(".mySwiper",{
		effect: "coverflow",
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: "auto",
		coverflowEffect: {
			rotate: 50,
			stretch: 0,
			depth: 100,
			modifier: 1,
			slideShadows: true,
		},
		pagination: {
			el: ".swiper-pagination",
		},
	});

})
