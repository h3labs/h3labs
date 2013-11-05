jQuery(document).ready(function () {
    var $container = jQuery('#tile-wrapper');
    $container.imagesLoaded(function () {
        $container.isotope({
            itemSelector: '.tile',
            masonry: {
                columnWidth: 0
            },
            animationOptions: {
                duration: 1,
                easing: 'linear',
                queue: false,
            }
        });
        jQuery('#filters a').click(function () {
            var selector = jQuery(this).attr('data-filter');
            $container.isotope({
                filter: selector
            });
            return false;
        });
    });
    
var $elementHolder = jQuery('.elements');
$elementHolder.infinitescroll({
    loading: {
        finished: undefined,
        finishedMsg: "<em>Congratulations, you've reached the end of the internet.</em>",
        img: "",
        msg: null,
        msgText: "<em>Loading the next set of posts...</em>",
        selector: null,
        speed: 'fast',
        start: undefined
    },
    state: {
        isDuringAjax: false,
        isInvalidPage: false,
        isDestroyed: false,
        isDone: false, // For when it goes all the way through the archive.
        isPaused: false,
        currPage: 1
    },
    debug: false,
    behavior: undefined,
    binder: jQuery(window), // used to cache the selector for the element that will be scrolling
    nextSelector: "div#navigation a.older",
    navSelector: "div#navigation",
    contentSelector: null, // rename to pageFragment
    extraScrollPx: 150,
    itemSelector: "div.tile",
    dataType: 'ajax'
});
    
});

//Youtube Fluid Resize
// By Chris Coyier & tweaked by Mathias Bynens

$(function() {

	// Find all YouTube videos
	var $allVideos = $("iframe[src^='//www.youtube.com']"),

	    // The element that is fluid width
	    $fluidEl = $(".row-fluid");

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

		$(this)
			.data('aspectRatio', this.height / this.width)
			
			// and remove the hard coded width/height
			.removeAttr('height')
			.removeAttr('width');

	});

	// When the window is resized
	// (You'll probably want to debounce this)
	$(window).resize(function() {

		var newWidth = $fluidEl.width();
		
		// Resize all videos according to their own aspect ratio
		$allVideos.each(function() {

			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));

		});

	// Kick off one resize to fix all videos on page load
	}).resize();

});