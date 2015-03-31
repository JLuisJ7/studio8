<?php get_header(); ?>

<div class="posts inner-content">
	<?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
	<?php 
		$fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
        $urlfullimage = $fullimage['0']; 
	 ?>
	<div class="entry-content">
<div class="row cf" style="background-color: #222;background-size: auto;">
				<div class="wrap">
					<div class="shortcode_padding" style="padding-top: 72px;padding-bottom: 72px;padding-left: 0;padding-right: 0;">
						<div class="full_width " style="">
																						
								<h6 class="gray"></h6>
								<h1 class="page-title white h2" style="color:white;"><?php the_title(); ?></h1>
															
							
						</div>
						<div class="cf"></div>
					</div>
				</div>
			</div>
</div>

	<div class="main wrap">
	
		<article id="post-551" class="post-551 post type-post status-publish format-standard has-post-thumbnail hentry category-design-principles tag-inspiration">
			<div class="post-header">
				<div>
					<a href="#" rel="category tag"><?php the_category(', '); ?></a> <span class="sep">/</span> <time><?php the_time('d \d\e F, Y') ?></time> <span class="sep">/</span>
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
				<div style="text-align:center;">
					<img src="<?php echo $urlfullimage; ?>" class="attachment-full wp-post-image" alt="" no-lazy="" />
				</div>
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
		
	</div>
	<?php endwhile; ?>		
	<?php endif ?>
</div>
<?php get_footer(); ?>