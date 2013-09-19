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