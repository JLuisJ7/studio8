<?php get_header(); ?>
	<div class="main inner-content">
		<div class="top-header">		
			<div class="wrap">
				<div class="page-header">
				<?php 
					global $wp_query;
					$total_results = $wp_query->found_posts;
				?>
					<h6 class="text-color hard-end"><?php echo $total_results ?> resultado(s) para</h6>
					<h2 class="page-title hard-start"><?php echo get_search_query(); ?></h2>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="wrap inner cf">
				<div id="content" class="m-all t-all d-all cf">
				<?php if (have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
					<?php		           
			            $fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	            		$urlfullimage = $fullimage['0'];
					?>
						<article id="post-290" class="post-290 projects type-projects status-publish has-post-thumbnail hentry cf">
							<div class="entry-header-search">
									<span class="type">projects</span> <h3 class="title">
									<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>					
							</div>
							<div class="post-content">
								<div class="post-thumbnail">
									<img width="150" height="150" src="<?php echo $urlfullimage; ?>" class="no-lazy wp-post-image" alt="" />
								</div>
								<p><?php the_excerpt();?></p>
							</div>
						</article>
					<?php endwhile; ?>						
				 	<div class="navigation">
						<?php get_template_part('pagination'); ?>
					</div>		
  				<?php endif; ?>				
				</div>

		</div>

	</section>

</div>

<?php get_footer(); ?>