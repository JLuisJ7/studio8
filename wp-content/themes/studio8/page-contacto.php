<?php
/*
	Template Name: Contacto 
*/
?>

<?php get_header() ?>
<div class="inner-content" style="  margin-top: 12px; padding-top: 30px;">

    <div class="full-content">

      <div class="row cf" style="background-color: #fff;background-size: auto;"><div class="wrap"> 
<div class="shortcode_text_block" style="background: transparent;width:70%;text-align: center;"><p class="subtitle" style="color: #8c8c8c;"><?php the_title(); ?></p><div class="sep" style="border-color: #d7d7d7;"></div><h3 class="title" style="">Reach us for any questions you might have</h3><p class="lead" style="color:;">Fixie american apparel tofu, whatever retro seitan tattooed viral raw denim chambray keffiyeh organic high life. Mlkshk cosby sweater high life, master cleanse biodiesel marfa fixie four loko gluten-free keffiyeh chambray american apparel cred.</p></div>
 </div></div>
<div class="row cf" style="background-color: #fff;background-size: auto;padding: 72px 0;"><div class="wrap"> 
<div class="one_half " style=""> 
<?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>		
<?php endif ?>
 </div>
<div class="one_half last " style=""> 


            <iframe id="map-canvas" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d31212.27901427288!2d-77.0236395!3d-12.0754905!3m2!1i1024!2i768!4f13.1!2m1!1sClinica+Internacional+(sede+San+Borja)!5e0!3m2!1ses-419!2spe!4v1425598897186"  frameborder="0" style="height: 400px;width:100%; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"></iframe>

           
<h3>Contáctenos</h3>
<p>129 rue de la Commune<br />
Montreal, Quebec<br />
H3K 1B8</p>
<p><i class="fa fa-phone"></i>&nbsp; (514) 888-8888<br />
<i class="fa fa-fax"></i>&nbsp; (514) 888-9999</p>
<p><i class="fa fa-paper-plane-o"></i>&nbsp; <a href="#" class="link">hello@yourcompany.com</a></p>
 </div><div class="cf"></div>
 </div></div>

    
  </div>

</div>
<?php get_footer(); ?>