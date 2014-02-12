<?php get_header(); ?>
<div class="container">
  	<div id="activities-descr">
  		<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
  		<div id="descr-title"><h1><?php the_title(); ?></h1></div>
  		<div class="author-meta-single inline"><i class="icon-user"></i>  By <?php the_author_posts_link(); ?></div><div class="post-meta-date inline"><i class="icon-calendar"></i>  On <?php the_date(); ?></div>
  		<!--<div><span style="color:#333; font-size:11px;"><i class="icon-share"></i> Share</span></div>-->
  		<ul class="inline" style="padding-top:8px;">
  			<li class="social-btns" style="padding-left:0;"><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/facebook_button.png" /></a></li>
  			<li class="social-btns" style="padding-left:0;"><a href="https://twitter.com/share?url=<?php the_permalink(); ?>" data-text="Just check this tweet button" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/twitter_button.png" /></a></li>
  		</ul>
  	</div>
  	<div id="page-main-body-wrapper" class="clearfix container">
  		<div class="row-fluid">   
  			<div class="span8"><?php the_content(); ?></div>
  			<?php edit_post_link('Edit'); ?>
    		<div class="span2 post-toolkit">
    			<!--div class="container"><i class="icon-comment"></i> n Comments</div>-->
    		</div>
	</div>
	<?php endwhile; ?>
    <?php endif; ?>
	</div>
<div class="container"><?php comments_template(); ?></div>
<?php get_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/iframeFluidResize.js"></script>