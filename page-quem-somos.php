<?php
/**
 * Template Name: Quem Somos
 *
 * @package Global_Medicamentos
 */
 
 //Set post thumbnail as banner's background
 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
 
 //Get info from ACF Plugin
 $texto = get_field("plano_de_medicamentos_texto");
 $imagem = get_field("plano_de_medicamentos_imagem");

get_header(); ?>

  <section class="banner" style="background-image: url(<?php echo $image[0]; ?>)">
    <!-- Empty -->
  </section>
  
  <section id="quem-somos">
    <div class="container">
      
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="quem-somos-logo-box">
            <img src="<?php bloginfo( "stylesheet_directory" ); ?>/assets/logo/grupo-exxa.jpg" alt="Logo Grupo Exxa">
          </div>
          <div class="quem-somos-info-box">
            <?php while(have_posts()) : the_post();
            
              the_content();
              
            endwhile; ?>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  
  <section id="plano-de-medicamentos">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-4">
          <div class="plano-de-medicamentos-info-box">
            <h2>Plano de Medicamentos</h2>
            <p><?php echo $texto ?></p>
          </div>
        </div>
        
        <div class="col-sm-8">
          <div class="plano-de-medicamentos-img-box">
            <img src="<?php echo $imagem['url'] ?>" alt="<?php echo $imagem['alt'] ?>">
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  <!-- Only display in desktops and larges screens -->
  <section id="how-work">
    <div class="container">
      
      <div class="row row-01">
        <div class="col-sm-6 primeiro">
          <p>Usuário percebe o sintoma</p>
        </div>
        <div class="col-sm-6 segundo">
          <p>Médico prescreve a receita</p>
        </div>
      </div>
      
      <div class="row row-02">
        <div class="col-sm-6 terceiro">
          <p>Plano Contratado</p>
        </div>
        <div class="col-sm-6 quarto">
          <p>Usuário envia a receita pelo APP ou site</p>
        </div>
      </div>
      
      <div class="row row-03">
        <div class="col-sm-6 quinto">
          <p>Dados sobre o consumo geram relatórios gerenciais para análise e gestão</p>
        </div>
        <div class="col-sm-6 sexto">
          <p>Va a farmácia com receita + documento de identificação</p>
          <p><span>* Cartão Global Medicamentos</span></p>
        </div>
      </div>
      
      <div class="row row-04">
        <div class="col-sm-6 setimo">
          <p>Usuário retira e faz uso da medicação</p>
        </div>
        <div class="col-sm-6 oitavo">
          <p>Farmácia checa a autorização do medicamento no sistema.</p>
        </div>
      </div>
      
    </div>
  </section>
  
  <!-- Same content, but addapted to mobile -->
  <section id="how-work-mobile">
    <div class="container">
      <div class="row">
        <div class="col-xs-offset-2 col-xs-8">
          
          <div class="how-work-mobile-box">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
            <p>Usuário percebe o sintoma</p>
          </div>
          <div class="how-work-mobile-box">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <p>Médico prescreve a receita</p>
          </div>
          <div class="how-work-mobile-box">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
            <p>Plano Contratado</p>
          </div>
          <div class="how-work-mobile-box">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <p>Usuário envia a receita pelo APP ou site</p>
          </div>
          <div class="how-work-mobile-box">
            <i class="fa fa-pie-chart" aria-hidden="true"></i>
            <p>Dados sobre o consumo geram relatórios gerenciais para análise e gestão</p>
          </div>
          <div class="how-work-mobile-box">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
            <p class="no-after">Va a farmácia com receita + documento de identificação</p>
            <p><span>* Cartão Global Medicamentos</span></p>
          </div>
          <div class="how-work-mobile-box">
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <p>Usuário retira e faz uso da medicação</p>
          </div>
          <div class="how-work-mobile-box">
            <i class="fa fa-check-square-o" aria-hidden="true"></i>
            <p>Farmácia checa a autorização do medicamento no sistema.</p>
          </div>
          
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
