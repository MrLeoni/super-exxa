 <?php
 /**
 * Template for showing "Slider" section
 *
 * @package Global_Medicamentos
 */
 
 // Get posts on "Banner Produtos" category only
 $bannerPostsArgs = array(
   "post_type" => "complementos",
   "tax_query" => array(array(
     "taxonomy" => "categorias",
     "field" => "slug",
     "terms" => "banner"
   )),
 );
 
 // Creating Query of posts
 $bannerPosts     = new WP_Query($bannerPostsArgs);
 
 ?>

<section id="produtos-banner">
 <div class="produtos-banner-box">
   <ul class="bannerSlider">
     
     <?php while($bannerPosts->have_posts()) : $bannerPosts->the_post(); ?>
     
       <li>
         <div class="slider-wrapper">
           
           <div class="slider-img-box">
             <?php the_post_thumbnail(); ?>
           </div>
           <div class="slider-info-box">
             <?php the_content(); ?>
           </div>
           
         </div><!-- /.slider-wrapper -->
       </li>
     
     <?php endwhile; wp_reset_postdata(); ?>
   </ul>
 </div>
</section>