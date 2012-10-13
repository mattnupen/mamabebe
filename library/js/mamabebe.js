$(document).ready(function($){

//########	SUCKERFISH MENU #############

	
	$('.menu ul').addClass("sf-menu sf-vertical");
	$('.menu ul').superfish({
		delay:		600,
		animation: 	{opacity:'show',height:'show'},
		speed:		'fast'
	}); 



//########	FANCY BOX   #############

	$('#rightCol a img').each(function(){
		$(this).parent().attr('data-fancybox-group','gallery');
		$(this).parent().addClass('fancybox');
	});
	
	$('.fancybox').fancybox();
	


//########	TESTIMONIALS BOX #############

	function gatherContent(){ //collect testimonials from CMS and put into one box
		$("<div id='testimonialBox' class='flexslider'><ul id='qRotator' class='slides'></ul></div>").prependTo("#rightCol");
		$(".orangeBox").each(function(index){
			var thisImg = $("img",this).attr("src");
			$(this)
				.appendTo("#qRotator")
				.wrap("<li></li>")
				.parent("li").attr('data-thumb',thisImg);
		});
	}
	
	function rotateImg(obj){ // apply css rotate
		var degRotate = Math.floor(Math.random()*8)+Math.floor(Math.random()*-8)
		$(obj).css('-moz-transform', 'rotate('+degRotate+'deg)', '-webkit-transform', 'rotate('+degRotate+'deg)', 'transform', 'rotate('+degRotate+'deg)');
	}
	$(".orangeBox img").each(function(){
		rotateImg(this)
	});
	
	
	if($("div").hasClass("orangeBox")){ //if testimonials exist apply flexslider library
	
		gatherContent();

		$('#testimonialBox').flexslider({
			animation: "slide",
			pauseOnHover: true,
			slideshowSpeed: 12000,
		    controlNav: "thumbnails",
		    start: function(slider){
		    	$('body').removeClass('loading');
		    }
		});
	}
	
	
});