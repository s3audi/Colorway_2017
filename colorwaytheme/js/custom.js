/*-----------------------------------------------------------------------------------*/
/*	IMAGE HOVER
/*-----------------------------------------------------------------------------------*/
jQuery(function() {
    // OPACITY OF BUTTON SET TO 50%
    jQuery('.one_fourth a img').css("opacity","1.0");	
    // ON MOUSE OVER
    jQuery('.one_fourth a img').hover(function () {										  
        // SET OPACITY TO 100%
        jQuery(this).stop().animate({
            opacity: 0.75
        }, "fast");
    },	
    // ON MOUSE OUT
    function () {			
        // SET OPACITY BACK TO 50%
        jQuery(this).stop().animate({
            opacity: 1.0
        }, "fast");
    });
});
//Slider
// JavaScript Document
//Flexslider
//<![CDATA[
  jQuery.noConflict();
    jQuery("document").ready(function(){
	var slide_transition= jQuery("#txt_slide_transtion").val();
	//alert(jQuery("#txt_slide_transtion").val());
	//alert(slide_transition);
    jQuery('.flexslider').flexslider({
	    animation: ""+jQuery("#txt_slide_transtion").val()+"",              //String: Select your animation type, "fade" or "slide"
		slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
		slideshow: true,                //Boolean: Animate slider automatically
		slideshowSpeed: jQuery("#txt_slidespeed").val(),           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationDuration: 600,         //Integer: Set the speed of animations, in milliseconds
		directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
		controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
		mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
		prevText: "Previous",           //String: Set the text for the "previous" directionNav item
		nextText: "Next",               //String: Set the text for the "next" directionNav item
		pausePlay: false,               //Boolean: Create pause/play dynamic element
		pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
		playText: 'Play',               //String: Set the text for the "play" pausePlay item
		randomize: false,               //Boolean: Randomize slide order
		slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
		animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: true						   
	 });
	// alert(jQuery("#txt_slide_transtion").val());
});
//DDsmooth
ddsmoothmenu.init({
    mainmenuid: "menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
//Tipsy
jQuery(function() {    
    jQuery('.social_logo a').tipsy();
}); 
//Zoombox
jQuery(function() { 
    jQuery('a.zoombox').zoombox();
});
// Testimonial Slider
//<![CDATA[
  jQuery.noConflict();
    jQuery("document").ready(function(){
    jQuery('.flex_testimonial').flexslider({
	    animation: "slide",              //String: Select your animation type, "fade" or "slide"
		slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
		slideshow: true,                //Boolean: Animate slider automatically
		slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationDuration: 600,         //Integer: Set the speed of animations, in milliseconds
		directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
		controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
		mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
		prevText: "Previous",           //String: Set the text for the "previous" directionNav item
		nextText: "Next",               //String: Set the text for the "next" directionNav item
		pausePlay: false,               //Boolean: Create pause/play dynamic element
		pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
		playText: 'Play',               //String: Set the text for the "play" pausePlay item
		randomize: false,               //Boolean: Randomize slide order
		slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
		animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: true						   
	 });
	// alert(jQuery("#txt_slide_transtion").val());
});