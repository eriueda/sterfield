<?php
	//アイキャッチ画像追加
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(228, 9999);

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	//カスタムヘッダー追加
	add_theme_support('custom-header');

	//カスタム背景追加
	add_theme_support('custom-background');

	//カスタムフィールド追加
	add_post_meta($post_id, $meta_key, $meta_value, $unique);

	/*
	画像を追加する場合
	<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
	*/
	// サイドバーウィジェット
register_sidebar( array(
     'name' => __( 'Side Widget' ),
     'id' => 'side-widget',
     'before_widget' => '<li class="widget-container">',
     'after_widget' => '</li>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );


//ブログ記事や固定ページでの画像のリンクを置換する
function replaceImagePath($arg) {
	$content = str_replace('"images/', '"' . get_bloginfo('template_url') . '/images/', $arg);
	return $content;
}

add_action('the_content', 'replaceImagePath');

//ブログ記事でサイトURLを使う[url]
function homeUrl() {
	return get_bloginfo('url');
}
add_shortcode('url', 'homeUrl');

//inputの自動改行を阻止する
function XXXInput($x) {
	return str_replace('<input', '<xxxinput', $x);
}
function deXXXInput($x) {
	return str_replace('<xxxinput', '<input', $x);
}
add_filter( 'the_content', 'XXXInput', 5);
add_filter( 'the_content', 'deXXXInput', 999);

function my_query($query){
  global $wpdb;
  $query = preg_replace(
    '@WHERE@',
    "INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
     INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
     WHERE ",
     $query
  );
  return $query . " AND $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id = １";

}



//メディア表示をアップロードしたユーザーのみに限定する
function display_only_self_uploaded_medias( $wp_query ) {
    global $userdata;
    if ( is_admin() && $wp_query->is_main_query() && $wp_query->get( 'post_type' ) == 'attachment' ) {
        $wp_query->set( 'author', $userdata->ID );
    }
}
add_action( 'pre_get_posts', 'display_only_self_uploaded_medias' );

// 検索結果に投稿記事のみを表示させる

function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts','SearchFilter');

function icon_img() {
		 if ( in_category(15) || post_is_in_descendant_category(15) ) {
  $icon ="ec";
 }elseif ( in_category(71) || post_is_in_descendant_category(71) ) {
  $icon = "seisaku";
 }elseif ( in_category(72) || post_is_in_descendant_category(72) ) {
  $icon = "kaihatsu";
 }elseif ( in_category(73) || post_is_in_descendant_category(73) ) {
  $icon = "global";
 }elseif ( in_category(51) || post_is_in_descendant_category(51) ) {
  $icon = "other";
 }else{
 }
	}
add_action('icon', 'icon_img');

	//ファビコン追加
	function blog_favicon() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_bloginfo('template_url').'/images/favicon.ico" />'."\n";
}

add_action('wp_head', 'blog_favicon');

if ( function_exists( 'add_custom_background' ) )
{ add_custom_background(); }

/* カスタム投稿タイプ */

add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 'info',  /* post-type */
    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'News一覧' )
      ),
      'public' => true,
      'menu_position' => 5,
'has_archive' => 'info',
'rewrite' => true,
'supports' => array('title','editor','thumbnail','custom-fields','excerpt')
      /* ここまで */
    )
  );

/* ここから */

  register_taxonomy(
    'item', /* タクソノミーの名前 */
    'info', /* books投稿で設定する */
    array(
      'hierarchical' => true, /* 親子関係が必要なければ false */
      'update_count_callback' => '_update_post_term_count',
      'label' => 'Newsのカテゴリー',
      'singular_label' => 'Newsのカテゴリー',
      'public' => true,
	'rewrite' => true,
     'show_ui' => true
    )

  );

/* ここまでを追加 */

}
	/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */

function post_is_in_descendant_category( $cats, $_post = null )
{
 foreach ( (array) $cats as $cat ) {
  // get_term_children() accepts integer ID only
  $descendants = get_term_children( (int) $cat, 'category');
  if ( $descendants && in_category( $descendants, $_post ) )
   return true;
 }
 return false;
}
get_role('author')->add_cap('manage_categories');

//ショートコードの追加
function lc_link_shortcode ($atts) {
  return "<div class=\"lcLink js-loadLcLink\" data-lclink=\"$atts[url]\"><a href=\"$atts[url]\" target=\"_blank\">記事へのリンク</a></div>";
}
add_shortcode('lc-link', 'lc_link_shortcode');


/**
 * ランキング一覧を生成
 */
function my_custom_popular_posts_html_list( $mostpopular, $instance ) {
  $rank = 0;
  foreach( $mostpopular as $p ) {
    $rank++;
    $thumb_id = get_post_thumbnail_id( $p->id );
    $img = get_template_directory_uri() . '/wp-content/themes/sterfield/images/nothing.jpg';
    if(has_post_thumbnail($p->id)) {
      $img = wp_get_attachment_image_src( $thumb_id, 'medium' );
			$img = $img[0];
    }
    $title = mb_substr($p->title, 0, 36);
    if(mb_strlen($title) > 36) {
      $title .= ' …';
    }
    $title = esc_attr($p->title);
    $link = get_the_permalink($p->id);

    $output .= <<<EOM
      <li class="blogSidenavi__item">
        <a href="$link">
          <figure class="blogSidenavi__item__figure"><img src="$img" alt="$title">
            <span class="number">$rank</span>
          </figure>
          <h3 class="blogSidenavi__item__title">$title</h3>
        </a>
      </li>
EOM;
  }
  return $output;
}
add_filter( 'wpp_custom_html', 'my_custom_popular_posts_html_list', 10, 2 );

?>