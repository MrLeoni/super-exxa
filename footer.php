<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Global_Medicamentos
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="custom-footer site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-logo-box">
						<img src="<?php bloginfo( "stylesheet_directory" ); ?>/assets/logo/logo-superexxa-footer.png" alt="Superexxa Logo">
					</div>
				</div>
				<div class="col-md-12">
					<p class="footer-contact">Avenida Francisco Glicério, 1390 | Centro - Campinas SP | 19 3233.2890</p>
				</div>
			</div>
		</div>
		<div class="copy">
			<p>Copyright &copy; <span id="js-date"></span> Global Medicamentos<a href="http://www.agenciadelucca.com.br" target="_blank" title="Agência Delucca"><img src="<?php bloginfo( "stylesheet_directory" ); ?>/assets/logo/logo-delucca.png" alt="Agência Delucca"></a></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
