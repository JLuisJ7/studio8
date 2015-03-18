<?php
/*
	Template Name:Blog 
*/
?>
<?php get_header(); ?>

<div class="main inner-content cf">
	<div class="posts featured cf">
		
<?php if (have_posts()) : ?>
<?php //if (!is_paged()): ?>
<?php $sticky = get_option( 'sticky_posts' ); ?>
<?php if ( isset( $sticky[0] ) ) { 
		$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'post__in'  => $sticky,
		'ignore_sticky_posts' => 1);
$featured_query = new WP_query( $args );
while ($featured_query->have_posts() ) :
$featured_query->the_post();
$urlImagenDes = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
<article id="" class="post hentry  full-width full-height">
					<div class='over'></div>
					<div class="post-image">

						<img width="1280" height="1280" src="<?php echo $urlImagenDes; ?>" class="attachment-thumb-1280 wp-post-image" alt=""  />
						<div class="post-header">
							<div>
								<a href="#" rel="category tag"><?php the_category(', '); ?></a> <span class="sep">/</span> <time><?php the_time('d \d\e F, Y') ?></time>
							</div>
							<h3 class="post-title">
								<a href="<?php the_permalink();?>" target="_self" title=""><?php the_title(); ?></a>
							</h3>
						</div>
					</div>
</article>
<?php
endwhile;
wp_reset_query();
}
?>
			
<?php //endif;//paged ?>
</div>
<div class="wrap">
	<div class="posts normal cf">	
<?php 
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$sticky = get_option( 'sticky_posts' );
$args = array(
'post_type' => 'post',
'ignore_sticky_posts' => 1,
'post__not_in' => $sticky,
'paged' => $paged,
);
query_posts( $args );

while ( have_posts() ) : the_post();
$fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            					$urlfullimage = $fullimage['0'];  ?>
<article id="post-188" class="post-188 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-negative-space cf" style="background: url('<?php echo $urlfullimage;  ?>') right no-repeat;background-size:cover;">
				<div class="post-excerpt m-all t-2of3 d-3of7">
					<div class="post-header">
						<div>
							<a href="#" rel="category tag"><?php the_category(', '); ?></a> <span class="sep">/</span> <time><?php the_time('d \d\e F, Y') ?></time>
						</div>
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
					</div>
					<div class="post-content">
						<p><?php the_excerpt(); ?></p>
						<div class="read-more">
							<a class="link" href="<?php the_permalink();?>">Leer más</a>
						</div>
					</div>
				</div>
</article>	
<?php 
endwhile;
?>

			

     
    <!-- end of the loop -->
	<nav class="navigation paging-navigation" role="paginacion">		
		<div class="pagination loop-pagination">
			<?php get_template_part('pagination'); ?>
		</div>
	</nav><!--/ .navigation -->								
<?php else : ?>
<h3 class="archive-title">Disculpe, no hay art&iacute;culos en la categor&iacute;a <i class="icon-leaf"></i><strong></strong>.</h3>
<?php endif; ?>						
				

			
		</div>

	</div>


<?php get_footer(); ?>