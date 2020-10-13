<div class="pagetop">
	<a href="#wrapper"><img src="<?php bloginfo('template_url'); ?>/images/top-arrow.png" alt="ページTOPへ"></a>
</div>

<footer id="footer">
	<div class="footer">
    <div class="foot_cont clearfix">
    	<div class="right">
            <div class="contact_form">
                <h4 id="contact">Contact</h4>
<?php echo do_shortcode('[contact-form-7 id="72" title="コンタクトフォーム 1"]'); ?>
            </div>
        <!--//right --></div>
        <div class="left">
            <!-- フッターメニューここから -->
            <div class="foot_menu">
                <div class="menu heightLine">
                    <h4>Message</h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/message/#menu01">企業理念</a></li>
                      <li class="navi02"><a href="<?php bloginfo('url'); ?>/message/#menu02">代表挨拶</a></li><li class="navi03"><a href="<?php bloginfo('url'); ?>/message/#menu03">役員紹介</a></li>
                    </ul>
                </div>
                <div class="menu heightLine">
                    <h4>Service</h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/service/#menu01">EC事業</a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/service/#menu02">メディア事業</a></li>
                    </ul>
                </div>
                <div class="menu heightLine">
                    <h4>About&nbsp;us</h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/aboutus/#menu01">会社概要
                    </a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/aboutus/#menu02">福利厚生・社内制度
                    </a></li><li class="navi03"><a href="<?php bloginfo('url'); ?>/aboutus/#menu03">アクセス
                    </a></li>
                    </ul>
                </div>
                <div class="menu heightLine">
                    <h4>Recruit</h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu01">デザイナー
                    </a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu02">ディレクター
                    </a></li><li class="navi03"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu03">プログラマー
                    </a></li><li class="navi04"><a href="<?php bloginfo('url'); ?>/recruit/midcareer/#menu04">営業
                    </a></li>
                    </ul>
                </div>
                <div class="menu heightLine">
                    <h4>News</h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/info/">お知らせ
                    </a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/info/">リリース
                    </a></li>
                    </ul>
                </div>
                <div class="menu heightLine">
                    <h4>Blog</h4>
                    <ul><li class="navi01"><a href="<?php bloginfo('url'); ?>/blog/product/">制作</a></li><li class="navi02"><a href="<?php bloginfo('url'); ?>/blog/development/">開発
                    </a></li><li class="navi03"><a href="<?php bloginfo('url'); ?>/blog/ec/">EC</a></li>
<li class="navi04"><a href="<?php bloginfo('url'); ?>/blog/global/">グローバル</a></li>
                    </ul>
                </div>
                <div class="menu heightLine">
                    <h4>Media</h4>
					<ul><li class="navi01"><a href="http://launchcart.jp/" target="_blank">越境ECカート「LaunchCart」</a></li>
<li class="navi04"><a href="http://compe.sterfield.jp/" target="_blank">コンペのポータル「コンペナビ」</a></li>
                    </ul>
                </div>

            </div>

                <!-- フッターメニューここまで -->
            <div class="info">
                <a href="http://best100.v-tsushin.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bv_bnr2.jpg" alt="EC支援のプロフェッショナル50"></a>
<div id="google_translate_element"></div><script type="text/javascript">

function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ja', gaTrack: true, gaId: 'UA-19151870-2'}, 'google_translate_element');
}

</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                     <p>スターフィールド株式会社<br>
                〒171-0033 東京都豊島区高田3丁目9−7<br>
                TEL: 03-5956-9292 FAX: 03-5956-9293</p>
            </div>

        <!--//left --></div>

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
