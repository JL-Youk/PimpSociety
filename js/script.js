$(window).load(function() {
	$("#loaderback").delay('1000').fadeOut("750");
	particlesJS.load('particles-js-loader', 'assets/particles.json', function() {
	 console.log('callback - particles.js config loaded');
 });
});
$(document).ready(function($) {

	function juizScrollTo(element){
		$(element).click(function(){
			var goscroll = false;
			var the_hash = $(this).attr("href");
			var regex = new RegExp("\#(.*)","gi");
			var the_element = '';

			if(the_hash.match("\#(.+)")) {
				the_hash = the_hash.replace(regex,"$1");

				if($("#"+the_hash).length>0) {
					the_element = "#" + the_hash;
					goscroll = true;
				}
				else if($("a[name=" + the_hash + "]").length>0) {
					the_element = "a[name=" + the_hash + "]";
					goscroll = true;
				}

				if(goscroll) {
					$('html, body').animate({
						scrollTop:$(the_element).offset().top
					}, 'slow');
					return false;
				}
			}
		});
	};
	juizScrollTo('a[href^="#"]');
	window.sr = ScrollReveal();
	window.sr= new ScrollReveal({
	reset: true, // faire disparaitre l'élément en dehors du scroll. Par défaut false
	});
 sr.reveal('.RevealDiv', { duration: 1500,  });
 sr.reveal('.Reveallext', {delay:100, duration: 1000,  rotate: {x: 90}});
 sr.reveal('.RevealIntoParallax', {delay:300, duration: 1500,  rotate: {x: 90}});
 sr.reveal('.RevealElementForm',{ delay: 150, duration: 800 }, 300);


 particlesJS.load('particles-js', 'assets/particles.json', function() {
  console.log('callback - particles.js config loaded');
});
});
