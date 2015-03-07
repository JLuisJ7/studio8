<?php get_header(); ?>
<div class="posts inner-content">
	<div class="entry-header">
		
		<img width="1920" height="1280" src="<?php bloginfo('template_url'); ?>/images/architecture-bridge-california-3367.jpg" class="attachment-full wp-post-image" alt="architecture-bridge-california-3367" no-lazy="" />
</div>

<div class="main wrap">
<?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
			<article id="post-551" class="post-551 post type-post status-publish format-standard has-post-thumbnail hentry category-design-principles tag-inspiration">
		<div class="post-header">
			<div>
				<a href="#" rel="category tag">category</a> <span class="sep">/</span> <time><?php the_time('d \d\e F, Y') ?></time> <span class="sep">/</span>
				<ul class="social">
					<li>
						<a id="twbutton" onClick="twwindows('http://twitter.com/intent/tweet?text=<?php the_title();?>&url=<?php the_permalink(); ?>'); return false;"><span class="fa fa-twitter"></span></a>
					</li>
					<li>
						<a id="gpbutton" onclick="gpwindows('https://plus.google.com/share?url=<?php the_permalink();?>'); return false;"><span class="fa fa-google-plus"></span></a>
					</li>
					<li>
						<a id="fbbutton" onclick="fbwindows('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>'); return false;"><span class="fa fa-facebook"></span></a>
					</li>
				</ul>
			</div>
			<h1 class="post-title"><?php the_title(); ?></h1>
		</div>

		<div class="post-content">
			<?php the_content(); ?>
		</div>
		<div class="author_description">
			<div class="author_description_inner">
				<div class="image">
					<?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>  
				</div>
				<div class="author_text_holder">
					<h4><?php the_author(); ?></h4>
				</div>
			</div>
		</div>
	
	</article>
	<?php endwhile; ?>		
<?php endif ?>
	

</div>
	</div>
<?php get_footer(); ?>