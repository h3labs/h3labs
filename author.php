<?php get_header(); ?>
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
<div class="container">
	<div class="row" id="author-wrapper">
		<div class="span3">
			<div><?php global $authordata, $curauth; $authordata=get_userdata(get_query_var( 'author' )); if(function_exists('get_avatar')) { echo get_avatar( get_the_author_id(), 480 ); } ?></div>
		</div>
		<div class="span6">
			<div id="meta-page-title"><h2>About the Author</h2></div>
			<div class="author-meta-title"><?php echo $curauth->display_name; ?></div>
			<div class="author-meta-bio"><?php echo $curauth->user_description; ?></div>
			<div class="container author-meta-posts-list">
				<div class="author-meta-posts">
					<h2>Posts by this author</h2>
					<div class="author-meta-posts-list">
    					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        				<div class="author-meta-post-list-item">
        					<i class="icon-file"></i><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a> 
        				</div>
        				<?php endwhile; else: ?>
        				<p><?php _e('The query returned no posts by this author.'); ?></p>
        				<?php endif; ?>
					</div>
				</div>
		</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>