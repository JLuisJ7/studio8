<?php
/*
	Template Name:Blog 
*/
?>
<?php get_header(); ?>

<?php 
$id = $_GET['id'];
global $post;  
?>
<div class="main inner-content cf">
	<div class="posts featured cf">
		<?php
			$the_query= new WP_Query(
				array(
		    			'order' => 'DESC',
		        		'posts_per_page' => 3,
		        		'post__in'  => get_option( 'sticky_posts' ),
		 		       	'ignore_sticky_posts' => 1
		        	)
			);
		?>	
		 <?php if ($the_query->have_posts()): ?>
			<?php while($the_query->have_posts()): $the_query->the_post(); ?>
				<?php		           
		            $fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            		$urlfullimage = $fullimage['0'];
				?>
				
				<article id="" class="post hentry  full-width full-height">
					<div class='over'></div>
					<div class="post-image">

						<img width="1280" height="1280" src="<?php echo $urlfullimage; ?>" class="attachment-thumb-1280 wp-post-image" alt=""  />
						<div class="post-header">
							<div>
								<a href="#" rel="category tag">Categoria</a> <span class="sep">/</span> <time><?php the_time('d \d\e F, Y') ?></time>
							</div>
							<h3 class="post-title">
								<a href="<?php the_permalink();?>" target="_self" title=""><?php the_title(); ?></a>
							</h3>
						</div>
					</div>
				</article>
			<?php endwhile; ?>		
		<?php endif ?>
		<?php wp_reset_postdata(); ?>		
	</div>
	<div class="wrap">
		<div class="posts normal cf">
			<?php 

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  
  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
      'paged' => $paged,
      'ignore_sticky_posts' => 1
    );

  $custom_query = new WP_Query( $custom_args ); ?>
 
  <?php if ( $custom_query->have_posts() ) : ?>
   <?php 
   global $post;
    
            					?>
    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
    <?php 
$fullimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            					$urlfullimage = $fullimage['0'];  
     ?>
<article id="post-188" class="post-188 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-negative-space cf" style="background: url('<?php echo $urlfullimage;  ?>') no-repeat 0 0;">
				<div class="post-excerpt m-all t-2of3 d-3of7">
					<div class="post-header">
						<div>
							<a href="#" rel="category tag">Categoria</a> <span class="sep">/</span> <time><?php the_time('d \d\e F, Y') ?></time>
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

     <?php endwhile; ?>
    <!-- end of the loop -->
	<nav class="navigation paging-navigation" role="paginacion">		
		<div class="pagination loop-pagination">
			 <!-- pagination here -->
    <?php
      if (function_exists(custom_pagination)) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>
 
  <?php wp_reset_postdata(); ?>
 
  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched.' ); ?></p>
  <?php endif; ?>
	</nav><!--/ .navigation -->								
						
				</div>

			
		</div>

	</div>


<?php get_footer(); ?>