<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Global_Medicamentos
 */

?>

<section class="no-results not-found">
	
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nada por aqui...', 'global-medicamentos' ); ?></h1>
	</header><!-- .page-header -->
	
	<div class="container">
		<div class="row">
				<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			
					<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'global-medicamentos' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			
				<?php elseif ( is_search() ) : ?>
					
					<div class="col-sm-12">
						<div class="result-search-box">
							<p><?php esc_html_e( 'Desculpe, mas não encontramos nada nos termos que você pesquisou. Tente uma nova pesquisa com termos e palavras diferentes.', 'global-medicamentos' ); ?></p>
							<div class="filtros-search-form">
		          	<?php get_search_form(); ?>
		        	</div>
        		</div>
        	</div>
			
				<?php else : ?>
				
					<div class="col-sm-12">
						<div class="result-search-box">
							<p><?php esc_html_e( 'Parece que não não conseguimos encontrar o que você procurava. Talvez uma busca ajude?', 'global-medicamentos' ); ?></p>
							<div class="filtros-search-form">
		          	<?php get_search_form(); ?>
		        	</div>
	        	</div>
        	</div>
			
				<?php endif; ?>
		</div>
	</div>
	
</section><!-- .no-results -->
