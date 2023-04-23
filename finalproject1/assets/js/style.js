// function pass(){
// 	var a=document.getElementById("container");
// 	var b=document.getElementById("container1");
// 	a.style.display="none";
// 	b.style.display="block";
// }

// function pass1(){
// 	var a=document.getElementById("container1");
// 	var b=document.getElementById("container");
// 	a.style.display="none";
// 	b.style.display="block";
// }

// function pass2(){
// 	var a=document.getElementById("container");
// 	var b=document.getElementById("container2");
// 	a.style.display="none";
// 	b.style.display="block";
// }


jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
	  travelocity: 0.03
	  }, settings);   
	  return this.each(function(){
		  var $strip = jQuery(this);
		  $strip.addClass("newsticker")
		  var stripHeight = 1;
		  $strip.find("li").each(function(i){
			stripHeight += jQuery(this, i).outerHeight(true); 
		  });
		  var $mask = $strip.wrap("<div class='mask'></div>");
		  var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");               
		  var containerHeight = $strip.parent().parent().height();  
		  $strip.height(stripHeight);     
		  var totalTravel = stripHeight;
		  var defTiming = totalTravel/settings.travelocity;  
		  function scrollnews(spazio, tempo){
		  $strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
		  }
		  scrollnews(totalTravel, defTiming);       
		  $strip.hover(function(){
			jQuery(this).stop();
		  },
		  function(){
			var offset = jQuery(this).offset();
			var residualSpace = offset.top + stripHeight;
			var residualTime = residualSpace/settings.travelocity;
			scrollnews(residualSpace, residualTime);
		  });     
	  }); 
  };
  
  $(function(){
	  $("ul#ticker01").liScroll();
  });