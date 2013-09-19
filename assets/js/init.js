jQuery(document).ready (function() {
	var $container = jQuery('#tile-wrapper');
	$container.imagesLoaded( function() {
	$container.isotope({
		itemSelector : '.tile',
		masonry : {
		columnWidth : 0
		},
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false, 
		}
	});
	jQuery('#filters a').click(function(){
  var selector = jQuery(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
	});
});
});

//Infinite Scroll Configuration
// infinitescroll() is called on the element that surrounds 
// the items you will be loading more of
 /* $('#tile-wrapper').infinitescroll({
 
    navSelector  : "div.navigation",            
                   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.navigation a",    
                   // selector for the NEXT link (to page 2)
    itemSelector : "#tile-wrapper div.elements"          
                   // selector for all items you'll retrieve
  });*/
 
