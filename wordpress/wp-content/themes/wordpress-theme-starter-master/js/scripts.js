(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		const logo1 = document.querySelector(".fox");
		const logo2 = document.querySelector(".raven");

		const options = {
			root: null,
			threshold: 0,
			rootMargin: "-740px"
		};

		const observer1 = new IntersectionObserver(function
			(entries, observer1) {
				entries.forEach(entry => {
					entry.target.classList.toggle("shrink");
					console.log(entry.target);
				});
			}, options);

		const observer2 = new IntersectionObserver(function
			(entries, observer2) {
				entries.forEach(entry => {
					entry.target.classList.toggle("disappear");
					console.log(entry.target);
				});
			}, options);
		
		observer1.observe(logo1);
		observer2.observe(logo2);


		// const faders = document.querySelectorAll('.fade-in');
		
		// const appearOptions = {
		// 	threshold: 1,
		// 	rootMargin: "0px 0px -200px 0px"
		// };

		// const appearOnScroll = new IntersectionObserver 
		// (function(
		// 	entries, 
		// 	appearOnScroll
		// ) {
		// 	entries.forEach(entry => {
		// 		if (!entry.isIntersecting) {
		// 			return;
		// 		} else {
		// 			entry.target.classList.add("appear");
		// 			appearOnScroll.unobserve(entry, target);
		// 		}
		// 	});
		// }, 
		// appearOptions);

		// faders.forEach(fader => {
		// 	appearOnScroll.observe(fader);
		// });
		// DOM ready, take it away
		
	});
	
})(jQuery, this);
