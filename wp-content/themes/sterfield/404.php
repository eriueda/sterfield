<?php get_header(); ?>
	
	<div id="contents" class="clearfix">
    <div id="main" class="top-main">
    		
            <div class="block top1">
                <dl>
                    <dt><h2>このページはこの世には存在しません...</h2></dt>
                    <dd class="clearfix">
                        <div class="left"><p>お探しのページはアクセスできないページか、移動または削除された可能性があります。<br>
                        その代わり弊社HPのオススメをご紹介させて頂きます。</p>
                        <a href="http://sterfield.co.jp/launchcart">&raquo; ECシステム「LaunchCart」</a>
                        <a href="http://sterfield.co.jp/blog">&raquo; 社員ブログ</a><br>

                        </div>
                        <div class="right"><img src="<?php bloginfo('template_url'); ?>/images/top-img01.png" alt=""></div>
                    </dd>
                </dl>
            
            </div>
            
        
        <div class="news_area clearfix">
        	<!-- 最新情報ここから -->
        	<div class="left">
            	<h3>News<a href="<?php bloginfo('url'); ?>/info">More</a></h3>
<?php query_posts( 'posts_per_page=5&post_type=info' ); if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
	$taxonomy_var = get_post_taxonomies($post->id); // ターム取得のためのタクソノミ
$terms_array = get_the_terms($post->id, $taxonomy_var); // スラグ取得のためのターム配列
$slug_var = $terms_array[0]->slug; // 配列からスラグ取得
?>
<dl><dt class="<?php echo $slug_var ;?>"><?php the_time('Y.m.d') ?></dt><dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd></dl>
<?php endwhile; wp_reset_query(); endif; ?>
            </div>
            <!-- 最新情報ここまで -->
            <!-- ブログここから -->
            <div class="right">
            	<h3>Blog<a href="<?php bloginfo('url'); ?>/blog/">More</a></h3>
<?php query_posts( 'posts_per_page=5' ); if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
$icon = "other";
if ( in_category(72) || post_is_in_descendant_category(72) ) {
  $icon = "kaihatsu";
 }
 if ( in_category(71) || post_is_in_descendant_category(71) ) {
  $icon = "seisaku";
 }
if ( in_category(73) || post_is_in_descendant_category(73) ) {
  $icon = "global";
 }
if ( in_category(15) || post_is_in_descendant_category(15) ) {
  $icon = "ec";
 }
if ( in_category(51) || post_is_in_descendant_category(51) ) {
  $icon = "other";
 }
		?>
            	<dl><dt class="<?php echo $icon; ?>"><?php the_time('Y.m.d') ?></dt><dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd></dl>
<?php endwhile; wp_reset_query(); endif; ?>
            </div>
            <!-- ブログここまで -->
        </div>
            	
    <!--//main --></div>
    
<!--//contents --></div>
	<?php get_footer(); ?>