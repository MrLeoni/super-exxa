<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Global_Medicamentos
 */

get_header(); ?>

  <?php 
    get_template_part( 'template-parts/content', 'slider' );
    
    if(is_user_logged_in()) :
    
    get_template_part( 'template-parts/content', 'filtros' ); ?>
  
    <section id="produtos">
      <div class="container" id ="lista-produtos">
        <?php while(have_posts()): the_post();
        // foreach($results as $post) {
        //   setup_postdata($post);
          
        //   if( $post->post_type === 'post' && $post->post_status === 'publish') {
          
          // ACF Field
          $referencia = get_field("posts_referencia"); ?>
          
          <div class="row">
            <a href="<?php the_permalink(); ?>" title="<?php get_the_title(); ?>" class="produto-link">
              <div class="col-sm-offset-0 col-sm-12 produto-border">
                
                <div class="row">
                  <div class="col-sm-2">
                    <div class="produto-img-box">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                  <div class="col-sm-10">
                    <h2 class="produto-title"><?php the_title(); ?></h2>
                    <p class="produto-ref"><?php echo $referencia ?></p>
                  </div>
                  <span class="produto-plus-sign"><i class="fa fa-plus" aria-hidden="true"></i></span>
                </div>
                
              </div>
            </a>
          </div>
          
        <?php endwhile;
          // } // End If
        // } // End foreach ?>
      </div>
    </section>
  
  <?php else : ?>
  
    <section id="not-logged">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="login-box">
              <h2>Parece que você não está logado em nosso site.</h2>
              <p><b>Se você já tem um cadastro</b>, <a href="<?php echo site_url('/wp-login.php'); ?>">faça seu login</a> para ver nossos produtos.</p>
              <hr>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="register-box">
              <h2>Ainda não é cadastrado?</h2>
              <p><a href="<?php echo wp_registration_url(); ?>">Registre-se</a> aqui.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  <?php endif; ?>
  
<?php get_footer(); 


// global $wpdb, $post;

// $letter = 'D';

// $query = "SELECT * FROM {$wpdb->posts}
//           WHERE post_name 
//           LIKE %s 
//           ORDER BY post_title DESC";
// $query = $wpdb->prepare($query, $letter.'%');

// $results = $wpdb->get_results($query);


?>
