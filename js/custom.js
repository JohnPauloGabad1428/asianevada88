/**============================================
                SERVICES
=============================================**/
//A Ready Method
$(function () {
    // animate on scroll
  new WOW().init();
    
  });

/**============================================
                Product
=============================================**/
$(function() {
  $('#product').magnificPopup({
                                      
    delegate: 'a', //child item selector, by clicking on it popup will open
    type: 'image',
    gallery:{
    enabled:true
    }
                                      
    });
});
/**============================================
                Our Product
=============================================**/

$(function(){
  $("#our-products").owlCarousel({
	  rtl: true,
	  items: 3,
	  autoplay: true,
	  smartSpeed: 700,
	  loop: true,
	  autoplayHoverPause: true,
	  slideTransition: 'linear'
	  
	  
  });
});


/**============================================
                Appliances
=============================================**/

$(function(){
  $("#category-ul").owlCarousel({
	 
	  items: 3,
	  autoplay: true,
	  smartSpeed: 700,
	  loop: true,
	  autoplayHoverPause: true,
	  slideTransition: 'linear'
	  
	  
  });
});

/**============================================
                Our Team
=============================================**/
$(function(){
  $("#team-members").owlCarousel({
	   rtl: true,
	  items: 3,
	  autoplay: true,
	  smartSpeed: 700,
	  loop: true,
	  autoplayHoverPause: true
	  
	  
  });
});

/**============================================
                PARTNERSHIP
=============================================**/

$(function(){
  $("#partnerships-list").owlCarousel({
	  	
	  items: 4,
	  autoplay: true,
	  smartSpeed: 700,
	  loop: true,
	  autoplayHoverPause: true,
	  slideTransition: 'linear'
	  
	  
  });
});

/**============================================
                NAVAGATION
=============================================**/
//show/hide transparent black navigation
$(function () {
	//$(window) = SELECT BROWSER WINDOW
	$(window).scroll(function(){
		
		//i want to select browser window again but i use THIS keyword
		if($(this).scrollTop() < 50)	// if scroll top is greater than 50 px
		{
		   //hide
			// SELECT nav element and Used the removeCLass and Select the vesco-top-nav class
		   $("nav").addClass("vesco-top-nav");
            $("nav").removeClass("vesco-top-nav-white");
			
			$("nav").addClass("navbar-margin");
		
		   $("#back-to-top").fadeOut();
			
		   
		   
		 } else {
		   //show
		   $("nav").removeClass("vesco-top-nav");
             
            $("nav").addClass("vesco-top-nav-white");
             
			 $("nav").removeClass("navbar-margin");
		   $("#back-to-top").fadeIn();
			 
		 }
		
		
	})


});


/**============================================
               SMOOTH SCROLLING
=============================================**/
$(function () {

	$("a.smooth-scroll").click(function(event){
		
		//SELECT EVENT and then ADD PreventDefault CLass = Stop the default action
		event.preventDefault();
		
		
		// declare var section to assign the value
		// we SELECT a.smooth-scroll by using THIS keyword and then add ATTR inside of this class we select href from our index
		//get/return id like #about, #owrk etc
		var section = $(this).attr("href");
		
		
		//									SELECT section var and set OFFSET , and another PARAMETER duration
		//$('html, body').animate({scrollTop: $(section)			.offset().top}, 				1250);
		$('html, body').animate({
			 
			scrollTop: $(section).offset().top - 64
		
		}, 1250, "easeInOutQuad");
		
		
		
	});


});
/**============================================
               Multi-Level Dropdown
=============================================**/

$(document).ready(function(){
    $('.dropdown-submenu a.test').on("click",function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
        
    });
});





