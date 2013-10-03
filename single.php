<?php get_header(); ?>
<div class="container">
  	<div id="activities-descr">
  		<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
  		<div id="descr-title"><h1><?php the_title(); ?></h1></div>
  		<div class="author-meta-single inline"><i class="icon-user"></i>  By <?php the_author_posts_link(); ?></div><div class="post-meta-date inline"><i class="icon-calendar"></i>  On <?php the_date(); ?></div>
  	</div>
  	<div id="page-main-body-wrapper" class="clearfix">
  		<div class="row-fluid">   
  			<div class="span8"><?php the_content(); ?></div>
  			<?php edit_post_link('Edit'); ?>
    		<div class="span2 offset1 post-toolkit">
    			
    			<!--<div class="span3"><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436'); return false;">Share on Facebook</a></div>-->
		</div>
	</div>
	<?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="container"><?php comments_template(); ?></div>

    
<?php get_footer(); ?>