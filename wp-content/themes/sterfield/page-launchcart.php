<?php
header('Location: http://launchcart.jp/');
exit;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="0;URL=http://launchcart.jp/">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <title>次世代ECサイトパッケージ　Launch Cart</title>
    <meta name="description" content="">
    <meta name="keywords" content=",">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]> 
	<script type="text/javascript" src="/launchcart/js/html5.js"></script>
	<![endif]-->	
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/launchcart/css/import.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fix.css" >
    <script src="<?php bloginfo('template_url'); ?>/launchcart/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/launchcart/js/fix.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/launchcart/js/IE9.js"></script>
    <script type="text/javascript"　src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

<style>
#bg
{
	width: 100%;
	height: 100%;
	z-index: 999;
	position: absolute;
    filter: alpha(opacity=50);
	-ms-filter: alpha(opacity=50);
    -moz-opacity:0.5;
    opacity:0.5;
	background-color: #000000;
	display: none;
}

#pu
{
	position: absolute;
	left: 50%;
	margin-left: -200px;
	width: 400px;
	z-index: 999;
	background-color: #ffffff;
	display: none;
}

iframe
{
	width: 400px;
	height: 500px;
	border: none;
	overflow: hidden;
}

</style>
  
<script>
$(document).ready(function()
{
	// キャンペーン規約
	$( '.btn' ).click(function ()
	{
		$( '#bg' ).height( $( document ).height() );
		$( '#pu' ).css( 'top', $( document ).scrollTop() + 20 + "px" );
		$( '#bg' ).fadeIn( 'fast' );
		$( '#pu' ).fadeIn( 'fast' );
		return false;
	});

	// キャンセル
	$( '.close, #bg' ).click(function ()
	{
		$( '#pu' ).fadeOut( 'fast' );
		$( '#bg' ).fadeOut( 'fast' );
		return false;
	});
});  
</script>

</head>

<body>

<div id="bg"></div>

<div id="pu">

<iframe src="/request" scrolling="no" frameborder="0"></iframe>

</div>

<div id="wrapper">
<div class="section head">
<img src="<?php bloginfo('template_url'); ?>/launchcart/images/head.png" alt="">
</div>
<div class="section mainVisual">
	<img src="<?php bloginfo('template_url'); ?>/launchcart/images/main.png" alt="">
</div>
<div id="contents">
    <div class="section" id="menu1">
        <img src="<?php bloginfo('template_url'); ?>/launchcart/images/lc_img01.png" alt="" class="move">
    </div>
    <div class="section" id="menu2">
        <img src="<?php bloginfo('template_url'); ?>/launchcart/images/lc_img02.png" alt="" class="move">
<span class="btn moveT"></span>
    </div>
    <div class="section pat" id="menu3">
        <img src="<?php bloginfo('template_url'); ?>/launchcart/images/lc_img03.png" alt="" class="move">
    </div>
    <div class="section" id="menu4">
        <img src="<?php bloginfo('template_url'); ?>/launchcart/images/lc_img04.png" alt="" class="move">
<span class="btn moveT"></span>
    </div>
    <div class="section pat" id="menu5">
        <img src="<?php bloginfo('template_url'); ?>/launchcart/images/lc_img05.png" alt="" class="move">
    </div>

    <div class="section" id="menu6">
        <img src="<?php bloginfo('template_url'); ?>/launchcart/images/lc_img06.png" alt="" class="move">
    </div>
    <div class="section" id="menu7">
        <img src="<?php bloginfo('template_url'); ?>/launchcart/images/lc_img07.png" alt="" class="move">
	
    </div>
<div class="section c_btn"><span class="btn moveT"></span></div>
<?php get_footer(); ?>