<div class="side">

            
<div class="sidemenu">
<ul class="bnrList">
   <li><a href="http://sterfield.co.jp/launchcart"><img src="<?php bloginfo('template_url'); ?>/images/launchcart_bnr.jpg" alt="Launch Cart越境ECカート"></a></li>
</ul>
</div>
<div class="sidemenu search">
  <h3>Search</h3>
    <?php get_search_form(); ?>
</div>
                   <?php if(is_post_type_archive() || is_tax() || is_singular('info')): ?>
<?php else: ?>
  
<div class="sidemenu">
                  
                  <h3>Ranking</h3>
<ul>
<?php if (function_exists ( 'wpp_get_mostpopular' ) ) { wpp_get_mostpopular( 'thumbnail_height=56&thumbnail_width=90&limit=10&range="monthly"&stats_category=1&post_html="<li><p class=\'rank\'></p>{thumb_img}<a href=\'{url}\'>{text_title}</a></li>"' ); } ?>
</ul>
                </div>

               <?php endif; ?>

                <div class="sidemenu">

                	<h3>Category</h3>

                    <ul class="side-list">

<?php 

wp_reset_query();



if(get_post_type() == 'info'){
	$listCat = 'item';
  $children = wp_list_categories(
    array('taxonomy' => 'item','title_li' => '','hide_empty' => '','show_count' => 1)
    );
}?>
<?php echo $children; ?>
                    </ul>

                </div>
                
                

            </div>