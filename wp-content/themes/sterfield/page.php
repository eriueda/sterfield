<?php get_header(); ?>
	
	<div id="subVisual">
    	<h1><?php the_title(); ?></h1>   
    </div>
	<div id="contents" class="clearfix">
<?php if(is_page('midcareer')): ?>
	<div class="submenu">
            	<ul>
                	<li class="navi01"><a href="#menu01">デザイナー</a></li>
                    <li class="navi02"><a href="#menu02">ディレクター・プロデューサー</a></li>
                    <li class="navi03"><a href="#menu03">プログラマー</a></li>
                    <li class="navi04"><a href="#menu04">営業・プランナー</a></li>
<li class="navi04"><a href="#menu05">募集要項</a></li>
                </ul>
            </div>
<?php endif; ?>
<?php if(is_page('message')): ?>
<div class="submenu">
            	<ul>
                	<li class="navi01"><a href="#menu01">企業理念</a></li>
                    <li class="navi02"><a href="#menu02">代表挨拶</a></li>
                    <li class="navi03"><a href="#menu03">役員紹介</a></li>
                </ul>
            </div>
<?php endif; ?>
<?php if(is_page('service')): ?>
<div class="submenu">
            	<ul>
                	<li class="navi01"><a href="#menu01">EC事業</a></li>
                    <li class="navi02"><a href="#menu02">メディア事業</a></li>
                </ul>
            </div>
<?php endif; ?>
<?php if(is_page('aboutus')): ?>
<div class="submenu">
            	<ul>
                	<li class="navi01"><a href="#menu01">会社概要</a></li>
                    <li class="navi02"><a href="#menu02">福利厚生・社内制度</a></li>
                    <li class="navi03"><a href="#menu03">アクセス</a></li>
                </ul>
            </div>
<?php endif; ?>
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
</div>
    <div id="main">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
       	<?php the_content(); ?>
        <?php endwhile; else : endif; ?>

            	
    <!--//main --></div>
<!--//contents --></div>
<?php get_footer(); ?>
