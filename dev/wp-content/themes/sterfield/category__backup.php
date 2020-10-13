<?php get_header(); ?>
<div id="subVisual">
    	<h1>Blog</h1>   
    </div>
	<div id="contents" class="clearfix">
    <div class="submenu">
<?php 
$cat_id=get_query_var('cat');
$catpt=get_category($cat_id);
$catpt = $catpt->category_nicename;
		?>

<?php
$cat_info = get_category( $cat );
?>

            	<ul class="<?php echo $catpt; ?>">
                    <li class="navi01"><a href="/ec/">EC</a></li>
                    <li class="navi02"><a href="/product/">制作</a></li>
                    <li class="navi03"><a href="/development/">開発</a></li>
<li class="navi04"><a href="/global/">グローバル</a></li>
<li class="navi05"><a href="/other/">その他</a></li>
                </ul>

            </div>

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
        </div>

    </div>

    <div id="main" class="clearfix">
	<div class="mainIn">
    <div class="archive">
<?php if($_GET["prize"] == "month"):
	$year = ($_GET["year"]) ? $_GET["year"] : date("Y");
	$args = array(
	'posts_per_page' => 200,
	'monthnum' => $_GET["month"],
	'year' => $year
	);
	$query = new WP_Query( $args ); 
	if ( $query->have_posts() ): while ( $query->have_posts() ) : $query->the_post(); ?> 
	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php endwhile; endif; ?>
<?php endif;?>
<ul class="art-list">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <?php 
	 if ( in_category(15) || post_is_in_descendant_category(15) ) {
$icon ="ec";
$label ="EC";
 }elseif ( in_category(71) || post_is_in_descendant_category(71) ) {
$icon = "seisaku";
$label ="制作";
 }elseif ( in_category(72) || post_is_in_descendant_category(72) ) {
$icon = "kaihatsu";
$label ="開発";
 }elseif ( in_category(73) || post_is_in_descendant_category(73) ) {
$icon = "global";
$label ="グローバル";
 }elseif ( in_category(51) || post_is_in_descendant_category(51) ) {
$label ="その他";
$icon = "other";
}else{}

		?>
		
        	<li class="<?php echo $icon; ?>">
                    	<a href="<?php the_permalink(); ?>">
                    	<div class="head">
                        	<span class="icon"><?php echo $label; ?></span>           
                        	<figure><?php if(has_post_thumbnail()) {
	the_post_thumbnail();
} else {
	echo '<img src="'.get_bloginfo("template_url").'/images/nothing.jpg" />';
} ?></figure>
                        </div>
                        <div class="excerpt">
<p class="data"><span><?php the_time('Y.m.d') ?></span></p>
                        <h2><?php the_title(); ?></h2>
                        </div>
                    	</a>
                    </li>


		<?php endwhile; endif; ?>

    	</ul>

<!--<a href="/" id="next">more</a>-->

<p class="pagenavi"><?php global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
	$paginate_format = '';
	$paginate_base = add_query_arg('paged', '%#%');
} else {
	$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
	user_trailingslashit('page/%#%/', 'paged');;
	$paginate_base .= '%_%';
}
echo paginate_links( array(
	'base' => $paginate_base,
	'format' => $paginate_format,
	'total' => $wp_query->max_num_pages,
	'mid_size' => 2,
	'current' => ($paged ? $paged : 1),
)); ?></p>

    </div>

		<?php get_sidebar(); ?>

    
</div>
    <!--//main --></div>

	<!--//contents --></div>

	<?php get_footer(); ?>