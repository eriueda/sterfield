<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <title>資料請求｜次世代ECサイトパッケージ　Launch Cart</title>
    <meta name="description" content="">
    <meta name="keywords" content=",">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]> 
	<script type="text/javascript" src="/launchcart/js/html5.js"></script>
	<![endif]-->	
    <script src="<?php bloginfo('template_url'); ?>/launchcart/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/launchcart/js/fix.js"></script>
    <!--[if lt IE 9]>
  <![endif]-->
  	<style>
		body
		{
			width: 380px;
			padding: 10px 10px 10px 10px;
			overflow: hidden;
			font-size: 9pt;
			line-height: normal;
			letter-spacing: normal;
			color: #2a2a2a;
		}
		p
		{
			width: 100%;
			clear: both;
		}
		p input[type=text]
		{
			width: 355px;
		}
		p textarea
		{
			width: 355px;
			height: 30px;
		}
		p.center
		{
			width: 100%;
			text-align: center;
		}
		p .wpcf7-not-valid-tip-no-ajax
		{
			display: block;
			clear: both;
			overflow: hidden;
			color: red;
		}
		.submit
		{
			border-radius: 3px;
			background-color: #ea6d0a;
			border: 1px solid #cb7106;
			border-bottom-color: #a45901;
			background-image: -moz-linear-gradient(top, #f09b0e, #ea6d0a);
			background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.00, #f09b0e), color-stop(1.0, #ea6d0a));
			color: #FFF;
			box-shadow: 0px 0px 1px #ffffff inset;
			cursor: pointer;
			padding: 4px 12px;
			font-size: 14px;
			text-shadow: 0px -1px 0px #c86f18;
			letter-spacing: 1px;
		}
		.submit:hover
		{
			background-image: -moz-linear-gradient(top, #ea6d0a, #f09b0e);
			background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0.00, #ea6d0a), color-stop(1.0, #f09b0e));
		}
	</style>
</head>
<body>
<?php echo do_shortcode('[contact-form-7 id="1139" title="資料請求"]'); ?>
</body>