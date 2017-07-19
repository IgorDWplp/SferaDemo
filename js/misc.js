$( document ).ready(function() {
	
	
	
	//alert("hello");
	
	
	
	var isHovering = false;
var el = $(".picturElement").mouseover(function(){
    isHovering = true;
    spin();
}).mouseout(function(){
    isHovering = false;
});
var spin = function(){
    if(isHovering){
        el.removeClass("spin");
        
        setTimeout(function(){
            el.addClass("spin");
            
            setTimeout(spin, 1500);
        }, 0);
    }
};
spin();


	
	
	
	
	
	
	
	$("#link").hover(function(){

   $("#js-rotating").show();
   $("#link").hide();
	
	$("#js-rotating").Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: "lightSpeedIn",
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: ",",
    // The delay between the changing of each phrase in milliseconds.
    speed: 6000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});

	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	});