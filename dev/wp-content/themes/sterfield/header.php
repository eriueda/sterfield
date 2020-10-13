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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500&display=swap&subset=japanese">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>?20191217" >
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/blog.css" >
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
    <script src="<?php bloginfo('template_url'); ?>/js/heightLine.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/respond.src.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/fix.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/IE9.js"></script>
    <script type="text/javascript"　src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
<!--google translate-->
<meta name="google-translate-customization" content="9dc7a120b066ee53-5588d93eecc4d01a-g34db7319e077006e-f"></meta>
<!-- Dot metrix -->
<!-- <script type='text/javascript'>
  (function(doc, dm) {
    if (!dm.VERSION) {
      window.dotmetrix = dm;

      dm._queue = [];
      dm.init = function(api_token, b, c) {
        dm.API_TOKEN = api_token;
        function f(dm, fname) { dm[fname] = function() { dm._queue.push([fname].concat([].slice.call(arguments, 0))); } }
        var functions = 'track identify set'.split(' ');
        for (var i = 0; i < functions.length; i++) f(dm, functions[i]);
      };

      s = doc.createElement("script"); s.type = "text/javascript"; s.async = !0; s.src = "https://api.dot-metrix.com/dot-metrix.p.js"; e = doc.getElementsByTagName("script")[0]; e.parentNode.insertBefore(s, e);
    }
  })(document, window.dotmetrix || {});
  dotmetrix.init('D3D6F9A3cLgC7YRzxrB5');
</script> -->
<!-- /Dot metrix -->
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
