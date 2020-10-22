<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <title><?php if(is_home()): ?><?php elseif(is_category()):?><?php single_cat_title(); ?><?php elseif(is_month()):?>Monthly<?php elseif(is_tax()):?><?php single_cat_title(); ?><?php elseif(is_author()):?><?php $author = get_userdata($post->post_author);
echo $author->display_name; ?><?php elseif(is_archive()):?>News<?php else:?><?php the_title(); ?><?php endif; ?>
<?php if(is_home()): ?>スターフィールド株式会社 | 越境EC | システム開発<?php else:?> | <?php bloginfo('name'); ?><?php endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-new.css" >
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<?php if(is_home()): ?>
<script>
$(function () {
    $("body").css("opacity",0);
    $("body").animate({opacity:"1"}, 1000);
});
</script>
<?php else:?>

<?php endif; ?>
    <script src="<?php bloginfo('template_url'); ?>/js/respond.src.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/fix.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/IE9.js"></script>
    <script type="text/javascript"　src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
<!--google translate-->
<meta name="google-translate-customization" content="9dc7a120b066ee53-5588d93eecc4d01a-g34db7319e077006e-f"></meta>

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>
</head>
<body class="<?php if(is_category()): ?>blog<?php elseif(is_archive('info')):?>news<?php elseif(is_tax()):?>news<?php elseif(is_page()):?><?php echo $post->post_name; ?><?php else:?><?php echo get_page_uri($post->ID);?><?php endif; ?>">
<?php if(is_single()): ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php endif; ?>
<div id="wrapper">

<header id="header">
    <div class="head_cont clearfix">
        <div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""></a></div>
    <!-- <?php if(is_home()): ?><h1>高田馬場の越境ECサイト開発会社</h1><?php else:?><span>高田馬場の越境ECサイト開発会社</span><?php endif; ?> -->
        <input type="checkbox" class="navToggle" id="navToggle">
        <label for="navToggle" class="navIcon"><span></span></label>
        <nav id="nav">
            <div id="globalnavi">
                <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/message/">Message</a>
                </li><li class="navi02"><a href="<?php bloginfo('url'); ?>/service/">Service</a>
                </li><li class="navi03"><a href="<?php bloginfo('url'); ?>/aboutus/">Aboutus</a>
                </li><li class="navi04"><a href="<?php bloginfo('url'); ?>/recruit/">Recruit</a><!--<span class="progtips"><a href="<?php bloginfo('url'); ?>/programmers"><img src="<?php bloginfo('template_url'); ?>/images/prog_tip.png" alt="プログラマー急募"></a>--></span>
                </li><li class="navi05"><a href="<?php bloginfo('url'); ?>/blog/">Blog</a>
                </li><li class="navi06"><a href="<?php bloginfo('url'); ?>/info/">News</a></li>
                <!--
              </li><li class="navi07"><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
                -->
              </ul>

<!--
<a href="<?php bloginfo('url'); ?>/programmers" class="tips"><img src="<?php bloginfo('template_url'); ?>/images/prog_tip.png" alt="プログラマー急募"></a>
-->

                <!-- /#globalnavi --></div>
        </nav>
    </div>
<!--//header -->
</header>


<?php //get_header(); ?>
	
	<div id="mainVisual">
    	<div class="mainVideo is-portrait">
            <video class="mainVideo__video" id="main_video" loop="" autoplay="" playsinline="" muted="">
                <source src="https://launchcart.jp/admin/wp-content/themes/launchcart/ver2017/video/kv.mp4" type="video/mp4">
                <source src="https://launchcart.jp/admin/wp-content/themes/launchcart/ver2017/video/kv.webm" type="video/webm">
            </video>
        </div>
        <div class="visual"><a href="http://sterfield.co.jp/launchcart/"><img src="<?php bloginfo('template_url'); ?>/images/mainvisualContent.png" alt=""></a></div>    
    </div>
	<div id="contents" class="clearfix">
    <div id="main" class="top-main">
    		
            <div class="block top1">
                <dl>
                    <dt><span>Vision</span><h2>世界をもっと身近に</h2></dt>
                    <dd class="clearfix">
                        <div>時代は規模の経済から価値の経済へ移行します。<br>
                        これからは多数の中小企業が洗練された価値をブランディングし、次々と世界に進出していく時代です。<br>
                        私たちは、インターネットを軸にした技術とノウハウによって、世界進出する中小企業のリスクを最小化し、成果を最大化する仕組みを追求しています。<br>
                        国境を意識せず手軽に世界に挑戦できる仕組み = 世界をもっと身近に感じられるシステムとスキームの構築に邁進しています。</div>
                        <a href="/message/" class="btn-more"><span>More</span></a>
                    </dd>
                </dl>
                <div class="blockVisual"><figure><img src="<?php bloginfo('template_url'); ?>/images/top-vision.png" alt=""></figure></div>

            </div>
            
            <div class="block top2">
                <dl>
                    <dt><span>Service</span><h2>越境・現地EC用カート「LaunchCart」
                    </h2></dt>
                    <dd class="clearfix">
                        <div><strong>アジア向けECで最も多く選んで頂いています。</strong><br>
                            多言語CMS、商品管理、顧客管理、受注管理、在庫管理、倉庫連携、効果測定効果測定･･･等々、越境EC に必要な機能は全て標準搭載しています。<br>
                            単品リピート通販、総合通販どちらも対応可能です。<br>
                            越境EC として日本から複数の国に一度に販売、その後特定の国での現地EC としてもそのまま利用することが可能です。
                        </div>
                        <a href="/service/" class="btn-more"><span>More</span></a>
                    </dd>
                </dl>
                <div class="blockVisual">
                     <figure><img src="<?php bloginfo('template_url'); ?>/images/img_intro_lp.png" alt=""></figure>
                </div>
            </div>
            
            <div class="recruit_area">
                <dl>
                    <dt><span>Recruit</span><h2>Be A Professional</h2></dt>
                    <dd class="recruit_area__content">
                        <p>近い将来、中小企業による大航海時代が始まります。<br>
                        多数の中小企業が次々に世界進出する時代です。<br>
                        これは私達にとって刺激的な未来への挑戦であり、日本が国際競争力を保持するためには避けては通れない道だと思っています。<br>
                        私たちは、この時代を勝ち抜くために努力し、互いに成長できる仲間を募集しています。
                        </p>
                        <a href="/recruit/">採用情報へ</a>
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
                <dl><dt class="<?php echo $slug_var ;?>"><span><?php the_time('Y.m.d') ?></span></dt><dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd></dl>
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
            	<dl><dt class="<?php echo $icon; ?>"></dt><dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd></dl>
                <?php endwhile; wp_reset_query(); endif; ?>
            </div>
            <!-- ブログここまで -->
        </div>
            	
    <!--//main --></div>
    
<!--//contents --></div>
	<?php //get_footer(); ?>
<div class="pagetop">
    <a href="#wrapper"><img src="<?php bloginfo('template_url'); ?>/images/top-arrow.png" alt="ページTOPへ"></a>
</div>

<footer id="footer">
    <div class="footer">
    <div class="foot_cont clearfix">
            <!-- フッターメニューここから -->
            <div class="foot_menu">
                <div class="menu">
                    <h4><a href="<?php bloginfo('url'); ?>/Message/">Message</a></h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/message/#menu01">企業理念</a></li>
                        <li class="navi02"><a href="<?php bloginfo('url'); ?>/message/#menu02">代表挨拶</a></li>
                        <li class="navi03"><a href="<?php bloginfo('url'); ?>/message/#menu03">役員紹介</a></li>
                    </ul>
                </div>
                <div class="menu">
                    <h4><a href="<?php bloginfo('url'); ?>/service/">Service</a></h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/service/#menu01">EC事業</a></li>
                    <li class="navi02"><a href="<?php bloginfo('url'); ?>/service/#menu02">メディア事業</a></li>
                    </ul>
                </div>
                <div class="menu">
                    <h4><a href="<?php bloginfo('url'); ?>/aboutus/">About us</a></h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/aboutus/#menu01">会社概要
                    </a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/aboutus/#menu02">福利厚生・社内制度
                    </a></li><li class="navi03"><a href="<?php bloginfo('url'); ?>/aboutus/#menu03">アクセス
                    </a></li>
                    </ul>
                </div>
                <div class="menu">
                    <h4><a href="<?php bloginfo('url'); ?>/recruit/">Recruit</a></h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu01">デザイナー
                    </a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu02">ディレクター
                    </a></li><li class="navi03"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu03">プログラマー
                    </a></li><li class="navi04"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu04">営業
                    </a></li>
                    </ul>
                </div>
                <div class="menu">
                    <h4><a href="<?php bloginfo('url'); ?>/info/">News</a></h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/item/news/">お知らせ
                    </a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/item/release/">リリース
                    </a></li>
                    </ul>
                </div>
                <div class="menu">
                    <h4><a href="<?php bloginfo('url'); ?>/blog/">Blog</a></h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/blog/product/">制作</a></li>
                    <li class="navi02"><a href="<?php bloginfo('url'); ?>/blog/development/">開発
                    </a></li><li class="navi03"><a href="<?php bloginfo('url'); ?>/blog/ec/">EC</a></li>
                            <li class="navi04"><a href="<?php bloginfo('url'); ?>/blog/global/">グローバル</a></li>
                    </ul>
                </div>
                <div class="menu">
                    <h4>Media</h4>
                    <ul><li class="navi01"><a href="http://launchcart.jp/" target="_blank">越境ECカート「LaunchCart」</a></li>
                        <li class="navi04"><a href="http://compe.sterfield.jp/" target="_blank">コンペのポータル「コンペナビ」</a></li>
                    </ul>
                </div>

            </div>

                <!-- フッターメニューここまで -->
            <div class="info">
                <div class="info__left">
                <a href="http://best100.v-tsushin.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bv_bnr2.jpg" alt="EC支援のプロフェッショナル50"></a>
                <div id="google_translate_element"></div>
                <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'ja', gaTrack: true, gaId: 'UA-19151870-2'}, 'google_translate_element');
                }

                </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
                <div class="info__right">
                    <div class="logo"><a href="https://sterfield.co.jp/dev"><img style="background-color:#fafafa;border-radius:5px;padding:5px" src="https://sterfield.co.jp/dev/wp-content/themes/sterfield/images/logo.png" alt=""></a></div>
                    <p>スターフィールド株式会社<br>
                    〒171-0033 東京都豊島区高田3丁目9−7<br>
                    TEL: 03-5956-9292 FAX: 03-5956-9293</p>
                </div>
            </div>


    <!--//footer_cont --></div>
     <p class="copyright">copyright © sterfield All Rights Reserved.</p>
     <!--//footer --></div>
<!--//#footer --></footer>
<?php if(is_page('launchcart')): ?>
</div>
<?php endif; ?>
<!--//wrapper --></div>

<?php if(is_archive() || is_page('blog') || is_search()): ?>
<script type="text/javascript">
    $(function(){
            var $sfmasonary = $('.art-list');
            $sfmasonary.imagesLoaded( function(){
                $sfmasonary.masonry({
                    itemSelector : '.art-list li',
                    isAnimated: true
                });
            });

$sfmasonary.infinitescroll({
      navSelector  : '.pagenavi',    // ナビゲーション
      nextSelector : '.pagenavi a.next',  // 次ページへのリンク
      itemSelector : '.art-list li',     // 次ページ内で探す要素
loading: {
            finishedMsg: 'これ以上はございません', //次のページがない場合に表示するテキスト
            img:'<?php bloginfo('template_url'); ?>/js/loadingAnimation.gif',
            msgText:'',
            speed: 'normal'
        },
 debug : true
},
// コールバック
      function( newElements ) {
        var $newElems = $( newElements ).css({ opacity: 0 });
        // ボックスを配列させる前に画像をロードしとく
        $newElems.imagesLoaded(function(){
$newElems.animate({ opacity: 1 });
          $sfmasonary.masonry( 'appended', $newElems, true );
        });
      }

);

// kill scroll binding
    //$(window).unbind('.infscr');
  //$('a#next').click(function(){
      //$(document).trigger('retrieve.infscr');
      //return false;
    //});
    });

</script>

<?php endif; ?>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-19151870-2', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>