<?php get_header(); ?>
  <div class="loader">
    <img src="<?php bloginfo('template_url'); ?>/images/loading.svg" />
  </div>  
  <a href="#" id="arrow_right"><i class="fa fa-long-arrow-right"></i></a>
  <a href="#" id="arrow_left"><i class="fa fa-long-arrow-left"></i></a>
  <div id="maximage">
    <div>
      <img src="<?php bloginfo('template_url'); ?>/images/img-video.png">
      <video id="video" autoplay loop poster="<?php bloginfo('template_url'); ?>/images/img-video.png">
        <source src="<?php bloginfo('template_url'); ?>/video/video.mp4" type="video/mp4">
      </video>
      <div class="in-slide-content fade-enable">
        <section class="intro">
          <h1>Motion</h1>
          <h2>Business Lifestyle</h2>
          <a href="#" class="readmore">Case Study</a>
        </section>
      </div>
      <div class="gradient"></div>
      <div id="skip">
        <a href="#inner-content"><i class="fa fa-3x fa-angle-down pulsing"></i></a>
      </div>
    </div>
    <div>
      <img src="<?php bloginfo('template_url'); ?>/images/hamburger.jpg">
      <div class="in-slide-content fade-enable">
        <section class="intro">
          <h1>Branding Identity</h1>
          <h2>Le Roi du Burger</h2>
          <a href="#" class="readmore">Case Study</a>
        </section>
      </div>
      <div class="gradient"></div>
      <div id="skip">
        <a href="#inner-content"><i class="fa fa-3x fa-angle-down pulsing"></i></a>
      </div>
    </div>
    <div>
      <img src="<?php bloginfo('template_url'); ?>/images/night.jpeg">
      <div class="in-slide-content fade-enable">
        <section class="intro">
          <h1>Print</h1>
          <h2>New York</h2>
          <a href="#" class="readmore">Case Study</a>
        </section>
      </div>
      <div class="gradient"></div>
      <div id="skip">
        <a href="#inner-content"><i class="fa fa-3x fa-angle-down pulsing"></i></a>
      </div>
    </div>
    <div>
      <img src="<?php bloginfo('template_url'); ?>/images/featured.jpg">
      <div class="in-slide-content fade-enable">
        <section class="intro">
          <h1>Interactive Design</h1>
          <h2>Howard Taylor</h2>
          <a href="#" class="readmore">Case Study</a>
        </section>
      </div>
      <div class="gradient"></div>
      <div id="skip">
        <a href="#inner-content"><i class="fa fa-3x fa-angle-down pulsing"></i></a>
      </div>
    </div>      
  </div>
  <div class="main" id="inner-content">    
    <div class="row cf" style="background-color: transparent;background-size: auto;padding: 72px 0;">
      <div class="wrap"> 
        <div class="shortcode_text_block" style="background: transparent;width:70%;">
          <h3 class="title" style="">Finest brands &amp; websites</h3>
          <p class="lead" style="color:;">A super flexible premium WordPress theme for creative professionals, agencies, content creators &amp; businesses.</p>
        </div>
      </div>
    </div>
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
              <article class='block-item third-width third-height overlay-expand cf cat_9' >
                <a href='<?php the_permalink();?>' rel='bookmark' target='_self' title='<?php the_title(); ?>'>
                  <div class='over'></div>
                  <h5><?php the_title(); ?></h5>
                  <div class='image' style='background-image: url(<?php echo $urlfullimage; ?>);'></div>
                </a>
              </article>
              
            <?php endwhile; ?>    
          <?php endif ?>
          <?php wp_reset_postdata(); ?>
        
      </div>
    </div>
    <div class="row cf" style="background-color: transparent;background-size: auto;text-align: center;padding: 48px 0;">
      <div class="wrap"> 
        <div class="shortcode_text_block" style="background: transparent;width:70%;">
          <h3 class="title" style="">Let's work together</h3>
          <p class="lead" style="color:;">Ocean burst by, extra feedback goodness, quality plush squeezable terrific easily.
            <div class="clear cf" style="margin-top:24px;margin-bottom:0"></div>
            <a href="<?php echo get_option('home'); ?>/contacto" target="_self" class="btn medium center black" style="">Contactenos<i class="fa fa-fx fa-envelope" style=""></i></a>
          </p>
        </div>
      </div>
    </div>
    <div class="row cf" style="background-size: auto;">
      <div class='block-grid projects-listing columns-4 cf'>
        <div class="wrap"> 
          <div class="shortcode_text_block" style="background: transparent;width:70%;">
            <h3 class="title" style="">Ultimas Entradas</h3>
          </div>
        </div>
        <?php
           $sticky = get_option( 'sticky_posts' );
            $the_query = new WP_Query(
              array(                    
                'post_type' => 'post',
                'posts_per_page' => 4,
                'post__not_in' => $sticky,
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
              <article class='block-item quarter-width quarter-height overlay-expand cf cat_9' >
                <a href='<?php the_permalink();?>' rel='bookmark' target='_self' title='<?php the_title(); ?>'>
                  <div class='over'></div>
                  <h5 style=" opacity: 1;top: 25%;"><i><?php the_title(); ?></i></h5>
                  <div class='image' style='background-image: url();'></div>
                </a>

              </article>
              
            <?php endwhile; ?>    
          <?php endif ?>
          <?php wp_reset_postdata(); ?>
        
      </div>
    </div>
  </div>

<?php get_footer(); ?>