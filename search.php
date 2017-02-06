<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Global_Medicamentos
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Resultados para: %s', 'global-medicamentos' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->
	
	<?php
		if(is_user_logged_in()) :
  ?>
  
  <section id="search">
    <div class="container">
        
      <?php while(have_posts()) : the_post(); 
        $referencia = get_field("posts_referencia"); ?>
        <div class="row">
          <div class="col-sm-offset-0 col-sm-12 col-xs-offset-2 col-xs-8 produto-border">
            <div class="row">
              <div class="col-sm-2">
                <div class="produto-img-box">
                  <?php the_post_thumbnail(); ?>
                </div>
              </div>
              <div class="col-sm-10">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="produto-ref"><?php echo $referencia ?></p>
              </div>
              <a class="produto-plus-sign" href="<?php the_permalink(); ?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <div class="row">
        <div class="col-sm-12">
          <div class="pagination-box clearfix">
            <div class="nav-previous alignright"><?php next_posts_link( 'Próxima <i class="ion-ios-arrow-right"></i>' ); ?></div>
            <div class="nav-next alignleft"><?php previous_posts_link( '<i class="ion-ios-arrow-left"></i> Anterior' ); ?></div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <?php
    get_template_part( 'template-parts/content', 'filtros' );
    else : 
  ?>
  
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
		
			<?php else :
			
			// If nothing was found, get content-none.php
			get_template_part( 'template-parts/content', 'none' ); ?>
			
			</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>
