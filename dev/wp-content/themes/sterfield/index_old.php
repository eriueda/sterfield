<?php get_header(); ?>
	
	<div id="mainVisual">
    	<div class="visual"><a href="/launchcart/" onclick="ga('send','event','link','click','launchcart');"><img src="<?php bloginfo('template_url'); ?>/images/mainvisual.png" alt=""></a></div>    
    </div>
	<div id="contents" class="clearfix">
    <div id="main" class="top-main">
    		
            <div class="block top1">
                <a href="/message/"><dl>
                    <dt><h2>世界をもっと身近に</h2></dt>
                    <dd class="clearfix">
                        <div class="left">時代は規模の経済から価値の経済へ移行します。<br>
                        これからは多数の中小企業が洗練された価値をブランディングし、次々と世界に進出していく時代です。<br>
                        私たちは、インターネットを軸にした技術とノウハウによって、世界進出する中小企業のリスクを最小化し、成果を最大化する仕組みを追求しています。<br>
                        国境を意識せず手軽に世界に挑戦できる仕組み = 世界をもっと身近に感じられるシステムとスキームの構築に邁進しています。</div>
                        <div class="right"><img src="<?php bloginfo('template_url'); ?>/images/top-img01.png" alt=""></div>
                    </dd>
                </dl>
                <span class="b-more">More</span>
                </a>
            </div>
            
            <div class="block top2">
                <a href="/service/">
                <dl>
                    <dt><h2>スターフィールドが提供するサービス</h2></dt>
                    <dd class="clearfix">
                        <div class="left">Eコマースを中心に様々なサービスとシステム構築を承っております。<br>
プロモーションや翻訳サービスに加え、あらゆる環境でのシステムの構築及び連携が可能です。<br>
また、長年の受託開発の経験から、効果的なソーシャルアプリやプロモーションサイトのご提案から、基幹システムとのシステム連携などプラットフォームを問わず幅広いご提案を致します。
</div>
                        <div class="right"><img src="<?php bloginfo('template_url'); ?>/images/img_launchmovie.jpg" alt=""></div>
                    </dd>
                </dl>
                <span class="b-more">More</span>
                </a>
            </div>
            
            <div class="block top3">
            	<a href="/recruit/">
                <dl>
                    <dt><h2>志を共有できる仲間募集</h2></dt>
                    <dd class="clearfix">
                        <div class="left">近い将来、中小企業による大航海時代が始まります。<br>
                        多数の中小企業が次々に世界進出する時代です。<br>
                        これは私達にとって刺激的な未来への挑戦であり、日本が国際競争力を保持するためには避けては通れない道だと思っています。<br>
                        私たちは、この時代を勝ち抜くために努力し、互いに成長できる仲間を募集しています。
                        </div>
                        <div class="right"><img src="<?php bloginfo('template_url'); ?>/images/top-img03.png" alt=""></div>
                    </dd>
                </dl>
                <span class="b-more">More</span>
                </a>
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