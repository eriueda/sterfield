<?php
/*
Template Name: ブログ2020
*/
?>
<?php get_header(); ?>
<main class="l-blogMain">
  <div class="l-blogHeader">
    <h1 class="blogTitle">
      <span>Blog</span>
      <!-- <img src="https://sterfield.co.jp/wp-content/themes/sterfield/images/logo_blog.svg"> -->
    </h1>
    <div class="blogSearch">
      <?php get_template_part( 'searchform2020' ); ?>
    </div>
  </div>

  <div class="l-blogCategory">
    <ul class="blogCategory__list">
      <li class="blogCategory__item all <?php if (is_category('38')):echo "current"; endif;?>">
        <a href="/dev/blog/"><span>すべて</span></a></li>
      <li class="blogCategory__item ec <?php if (is_category('15')):echo "current"; endif;?>">
        <a href="/dev/blog/ec/"><span>EC</span></a></li>
      <li class="blogCategory__item product <?php if (is_category('71')):echo "current"; endif;?>">
        <a href="/dev/blog/product/"><span>制作</span></a></li>
      <li class="blogCategory__item development <?php if (is_category('72')):echo "current"; endif;?>">
        <a href="/dev/blog/development/"><span>開発</span></a></li>
      <li class="blogCategory__item global <?php if (is_category('73')):echo "current"; endif;?>">
        <a href="/dev/blog/global/"><span>グローバル</span></a></li>
      <li class="blogCategory__item other <?php if (is_category('51')):echo "current"; endif;?>">
        <a href="/dev/blog/other/"><span>その他</span></a></li>
    </ul>
  </div>
  <div class="l-blogBreadcrumbs">
    <div class="breadcrumbs-inner">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
  </div>
  <div class="l-blogContents">
    <div class="l-blogContents__inner">
      <ul class="blogList">
          <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
          <li class="blogItem">
            <a href="<?php the_permalink() ?>">
              <figure class="blogItem__figure">
                <?php
                if ( has_post_thumbnail() ) {
                	the_post_thumbnail();
                }
                else {
                  echo '<img src="'.get_bloginfo("template_url").'/images/nothing.jpg" />';
                }
                ?>
              </figure>
              <div class="blogItem__info">
                <?php
                if ( in_category(15) || post_is_in_descendant_category(15) ) {
                  $icon ="ec";
                  $label ="EC";
                }elseif ( in_category(71) || post_is_in_descendant_category(71) ) {
                  $icon = "product";
                  $label ="制作";
                }elseif ( in_category(72) || post_is_in_descendant_category(72) ) {
                  $icon = "development";
                  $label ="開発";
                }elseif ( in_category(73) || post_is_in_descendant_category(73) ) {
                  $icon = "global";
                  $label ="グローバル";
                }elseif ( in_category(51) || post_is_in_descendant_category(51) ) {
                  $label ="その他";
                  $icon = "other";
                }else{}
                  ?>
                <span class="blogItem__category <?php echo $icon; ?>"><?php echo $label; ?></span>
                <span class="blogItem__date"><?php the_time('Y.m.d') ?></span>
              </div>
              <p class="blogItem__title"><?php the_title(); ?></p>
            </a>
          </li>
        <?php endwhile;endif; ?>
      </ul>

    <p class="l-blogPagenavi pagenavi">

    <?php global $wp_rewrite;
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


      <div class="l-blogRelated">
        <div class="blogRelated__head">
          <h2 class="blogRelated__title">越境ECの最新情報</h2>
          <div class="blogRelated__button"><a href="https://launchcart.jp/" target="_blank"><span>LaunchCart.jpへ</span></a></div>
        </div>
        <ul class="blogRelated__list">
          <script>
            $.getJSON('https://launchcart.jp/get_post_info/?latest&posts_per_page=8')
              .done(function (json) {
                var posts = '';
                for (var i = 0; i < json.length; i++) {
                  posts += '<li class="blogRelated__item">'+
                              '<a href="'+json[i].url+'" target="_blank">'+
                                '<figure class="blogRelated__item__figure">'+
                                  '<img src="'+json[i].thumbnail+'">'+
                                '</figure>'+
                                '<div class="blogRelated__item__info">'+
                                  '<span class="blogRelated__item__category global">'+json[i].category+'</span>'+
                                  '<span class="blogRelated__item__date">'+json[i].date+'</span></div>'+
                                '<p class="blogRelated__item__title">'+json[i].title+'</p>'+
                              '</a>'+
                            '</li>'
                }
                $('.blogRelated__list').html(posts);
              });
          </script>
        </ul>
      </div><!-- .l-blogRelated -->
    </div><!-- .l-blogContents__inner -->
    <?php get_template_part( 'sidebar2020' ); ?>
  </div><!-- .l-blogContents -->
</main>

<?php get_footer(); ?>
