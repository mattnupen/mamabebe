$(document).ready(function() { //perform actions when DOM is ready
//adapted from photo stack js - http://demos.usejquery.com/03_z-index_gallery/
  var z = 0; //for setting the initial z-index's
  var inAnimation = false; //flag for testing if we are in a animation
  var tagSelector = '.organgeBox';
  var tallestImg = 0;
  
  
  function getContent(){
  	var allContent;
  	$(tageSelector).html() = allContent;
  	
  }
  
  
  
  
  $(tagSelector).each(function() { //set the initial z-index's
    z++; //at the end we have the highest z-index value stored in the z variable
    $(this).css('z-index', z); //apply increased z-index to <img>
    
    setMinHeight($(this));
    rotateImg($(this));
  });

    
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
  
  
  $('#slide_next').click(function() {
    return swapFirstLast(true); //swap first image to last position
  });
  
  $('#slide_prev').click(function() {
    return swapFirstLast(false); //swap last image to first position
  });
});