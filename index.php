<?php get_header(); ?>
<div class="container">
  		<div id="activities-descr">
  			<div id="descr-title"><h1>El Paso's First and only Makerspace</h1></div>
  			<div id="descr-text"><h3>What interests you?</h3></div>
  			<div class="container" id="mailing-list-header">
  				<h3><a href="/list">Sign up to our mailing list!</a></h3>
  			</div>
  			<!--<div class="container impact-container" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/galaxy.jpg);">
  				<div id="industry-container">
  					<div>We enrich people through science, technology, art, and philosophy. We want to develop a community that changes El Paso forever. </div>
    				<em class="heading20">Scientists &amp; Engineers</em> <strong class="heading21"> <a href="/solutions/intelligence">Community</a> / <a href="/solutions/defense/">Networking</a> / <a href="/solutions/law-enforcement/">Tools &amp; Training</a> / <a href="/solutions/regulation-and-oversight/">Ideas</a>  •</strong>
    				<em class="heading20">Artists &amp; Hobbyists</em> <strong class="heading21"> <a href="/solutions/cyber/">Community</a> / <a href="/solutions/legal-intelligence/">Materials</a> / <a href="/solutions/home-lending/">Help</a> •</strong>
    				<em class="heading20">Everyone</em> <strong class="heading21"><a href="/solutions/pharmaceuticals/">Education</a> / <a href="/solutions/health-insurance/">Enlightenment</a></strong>
    			</div>
  			</div>-->
  			<div id="filters">
  				<!--<div id="filter-title">Filters</div>-->
  				<ul id="filter-elements" class="inline">
  					<li><a href="#" data-filter=".electronics"><i class="icon-tag"></i> Electronics</a></li>
  					<li><a href="#" data-filter=".outdoor"><i class="icon-tag"></i> Outdoors</a></li>
  					<li><a href="#" data-filter=".ham"><i class="icon-tag"></i> Radio</a></li>
  					<li><a href="#" data-filter=".chemistry"><i class="icon-tag"></i> Chemistry</a></li>
  					<li><a href="#" data-filter=".announcements"><i class="icon-tag"></i> Announcements</a></li>
  					<li><a href="#" data-filter=".economics"><i class="icon-tag"></i> Economics</a></li>
  					<li><a href="#" data-filter=".foundry"><i class="icon-tag"></i> Foundry</a></li>
  					<li><a href="#" data-filter=".events"><i class="icon-tag"></i> Events</a></li>
  					<li><a href="#" data-filter="*"><i class="icon-tag"></i> Show All</a></li>
  				</ul>
  			</div>
  		</div>
  		<?php if ( !dynamic_sidebar() ) : ?><?php endif; ?>
  		<!--<div class="row">-->
  		<div id="main-body-wrapper" class="cf span12">
  			<div id="tile-wrapper" class="cf elements">
  				
  				<!--<div class="cf tile">
  					<iframe width="370" height="590" src="http://meetu.ps/1DxlKY" frameborder="0"></iframe>
  				</div>-->
  				
  				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
  				<?php query_posts(array('posts_per_page' => 20, 'orderby' => 'desc', 'category_name' => 'interests', 'paged' => $paged)); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
				<?php $commentNumber = get_comments_number( $post_id ); ?>
				<?php $video_thumb = get_post_meta($post->ID, "Video_section", true); ?>
				<div class="tile cf <?php echo $card_id; ?>" id="element-<?php get_the_ID(); ?>">
				<?php if ($video_thumb) { ?>
				<div><a href="<?php the_permalink(); ?>"><?php echo $video_thumb; ?></a></div>
				<?php } else { ?>
  					<div><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a></div>
						<?php } ?>
  					<div class="tile-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  					<div class="author-meta"><i class="icon-user"></i><?php the_author_posts_link(); ?></div>
  					<div class="tile-description"><?php the_excerpt(); ?></div>
  					<div class="post-read-more"><a href="<?php the_permalink(); ?>">Read More</a></div>
  					<div class="post-meta-wrapper">
  						<div class="aligncenter post-meta-comment-number"><i class="icon-comment"></i>  <?php echo $commentNumber ?></div>
  					</div>
  					<?php edit_post_link('Edit'); ?>
  				</div>
  				<?php endwhile; else: ?>
				<?php endif; ?>
  			</div>
  		</div>
  		<!--<div class="span3">
  			<ul class="nav nav-pills nav-stacked stacked-filters" data-toggle="buttons-checkbox">
  				<button type="button" class="btn btn-primary">Left</button>
  				<button type="button" class="btn btn-primary">Left</button>
  					<li><a href="#" data-filter=".electronics"><i class="icon-tag"></i> Electronics</a></li>
  					<li><a href="#" data-filter=".outdoor"><i class="icon-tag"></i> Outdoors</a></li>
  					<li><a href="#" data-filter=".ham"><i class="icon-tag"></i> Radio</a></li>
  					<li><a href="#" data-filter=".chemistry"><i class="icon-tag"></i> Chemistry</a></li>
  					<li><a href="#" data-filter=".announcements"><i class="icon-tag"></i> Announcements</a></li>
  					<li><a href="#" data-filter=".economics"><i class="icon-tag"></i> Economics</a></li>
  					<li><a href="#" data-filter=".foundry"><i class="icon-tag"></i> Foundry</a></li>
  					<li><a href="#" data-filter=".events"><i class="icon-tag"></i> Events</a></li>
  					<li><a href="#" data-filter="*"><i class="icon-tag"></i> Show All</a></li>
			</ul>
  		</div>-->
  		<!--</div>-->
</div>
<div class="container">
	<!--<div id="navigation" class="next-page-btn"><?php posts_nav_link(); ?></div>-->
	<ul class="pager">
  <li class="previous custom-pagination">
    <?php previous_posts_link('&larr; Newer Posts' ) ?>
  </li>
  <li class="next custom-pagination">
    <?php next_posts_link('Older Posts &rarr;' ) ?>
  </li>
</ul>
</div>
<?php get_footer(); ?>