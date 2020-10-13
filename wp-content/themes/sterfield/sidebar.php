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



if((get_post_type() == 'info') ||  is_tax() ){
	$listCat = 'item';
  $children = wp_list_categories(
    array('taxonomy' => 'item','title_li' => '','hide_empty' => '','show_count' => 1)
    );
}else if( is_single() || is_archive() ){

$listCat = 'category';
$cat = get_category(get_query_var('cat'));
$id = $cat -> category_parent ? $cat -> category_parent : $cat -> cat_ID;
$children = wp_list_categories('echo=0&show_count=1&title_li=&child_of=' . $id);
}
$args = array(
	'show_option_all'    => '',
	'orderby'            => 'term_group',
	'order'              => 'DESC',
	'style'              => 'list',
	'show_count'         => 1,
	'child_of' => 0,
	'hide_empty'         => 1,
	'exclude'            => '1,6,7',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => true,
	'title_li'           => '',
	'current_category'   => 0,
	'taxonomy'           => $listCat ); 
?>
<?php echo $children; ?>
                    </ul>

                </div>
                
                <div class="sidemenu">

                	<h3>Archive</h3>

                    <ul class="side-list archiveYear">
<!-- 
                    	<?php wp_get_archives('type=monthly'); ?>
 -->
                     <?php 
//1. 年を抽出して配列に格納
$archives_year = strip_tags(wp_get_archives('type=yearly&show_count=0&format=custom&echo=0')); //wp_get_archivesに対してタグを除去して年数のみ抽出。
$archives_year_array = split("\n",$archives_year); //年数ごとに配列$archives_year_arrayに格納
array_pop($archives_year_array);//配列内の最後に空の配列ができてるので削除。
//$archives_year_array = array_merge(array_diff($archives_year_array, array(""))); で空の配列削除してもOKだった。

//2. アーカイブ一覧を取得して配列に格納
$archives = wp_get_archives('type=monthly&show_post_count=1&use_desc_for_title=0&echo=0'); //月別アーカイブを取得。
$archives_array = split("\n",$archives); //同様に改行ごとに配列に格納。

foreach ($archives_year_array as $year_value){ //1で抽出した年数分繰り返し
  echo "<h4>".ltrim($year_value)."</h4>\n"; //<h4>で年を表示
  echo "<ul>\n";
  
  foreach ( $archives_array as $archives_value) { //月別アーカイブ数分繰り返し
    
    if ( intval(strip_tags($archives_value)) == intval($year_value) ) { //1で取得した年と、2の各月別アーカイブの文字列を比較
      echo  str_replace(intval($year_value)."年","",ltrim($archives_value))."\n";//2の月別アーカイブの各行のhtmlからYYYY年部分を除去して表示。
      array_shift($archives_array); //表示した配列を削除。なんとなくこのほうが次のforeachまわるとき処理早くなるかなと思って。
    }
    
  }
  echo "</ul>\n"; 
}

?>

                    </ul>

                </div>

                

            </div>