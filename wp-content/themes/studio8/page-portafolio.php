<?php
/*
	Template Name: Portafolio
*/
?>
<?php get_header(); ?>
<div class="main inner-content">
    <div class="full-content">
      <div class="row cf" style="background-size: auto;">
      	<div class='block-grid projects-listing columns-3 cf'>
      		<?php
      			$the_query = new WP_Query(
      				array(      		    			
    						'post_type' => 'portafolio',
    						'posts_per_page' => -1,
      		        	)
      			);
      		?>	
      		 <?php if ($the_query->have_posts()): ?>
      			<?php while($the_query->have_posts()): $the_query->the_post(); ?>
      				<?php
      					$fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
      		            $urlfullimage = $fullimage['0']; 
      				?>
      				<article class='block-item third-width third-height overlay-expand cf'>
		      			<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
		      				<div class='over'></div>
		      				<h5><?php the_title(); ?><i></i></h5>
		      				<div class='image' style='background-image: url(<?php echo $urlfullimage; ?>);'></div>
		      			</a>
		      		</article>
      				
      			<?php endwhile; ?>		
      		<?php endif ?>
      		<?php wp_reset_postdata(); ?>      		

</div>
 </div>

    
  </div>

</div>
<?php get_footer(); ?>