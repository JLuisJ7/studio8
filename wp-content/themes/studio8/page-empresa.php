<?php
/*
	Template Name: La Empresa
*/
?>
<?php get_header(); ?>
	<div class="main">
		<div class="entry-content">
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
					<?php if (have_posts()): ?>
							<?php while(have_posts()): the_post();?>								
								<?php the_content(); ?>
							<?php endwhile; ?>
							<?php endif ?>	
				</div>
			</div>
			<div class="clear cf" style="margin-top:72px;margin-bottom:0"></div>
			<div class="row cf" style="background-size: auto;">
				<div class="wrap">
					<h6>Nuestro Equipo</h6>
					<div class="one_third " style="">
						<div class='shortcode_team'>
							<div class='team_inner'>
								<div class='team_image'>
									<img src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" data-lazy-type="image" data-lazy-src='https://dl.dropboxusercontent.com/u/1699200/Envato/Themes/Assets/team3.jpg' alt='Ronnie Marshall' class='lazy lazy-hidden square' />
									<noscript>
										<img src='https://dl.dropboxusercontent.com/u/1699200/Envato/Themes/Assets/team3.jpg' alt='Ronnie Marshall' class='square' />
									</noscript>
								</div>
								<div class='team_text'>
									<div class='team_text_inner'>
										<div class='team_title_holder'>
											<h5 class='team_name'>Ronnie Marshall</h5>
											<span>CEO &amp; Founder</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="one_third " style="">
						<div class='shortcode_team'>
							<div class='team_inner'>
								<div class='team_image'>
									<img src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" data-lazy-type="image" data-lazy-src='https://dl.dropboxusercontent.com/u/1699200/Envato/Themes/Assets/team3.jpg' alt='Ronnie Marshall' class='lazy lazy-hidden square' />
									<noscript>
										<img src='https://dl.dropboxusercontent.com/u/1699200/Envato/Themes/Assets/team3.jpg' alt='Ronnie Marshall' class='square' />
									</noscript>
								</div>
								<div class='team_text'>
									<div class='team_text_inner'>
										<div class='team_title_holder'>
											<h5 class='team_name'>Ronnie Marshall</h5>
											<span>CEO &amp; Founder</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="clear cf" style="margin-top:72px;margin-bottom:0"></div>
			<div class="row cf" style="background-size: auto;padding: 0;">
				<div class="wrap">
					<div class="carousel-images no-lazy">
						<?php
							$args = array(
								'post_type' => 'page',
								'posts_per_page' => 1,
								'ID' => 82
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<h6 class="title" style="color: #000;"><?php the_title(); ?></h6>
									<div class="carousel-owl-images owl-carousel">

										<div>

											<img class="lazy lazy-hidden" alt="Mashable" src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" data-lazy-type="image" data-lazy-src="https://dl.dropboxusercontent.com/u/1699200/Envato/Themes/Studio%208/Images/Logos/mashable.svg">
										</div>							
									</div>
									<?php endwhile; ?>
								<?php endif ?>
					</div>
				</div>
			</div>
			<div class="clear cf" style="margin-top:48px;margin-bottom:0"></div>
		</div>
	</div>

<?php get_footer(); ?>