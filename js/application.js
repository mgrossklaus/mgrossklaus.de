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
var assetUrl = 'http://files.mgrossklaus.de';

document.addEventListener('DOMContentLoaded', function(event) {

	var mg			= document.getElementById('mg'),
			mgName	= document.getElementById('name'),
			mgBody	= document.getElementById('mgrossklaus-de'),
			mgBg		= document.getElementById('bg'),
			scrollY	= window.pageYOffset,
			bgImg		= new Image(),
			loaded	= false;

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

	bgImg.src = assetUrl + '/mg.jpg';

	if(bgImg.complete) {
		loadHandler();
	}
});

/*!
loadCSS: load a CSS file asynchronously.
[c]2014 @scottjehl, Filament Group, Inc.
Licensed MIT
*/

var ss = window.document.createElement( 'link' );
ss.rel = "stylesheet";
ss.href = assetUrl + '/css/styles.min.css';
// temporarily, set media to something non-matching to ensure it'll fetch without blocking render
ss.media = "only x";
// inject link
document.getElementsByTagName('head')[0].appendChild( ss );
// set media back to `all` so that the styleshet applies once it loads
setTimeout( function(){
	ss.media = "all";
} );