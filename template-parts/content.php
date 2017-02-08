<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Global_Medicamentos
 */
 
 // Get ACF field
 // Headers
 $referencia = get_field("posts_referencia");
 $principio = get_field("principio_ativo");
 $texto_padrao = get_field("texto_padrao");
 
 //Details
 $classe = get_field("classe_terapeutica");
 $tipo = get_field("tipo_produto");
 $tipo_bg = get_field("tipo_color");
 
 //Receita E Bula
 $receita = get_field("receita_medica");
 $bula = get_field("bula")
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrapper">
		<div class="container">
				
			<header class="entry-header">
				<div class="row">
					<div class="col-md-12">
						<h1><?php the_title(); ?></h1>
						<p><?php echo $referencia ?></p>
					</div>
				</div>
			</header><!-- .entry-header -->
		
			<div class="entry-content">
				<div class="row">
					
					<div class="col-sm-6 col-sm-offset-0 col-xs-offset-2 col-xs-8">
						<div class="post-img-box">
							<?php the_post_thumbnail(); ?>
						</div>
						<a class="post-back hidden-xs" href="<?php echo esc_html(home_url('/produtos')); ?>"><i class="fa fa-arrow-left"></i>Voltar</a>
					</div>
					
					<div class="col-sm-6 col-xs-12">
						<div class="post-content-box">
							<p><b>Princípio Ativo:</b> <?php echo $principio; ?></p>
							<p><?php echo $texto_padrao; ?></p>
							<?php the_content(); ?>
						</div>
						<div class="post-info-box clearfix">
							<p class="full classe"><?php echo $classe; ?></p>
							<p class="full" style="background-color: <?php echo $tipo_bg; ?>"><?php echo $tipo; ?></p>
							<p><i class="fa fa-file-text-o" aria-hidden="true"></i><?php echo $receita; ?></p>
							<a href="<?php echo $bula; ?>" title="Clique para fazer o download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download da bula</a>
							<p class="modal-trigger" data-toggle="modal" data-target="#retirar">Retirar Medicamento</p>
							<p class="modal-trigger" data-toggle="modal" data-target="#solicitar">Solicitar Medicamento</p>
						</div>
					</div>
					
				</div>
			</div><!-- .entry-content -->
		
		</div><!-- .container -->
	</div>
</article><!-- #post-## -->
