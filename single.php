<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Global_Medicamentos
 */
 
 // Querying posts for using in "Modal" chunks
 $retirar_args = array(
   "post_type" => "complementos",
   "tax_query" => array(array(
     "taxonomy" => "categorias",
     "field" => "slug",
     "terms" => "retirar",
   )),
 );
 $retirar_query = new WP_Query($retirar_args);
 
 $solicitar_args = array(
   "post_type" => "complementos",
   "tax_query" => array(array(
     "taxonomy" => "categorias",
     "field" => "slug",
     "terms" => "solicitar",
   )),
 );
 $solicitar_query = new WP_Query($solicitar_args);
 
get_header(); ?>

	<section id="posts">
			
		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;
		
		if($retirar_query->have_posts() || $solicitar_query->have_posts()) : ?>
		
		<div class="posts-shipping-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<!-- Empty -->
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="shipping-box">
									<button type="button" class="shipping-btn" data-toggle="modal" data-target="#retirar">Retirar Medicamento</button>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="shipping-box">
									<button type="button" class="shipping-btn" data-toggle="modal" data-target="#solicitar">Solicitar Medicamento</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	
	<section id="modals">
		<!-- Modal's -->
		<?php while($retirar_query->have_posts()) : $retirar_query->the_post(); ?>
		<div class="modal fade" id="retirar" tabindex="-1" role="dialog" aria-labelledby="retirarLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="retirarLabel"><?php the_title(); ?></h4>
		      </div>
		      <div class="modal-body">
		        <?php the_content(); ?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="shipping-dismiss-btn" data-dismiss="modal">Fechar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
		
		<?php while($solicitar_query->have_posts()) : $solicitar_query->the_post(); ?>
		<div class="modal fade" id="solicitar" tabindex="-1" role="dialog" aria-labelledby="solicitarLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="solicitarLabel"><?php the_title(); ?></h4>
		      </div>
		      <div class="modal-body solicitar-modal-body">
		      	<div class="modal-body-container"><?php the_content(); ?></div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="shipping-dismiss-btn" data-dismiss="modal">Fechar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
		<!-- Modal's END-->
	</section>
	
<?php
	else :
		// Empty
	endif;
get_footer(); ?>
