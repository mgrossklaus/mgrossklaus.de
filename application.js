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
/*global  window, Modernizr */
document.addEventListener('DOMContentLoaded', function(event) {

	var mgName	= document.getElementById('name'),
			mgBody	= document.getElementById('mgrossklaus-de'),
			mgBg		= document.getElementById('bg'),
			scrollY	= window.pageYOffset;

	window.requestAnimFrame = (function(){
		return  window.requestAnimationFrame       ||
						window.webkitRequestAnimationFrame ||
						window.mozRequestAnimationFrame    ||
		function(callback) {
			window.setTimeout(callback, 1000 / 60);
		};
	}());

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

	if(!Modernizr.touch) {

		updateLayout(scrollY);

		(function bgloop(){
			requestAnimFrame(bgloop);
			scrollY = window.pageYOffset;
			updateLayout(scrollY);
		})();
	}

	document.getElementById('lazy-css').media = 'screen';
});