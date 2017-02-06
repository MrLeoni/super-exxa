<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Global_Medicamentos
 */
 
 // Get ACF field
 $referencia = get_field("posts_referencia");
 $receita = get_field("posts_receita");
 $bula_link = get_field("bula_link");
 $tipo = get_field("post_tipo");
 
 // Get category slug, then use this as a class in 'post-category-box'
 $post_category = get_the_category();
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrapper">
		<div class="container">
				
			<header class="entry-header">
				<div class="row">
					<div class="col-md-12">
						<h1><?php the_title(); ?></h1>
						<p>Referência: <?php echo $referencia ?></p>
					</div>
				</div>
			</header><!-- .entry-header -->
		
			<div class="entry-content">
				<div class="row">
					<div class="col-sm-12 col-xs-2"><!-- empty --></div>
					<div class="col-sm-6 col-xs-8">
						<div class="post-img-box">
							<?php the_post_thumbnail(); ?>
						</div>
						<a class="post-back hidden-xs" href="<?php echo get_page_link(6); ?>"><i class="ion-ios-arrow-thin-left"></i>Voltar</a>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="post-content-box">
							<?php the_content(); ?>
						</div>
						<div class="post-info-box">
							<div class="post-category-box <?php echo $tipo ?>">
								<p><?php echo $tipo ?></p>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="receita-box">
										<p><i class="fa fa-file-text-o" aria-hidden="true"></i>Precisa de receita: <span class="<?php echo $receita ?>"><?php echo $receita ?></span></p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="bula-box">
										<a href="<?php echo $bula_link ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Download da Bula</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .entry-content -->
		
		</div><!-- .container -->
	</div>
</article><!-- #post-## -->
