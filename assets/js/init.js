jQuery(document).ready(function () {
    var $container = jQuery('#tile-wrapper');
    $container.imagesLoaded(function () {
        $container.isotope({
            itemSelector: '.tile',
            masonry: {
                columnWidth: 0
            },
            animationOptions: {
                duration: 750,
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
    dataType: 'html'
});