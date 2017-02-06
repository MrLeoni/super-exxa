<?php
/**
 * Template Name: Contato
 *
 * @package Global_Medicamentos
 */
 
 //Set post thumbnail as banner's background
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

get_header(); ?>

  <section class="banner" style="background-image: url(<?php echo $image[0]; ?>)">
    <!-- Empty -->
  </section>
  
  <section id="contato">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-6">
          <div class="contato-form-box">
            
            <?php while(have_posts()) : the_post();
            
              the_content();
              
            endwhile; ?>
            
          </div>
        </div>
        <div class="col-sm-6">
          <div class="contato-endereco-info-box">
            <h2>ENDEREÇO</h2>
            <br>
            <p>Av. Francisco Glicério, 1390</p>
            <p>Campinas - SP</p>
            <p>CEP: 13012-000</p>
          </div>
          <div class="contato-map-box">
            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Av.%20Francisco%20Glic%C3%A9rio%2C%201390&key=AIzaSyAO-DjSOpIBOAlI3Er39Ysc8bFVdKdrmMw" allowfullscreen></iframe>
          </div>
        </div>
        
      </div>
    </div>
  </section>

<?php get_footer(); ?>
