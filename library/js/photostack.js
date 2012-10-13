$(document).ready(function() { //perform actions when DOM is ready
//adapted from photo stack js - http://demos.usejquery.com/03_z-index_gallery/
  var z = 0; //for setting the initial z-index's
  var inAnimation = false; //flag for testing if we are in a animation
  var tagSelector = '#slideShow .slide_image';
  var tallestImg = 0;
  
  $(tagSelector).each(function() { //set the initial z-index's
    z++; //at the end we have the highest z-index value stored in the z variable
    $(this).css('z-index', z); //apply increased z-index to <img>
    
    setMinHeight($(this));
    rotateImg($(this));
  });

  function swapFirstLast(isFirst) {
    if(inAnimation) return false; //if already swapping pictures just return
    else inAnimation = true; //set the flag that we process a image
    
    var processZindex, direction, newZindex, inDeCrease; //change for previous or next image
    
    if(isFirst) { processZindex = z; direction = '-'; newZindex = 1; inDeCrease = 1; } //set variables for "next" action
    else { processZindex = 1; direction = ''; newZindex = z; inDeCrease = -1; } //set variables for "previous" action
    
    $(tagSelector).each(function() { //process each image
      if($(this).css('z-index') == processZindex) { //if its the image we need to process

        
        $(this).animate({ 'top' : direction + $(this).height() + 'px' }, 'slow', function() { //animate the img above/under the gallery (assuming all pictures are equal height)
        
	        //Swap content for this page so it's displayed
	        if(isFirst){
	        	var matt = $('#slideShow *').filter(function () { return $(this).css('z-index') == z });
	        	swapContent(matt);
	        } else {
	        	var matt = $('#slideShow *').filter(function () { return $(this).css('z-index') == 1 });
	        	swapContent(matt);
	        }
	        
          $(this).css('z-index', newZindex) //set new z-index
            .animate({ 'top' : '0' }, 'slow', function() { //animate the image back to its original position
              inAnimation = false; //reset the flag
            });
        });
        
        
        
      } else { //not the image we need to process, only in/de-crease z-index
        $(this).css('border-color','white');
        $(this).animate({ 'top' : '0' }, 'slow', function() { //make sure to wait swapping the z-index when image is above/under the gallery
          $(this).css('z-index', parseInt($(this).css('z-index')) + inDeCrease); //in/de-crease the z-index by one
        });
      }
      
    });
    
    
    return false; //don't follow the clicked link
  }
  
  
  function swapContent(newContent){
  	
	$("#slide_current").fadeOut(function(){
		// put title info into description box
		var slideTitle = $(newContent).parent().children(".slide_title").html();
		var slideText = $(newContent).parent().children(".slide_text").html();
		$("#slide_current_title").html(slideTitle);
		$("#slide_current_text").html(slideText);
	}).fadeIn();
  }
  
  function setMinHeight(obj){
  	var imgHeight = parseInt($(obj).css('height').replace('px', ''));
  	
  	if(imgHeight > tallestImg){
  		tallestImg = imgHeight;
  		$("#slideShow").css('height',tallestImg+30+"px");
  	}
  }
  
  function rotateImg(obj){
  	$(obj).css('-moz-transform', 'rotate('+Math.floor(Math.random()*11)+'deg)', '-webkit-transform', 'rotate('+Math.floor(Math.random()*11)+'deg)', 'transform', 'rotate('+Math.floor(Math.random()*11)+'deg)');
  }
  
  swapFirstLast(true);
  
  $('#slide_next').click(function() {
    return swapFirstLast(true); //swap first image to last position
  });
  
  $('#slide_prev').click(function() {
    return swapFirstLast(false); //swap last image to first position
  });
});