/* Animate buttons */

$(document).ready(function(){
	$("form#request .button, form#request_two .button").hover(
	  function() {
	    $(this).addClass("animated swing");
	  },
	  function() {
	    $(this).removeClass("animated swing");
	  });
});

$(document).ready(function(){
	$("img.social").hover(
	  function() {
	    $(this).addClass("animated rotate");
	  },
	  function() {
	    $(this).removeClass("animated rotate");
	  });
});


/* Localscroll */

	$(document).ready(function(){
		$('#menu').localScroll({offset:-50});
		$('#responsive-menu').localScroll();
	});
		

/* Responsive menu */

	$(document).ready(function(){
		$('.responsive-menu').click(function(){
		$("ul#responsive-menu").toggle();
		});
	});


/* Image Slideshow */

	$(document).ready(function(){
		  $("#slide").responsiveSlides({
	        maxwidth:5000,
	        speed: 800
	      });
	});
	
	
/* Content Slideshow */
	
	$(document).ready(function(){
	  $('.flexslider').flexslider({
	    animation: "slide"
	  });
	});	
	
	
/* Accordion */

  $(function() {
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( "#accordion" ).accordion({
      icons: icons
    });
    $( "#toggle" ).button().click(function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
  });
  
/* Tabs */

  $(function() {
    $( "#tabs" ).tabs();
  });

/* Date picker */
  
  $(function() {
    $( ".datepicker" ).datepicker();
  });
  
/* Colorbox */

$(document).ready(function(){
$(".group1").colorbox({rel:'group1'});
$(".group2").colorbox({rel:'group2', transition:"fade"});
$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
$(".group4").colorbox({rel:'group4', slideshow:true});
$(".ajax").colorbox();
$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
$(".inline").colorbox({inline:true, width:"80%"});
$(".callbacks").colorbox({
	onOpen:function(){ alert('onOpen: colorbox is about to open'); },
	onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
	onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
	onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
	onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
});

$('.non-retina').colorbox({rel:'group5', transition:'none'})
$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});


$("#click").click(function(){ 
	$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
	return false;
});
});


/* Animations */

userAgent = window.navigator.userAgent;

if(/iP(hone|od|ad)/.test(userAgent)==false) {

	$(document).ready(function(){
		
	$('.slide-down').css({'opacity':'0'});
	$('.slide-right').css({'opacity':'0'});
	$('.slide-left').css({'opacity':'0'});
		
	$('.slide-down').bind('inview', function(event, visible) {
	  if (visible==true) {
	    // element is now visible in the viewport
	    $(this).addClass('animated fadeInDown');
	  } else {
	    // element has gone out of viewport
	    $(this).removeClass('animated fadeInDown');
	  }
	});

	$('.slide-right').bind('inview', function(event, visible) {
	  if (visible==true) {
	    // element is now visible in the viewport
	    $(this).addClass('animated fadeInRight');
	  } else {
	    // element has gone out of viewport
	    $(this).removeClass('animated fadeInRight');
	  }
	});

	$('.slide-left').bind('inview', function(event, visible) {
	  if (visible==true) {
	    // element is now visible in the viewport
	    $(this).addClass('animated fadeInLeft');
	  } else {
	    // element has gone out of viewport
	    $(this).removeClass('animated fadeInLeft');
	  }
	});
	});

}
