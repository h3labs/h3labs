<?php get_header(); ?>

<div class="container">
  		<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
  	<div id="page-main-body-wrapper" class="clearfix">
  		<div class="row-fluid">   
  			<div class="span8">
  				<div id="descr-title"><h1><?php echo $curauth->display_name; ?></h1></div>
  				<dl>
        			<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        			<dt>Biography</dt>
        			<dd><?php echo $curauth->user_description; ?></dd>
    			</dl>
    			
    			<h2>Posts by this author</h2>
    			
    			<li>
    			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    				<div class="author-meta-portrait img-polaroid"><?php echo get_avatar( get_the_author_meta( 'ID' ), 512 ); ?></div>
           		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
            	<?php the_title(); ?></a>,
            	<?php the_time('d M Y'); ?> in <?php the_category('&');?>
        		</li>
        		<p><?php _e('No posts by this author.'); ?></p>
    			
    			<?php endwhile; ?>
    			<?php endif; ?>
  			</div>
  			<?php edit_post_link('Edit'); ?>
    		<!--<div class="span2 offset1">
    			<div class="span12">
    				<h3>About the author</h3>
    				<div class="author-meta-image"><img src="http://distilleryimage8.ak.instagram.com/9b6d232a256811e387c422000ae911c7_7.jpg" class="img-polaroid" /></div>
    				<div class="author-meta-name">Jesus Mendoza</div>
    				<div class="author-meta-bio"><?php the_author_meta('description'); ?></div>
    			</div>
    			<!--<div class="span3"><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436'); return false;">Share on Facebook</a></div>-->
    		<!--</div>-->
		</div>
	</div>
</div>
<?php get_footer(); ?>