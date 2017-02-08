<?php
/**
 * Template part for displaying medicine filters.
 */

?>

<?php if(is_search()):
// If is search page, show only the search form?>
<section id="filtros">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filtros-title">
           <h1>Deseja realizar uma nova pesquisa?</h1>
        </div>
        <div class="filtros-search-form">
           <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php else: 
// Else, show the categories?>
<section id="filtros">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filtros-title">
           <h1>Utilize os filtros abaixo para encontrar os medicamentos.</h1>
        </div>
        <div class="filtros-search-form">
           <?php get_search_form(); ?>
        </div>
        <div class="filtros-alphabet">
          <ul id="js-generate-list" class="alphabet-bxslider">
            <?php // List generated in file /js/main.js alphabetGenerate(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
