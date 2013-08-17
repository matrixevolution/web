$(document).ready(function() {
	$(".b1").click(function() {
		var ele = $(this);
		var tpo = ele.attr('title');
		var dv = $("#cuadrin");
		switch (tpo) {
			case 'show':
				dv.show('slow');
				break;
			case 'hide':
				dv.hide('slow');
				break;
			case 'fadeOut':
				dv.fadeOut(2000);
				break;
			case 'fadeIn':
				dv.fadeIn(2000);
				break;
			case 'slideUp':
				dv.slideUp();
				break;
			case 'slideDown':
				dv.slideDown(2000);
				break;
			case 'slideToggle':
				dv.slideToggle();
				break;
			case 'animate':
				dv.animate({
					backgroundColor: "#000",
					opacity : 0.5,
					fontSize : "20px",
					width:600

				}, 100);
				break;

		}
	});
});