/*jslint  browser:  true,
					devel:    true,
					eqeq:     true,
					indent:   2,
					plusplus: true,
					sloppy:   true,
					undef:    true,
					white:    true,
					windows:  true,
					nomen:    true*/
/*global  window */
document.addEventListener('DOMContentLoaded', function(event) {

	var mg			= document.getElementById('mg'),
			mgName	= document.getElementById('name'),
			mgBody	= document.getElementById('mgrossklaus-de'),
			mgBg		= document.getElementById('bg'),
			scrollY	= window.pageYOffset,
			bgImg		= new Image(),
			loaded	= false,
			src;

	window.requestAnimFrame = (function(){
		return  window.requestAnimationFrame       ||
						window.webkitRequestAnimationFrame ||
						window.mozRequestAnimationFrame    ||
		function(callback) {
			window.setTimeout(callback, 1000 / 60);
		};
	}());

	function loadHandler() {
		if(loaded) {
			return;
		}
		loaded = true;

		mg.className += ' mg--loaded';
	}

	function updateLayout(scrollY) {
		if(scrollY <= 500) {
			opac					= 1 - scrollY / 250;
			gray					= scrollY / 6.6667,
			translateY		= scrollY / 1.5 * -1;
			translateYstr	= 'translateY(' + translateY + '%)';
		}
		else {
			opac					= 0;
			gray					= 75;
			translateYstr	= 'translateY(100%)';
			mgBody.classList.remove('loading');
		}

		mgName.style.opacity					= opac;
		mgName.style.MozTransform			= translateYstr;
		mgName.style.webkitTransform	= translateYstr;
		mgName.style.OTransform				= translateYstr;
		mgName.style.msTransform			= translateYstr;
		mgName.style.transform				= translateYstr;
		mgBg.setAttribute('style', '-webkit-filter: grayscale('+ gray +'%)');
	}

	if(!touchDevice) {

		updateLayout(scrollY);

		(function bgloop(){
			requestAnimFrame(bgloop);
			scrollY = window.pageYOffset;
			updateLayout(scrollY);
		})();
	}

	bgImg.onload = loadHandler;

	if(window.matchMedia('(-webkit-min-device-pixel-ratio: 2), (min-resolution: 2dppx)').matches) {
		if(window.matchMedia('(max-width: 320px)').matches) {
		  src = 'mg-640.jpg';
		}
		else if(window.matchMedia('(max-width: 640px)').matches) {
		  src = 'mg-1280.jpg';
		}
		else {
			src = 'mg.jpg';
		}
	}
	else {
	  src = 'mg.jpg';
	}

	bgImg.src = src;

	if(bgImg.complete) {
		loadHandler();
	}
});