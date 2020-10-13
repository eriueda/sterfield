<!-- ここからOGP -->
<meta property="fb:admins" content="スターフィールド株式会社" />
<?php
if (is_front_page()){
echo '<meta property="og:type" content="website" />';echo "\n";
} else {
echo '<meta property="og:type" content="blogs" />';echo "\n";
}
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:url" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
<?php
if (is_singular() && ! is_archive() && ! is_front_page() && ! is_home()){ ?>
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:description" content="<?php echo mb_substr(strip_tags($post-> post_content), 0, 100); ?>"/>
<?php } else { ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>"/>
<?php } ?>
<?php
if (has_post_thumbnail() && ! is_archive() && ! is_front_page() && ! is_home()){ 
$thumbnail_id = get_post_thumbnail_id($post->ID);
$image = wp_get_attachment_image_src( $thumbnail_id, 'full' );
?>
<meta property="og:image" content="<?php echo $image[0]; ?>" />
<?php } else { ?>
<meta property="og:image" content="http://sterfield.co.jp/admin/wp-content/themes/sterfield/images/nothing.jpg" />
<?php } ?>
<!-- ここまでOGP -->