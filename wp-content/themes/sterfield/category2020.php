<?php
/*
Template Name: ブログ2020
*/
?>
<?php get_header(); ?>
<main class="l-blogMain">
  <div class="l-blogHeader">
    <h1 class="blogTitle"><img src="https://sterfield.co.jp/wp-content/themes/sterfield/images/logo_blog.svg"></h1>
    <div class="blogSearch">
      <?php get_template_part( 'searchform2020' ); ?>
    </div>
  </div>


<?php
$cat_id=get_query_var('cat');
$catpt=get_category($cat_id);
$catpt = $catpt->category_nicename;
		?>

<?php
$cat_info = get_category( $cat );
?>
  <div class="l-blogCategory">
    <ul class="blogCategory__list <?php echo $catpt; ?>">
      <li class="blogCategory__item all current"><a href="/blog/"><span>すべて</span></a></li>
      <li class="blogCategory__item ec"><a href="/ec/"><span>EC</span></a></li>
      <li class="blogCategory__item product"><a href="/product/"><span>制作</span></a></li>
      <li class="blogCategory__item development"><a href="/development/"><span>開発</span></a></li>
      <li class="blogCategory__item global"><a href="/global/"><span>グローバル</span></a></li>
      <li class="blogCategory__item other"><a href="/other/"><span>その他</span></a></li>
    </ul>
  </div>
  <div class="l-blogContents">
    <div class="l-blogContents__inner">
      <ul class="blogList">
          <?php
          global $post;
          //投稿数
          $args = array( 'posts_per_page' => 15 );
          $myposts = get_posts( $args );

          //ループで回す
          foreach( $myposts as $post ) {
          setup_postdata($post);

          ?>
        <li class="blogItem">
          <?php if(have_posts()): ?>
          <a href="<?php the_permalink() ?>">
            <figure class="blogItem__figure">
              <?php if(has_post_thumbnail()) {
                the_post_thumbnail();
                } else {
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
      <?php else: ?>
      <?php endif; ?>
      <?php
      }
      wp_reset_postdata();
      ?>
    </ul>




      <div class="l-blogRelated">
        <div class="blogRelated__head">
          <h2 class="blogRelated__title">越境ECの最新情報</h2>
          <div class="blogRelated__button"><a href="https://launchcart.jp/"><span>LaunchCart.jpへ</span></a></div>
        </div>
        <ul class="blogRelated__list">
          <li class="blogRelated__item">
            <a>
              <figure class="blogRelated__item__figure">
              <?php echo '<img src="'.get_bloginfo("template_url").'/images/nothing.jpg" />' ?>
              </figure>
              <div class="blogRelated__item__info">
                <span class="blogRelated__item__category global">グローバル</span>
                <span class="blogRelated__item__date">2019.11.26</span></div>
              <p class="blogRelated__item__title">台湾出張レポート、消費財バブル！？台湾のコスメ市場のイマ</p>
            </a>
          </li>
        </ul>
      </div><!-- .l-blogRelated -->
    </div><!-- .l-blogContents__inner -->
    <?php get_template_part( 'sidebar2020' ); ?>
  </div><!-- .l-blogContents -->
</main>

<?php get_footer(); ?>
