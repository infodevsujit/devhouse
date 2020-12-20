(function ($) {
	'use strict';
	
	var portfolioProjectSlider = {};
	qode.modules.portfolioProjectSlider = portfolioProjectSlider;
	
	portfolioProjectSlider.qodePortfolioProjectSlider = qodePortfolioProjectSlider;
	portfolioProjectSlider.qodeOnDocumentReady = qodeOnDocumentReady;
	
	$(document).ready(qodeOnDocumentReady);
	
	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function qodeOnDocumentReady() {
		qodePortfolioProjectSlider();
	}
	
	
	function qodePortfolioProjectSlider() {
		
		var holder = $j('.qode-portfolio-project-slider');
		
		if (holder.length) {
			qode_body.addClass('qode-with-portfolio-project-slider');
			
			holder.each(function () {
				var sliderOptions = typeof $j(this).data('options') !== 'undefined' ? $j(this).data('options') : {},
					autoplay = sliderOptions.autoplay !== undefined && sliderOptions.autoplay !== '' ? sliderOptions.autoplay : true,
					mousewheel = sliderOptions.mousewheel !== undefined && sliderOptions.mousewheel !== '' ? sliderOptions.mousewheel : false,
					speed = sliderOptions.speed !== undefined && sliderOptions.speed !== '' ? parseInt(sliderOptions.speed, 10) : 5000,
					speedAnimation = sliderOptions.speedAnimation !== undefined && sliderOptions.speedAnimation !== '' ? parseInt(sliderOptions.speedAnimation, 10) : 800,
					loop = sliderOptions.loop !== undefined && sliderOptions.loop !== '' ? sliderOptions.loop : true,
					loopedSlides =  2,
					pagination = $j(this).find('.swiper-pagination');
				
				if (autoplay === true) {
					autoplay = {
						delay: speed,
						disableOnInteraction: false
					};
				}
				
				var mySwiper = new Swiper ('.swiper-container', {
					direction: 'horizontal',
					loop: loop,
					loopedSlides: loopedSlides,
					slidesPerView: 1.2,
					centeredSlides: false,
					autoplay: autoplay,
					spaceBetween: 0,
					mousewheel: mousewheel,
					speed: speedAnimation,
					pagination: {
						el: pagination,
						clickable: true,
						renderBullet: function (index, className) {
							var temp = (index + 1) < 10 ? 0 : '';
							return '<span class="' + className + '">' + temp + (index + 1) + '</span>';
						}
					},
					breakpoints: {
						// when window width is >= 1
						1: {
							slidesPerView: 1
						},
						// when window width is <= 480px
						480: {
							slidesPerView: 1
						},
						// when window width is <= 680px
						680: {
							slidesPerView: 1
						},
						// when window width is <= 768px
						768: {
							slidesPerView: 1
						},
						// when window width is <= 1024px
						1024: {
							slidesPerView: 1.15
						},
						// when window width is <= 1366px
						1366: {
							slidesPerView: 1.2
						},
						// when window width is <= 1440px
						1440: {
							slidesPerView: 1.2
						}
					}
				})
			})
		}
		
		
	}
	
	
	

})(jQuery);