<?php
/**
 * Template part for displaying medicine filters.
 */
 
 // Get Category as filters
 
 // Excluding the following categories
 $sem_categoria_category = get_cat_ID("Sem Categoria");
 
 // Query categories
 $post_cats = wp_get_post_categories($post->ID);
 $cats_filtros_args  = array(
   
     "exclude"          => "$sem_categoria_category",
     "hide_empty"       => 0
   
   );
   
 $cats_filtros       = get_categories($cats_filtros_args);

?>

<?php if(is_search()):
// If is search page, show only the search form?>
<section id="filtros">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filtros-title">
           <h2>Deseja realizar uma nova pesquisa?</h2>
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
           <h2>Utilize os filtros abaixo para encontrar os medicamentos.</h2>
        </div>
        <div class="filtros-search-form">
           <?php get_search_form(); ?>
        </div>
        <div class="filtros-box clearfix">
        
           <?php foreach($cats_filtros as $cat_filtro) : 
           // Get category Link
           $cat_filtro_link = get_category_link( $cat_filtro->cat_ID );
           ?>
           
            <div id="<?php echo $cat_filtro->slug; ?>" class="filtro-item
            <?php
              if(is_archive())
                { if(in_array( $cat_filtro->term_id, $post_cats))
                  { echo ' active'; }
                  else 
                  { echo ''; }}
                else 
                { /* Empty */ }
               
            ?>">
               <a href="<?php echo esc_url( $cat_filtro_link ); ?>" ><?php echo $cat_filtro->name; ?></a>
             </div>
           
           <?php endforeach; ?>
        
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
