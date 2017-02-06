<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Global_Medicamentos
 */

get_header(); ?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( '404', 'global-medicamentos' ); ?></h1>
		<p>Não encontramos essa página :(</p>
	</header><!-- .page-header -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="result-search-box">
					<p><?php esc_html_e( 'A página que você tentou acessar não existe. Navegue pelas páginas do site no menu acima ou tente uma busca!', 'global-medicamentos' ); ?></p>
					<div class="filtros-search-form">
	        	<?php get_search_form(); ?>
	      	</div>
	  		</div>
	  	</div>
		</div>
	</div><!-- .container -->
</section><!-- .error-404 -->

<?php get_footer(); ?>