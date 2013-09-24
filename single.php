<?php get_header(); ?>
<div class="container">
  	<div id="activities-descr">
  		<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
  		<div id="descr-title"><h1><?php the_title(); ?></h1></div>
  	</div>
  	<div id="page-main-body-wrapper" class="clearfix">
  		<div class="row-fluid">   
  			<div class="span8"><?php the_content(); ?></div>
  			<?php edit_post_link('Edit'); ?>
  			<?php endwhile; ?>
    		<?php endif; ?>
    		<div class="span2 offset1">
    			<div class="author-meta"><i class="icon-user"></i> <?php the_author(); ?></div>
    			<a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436'); return false;">Share on Facebook</a>
    		</div>
		</div>
	</div>
</div>
<div class="container"><?php comments_template(); ?></div>

    
<?php get_footer(); ?>