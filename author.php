<?php get_header(); ?>
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
<div class="container">
	<div id="meta-page-title">
		<h2>About the author</h2>
	</div>
	<div class="row">
		<div class="span3"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_id(), 512 ); } ?></div>
		<div class="span6">
			<div class="author-meta-title"><?php echo $curauth->display_name; ?></div>
			<div class="author-meta-bio"><?php echo $curauth->user_description; ?></div>
		</div>
	</div>
	<div class="container author-meta-posts">
		<h2>Posts by this author</h2>
		<div class="author-meta-posts-list">
			
		</div>
	</div>
</div>
<?php get_footer(); ?>