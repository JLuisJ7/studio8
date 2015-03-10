<?php
/*
	Template Name: Servicios
*/
?>
<?php get_header(); ?>
<div class="main inner-content">
		<div class="full-content">
			<div class="row cf" style="background-color: #222;background-size: auto;">
				<div class="wrap">
					<div class="shortcode_padding" style="padding-top: 72px;padding-bottom: 72px;padding-left: 0;padding-right: 0;">
						<div class="full_width " style="">
							<?php if (have_posts()): ?>
							<?php while(have_posts()): the_post();?>								
								<h6 class="gray"><?php the_title(); ?></h6>
								<h2 class="page-title white"><?php the_excerpt(); ?></h2>
							<?php endwhile; ?>
							<?php endif ?>	
							
						</div>
						<div class="cf"></div>
					</div>
				</div>
			</div>
			<div class="row cf" style="background-size: auto;">
				<div class="wrap">
					<div class="shortcode_padding" style="padding-top: 72px;padding-bottom: 72px;padding-left: 0;padding-right: 0;">
						
						<?php if (have_posts()): ?>
							<?php while(have_posts()): the_post();?>
								<?php the_content(); ?>
							<?php endwhile; ?>
						<?php endif ?>						
						<div class="cf"></div>
					</div>
				</div>
			</div>

			<div class="row cf" style="background: url('<?php bloginfo('template_url'); ?>/images/dark-mountain.jpg') no-repeat 50% 0 fixed;background-color: #a2a2a2;background-size: cover;">
				<div class="wrap">
					<div class="shortcode_padding" style="padding-top: 4%;padding-bottom: 8%;padding-left: 0;padding-right: 0;">
						<div class="full_width " style="">
						<?php
							$args = array(
								'post_type' => 'page',
								'page_id' => 74,
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<div class="shortcode_text_block" style="background: transparent;width:70%;text-align: center;">
											<h1 class="title" style="color: #fff;"><?php the_title(); ?></h1>
											<p class="lead" style="color:#fff;"><?php the_excerpt(); ?></p>
										</div>
									<?php the_content(); ?>
									<?php endwhile; ?>
								<?php endif ?>	
							
							
							<div class="cf"></div>
						</div>
						<div class="cf"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>