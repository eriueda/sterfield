<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
  <input type="text" class="search blogSearch__input"  value="<?php the_search_query(); ?>" name="s" id="s" size="20"/>
  <button type="submit" class="blogSearch__button">
    <img class="blogSearch__icon" src="<?php bloginfo('template_url'); ?>/images/icon_search.svg">
  </button>
</form>
