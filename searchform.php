<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <button type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" ><i class="fa fa-search"></i></button>
  <input type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'nome do produto ou referência ou princípio ativo', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" >
</form>