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
      <?php get_template_part('searchform2020'); ?>
    </div>
  </div>


  <div class="l-blogCategory">
    <ul class="blogCategory__list">
      <li class="blogCategory__item all current"><a href="/dev/blog/"><span>すべて</span></a></li>
      <li class="blogCategory__item ec"><a href="/dev/ec/"><span>EC</span></a></li>
      <li class="blogCategory__item product"><a href="/dev/product/"><span>制作</span></a></li>
      <li class="blogCategory__item development"><a href="/dev/development/"><span>開発</span></a></li>
      <li class="blogCategory__item global"><a href="/dev/global/"><span>グローバル</span></a></li>
      <li class="blogCategory__item other"><a href="/dev/other/"><span>その他</span></a></li>
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
      <div class="article">
        <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
                <article>
                <h1><?php the_title(); ?></h1>
                  <div class="a-head">
                    <div class="clearfix mb10"><span class="data"><?php the_time('Y.m.d') ?></span>・<span class="cat"><b>Cat：</b><?php the_category(' '); ?></span></div>
                    <div class="right"><div class="social"><div class="l02"><div class="fb-like" data-layout="button_count"></div></div><div class="l03"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div><div class="l04"><div class="g-plusone"></div></div><div class="l01"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard-balloon" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></div><div class="pocket"><a data-pocket-label="pocket" data-pocket-count="horizontal" class="pocket-btn" data-lang="en"></a><script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script></div>
                    </div></div>
                  </div>
                  <div class="main-photo"><?php the_post_thumbnail('large'); ?></div>
                  <div class="letter">
                  <?php the_content(); ?>
                  </div>

                  <div class="social mb30"><div class="l02"><div class="fb-like" data-layout="button_count"></div></div><div class="l03"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div><div class="l04"><div class="g-plusone"></div></div><div class="l01"><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard-balloon" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></div><div class="pocket"><a data-pocket-label="pocket" data-pocket-count="horizontal" class="pocket-btn" data-lang="en"></a><script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script></div></div>


  <?php if (is_singular('info')): ?>
  <?php else: ?>
                  <div class="author-area clearfix">
                    <h3>Author Profile</h3>
                      <div class="left">
                      <?php echo get_avatar(get_the_author_id(), 100); ?>
                          <div class="author-photo">
                          </div>
                      </div>
                      <div class="right">
                      <dl>
                      <dt><?php the_author(); ?></dt>
                      <dd class="mb10"><?php the_author_meta("description"); ?></dd>
                      <dd><a href="<?php echo get_author_posts_url(get_the_author_id()); ?>" class="author-all">&raquo 投稿一覧</a></dd>
                      </dl>
                      </div>

                  </div>
  <?php endif; ?>


                  <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="3" data-width="656"></div>
                <?php endwhile; endif; ?>
   </article>
           </div>

       <div class="l-blogRelated">
         <div class="blogRelated__head">
           <h2 class="blogRelated__title">関連記事</h2>
         </div>
         <ul class="blogList">
           <?php
             $cat = get_the_category();
             $cat = $cat[0]; // [0]は先頭要素
             $the_query = new WP_Query(array(
              'category__in' => $cat->cat_ID, // category__inはカテゴリーIDを使う
              'post_type' => 'post',
              'posts_per_page' => 6, // 表記数
              'orderby'=> 'rand' // ランダム
             ));
           ?>
           <?php if ($the_query -> have_posts()) :?>
           <?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
           <li class="blogItem">
             <a href="<?php the_permalink() ?>">
               <figure class="blogItem__figure">
                 <?php
                 if (has_post_thumbnail()) {
                     the_post_thumbnail();
                 } else {
                     echo '<img src="'.get_bloginfo("template_url").'/images/nothing.jpg" />';
                 }
                 ?>
               </figure>
               <div class="blogItem__info">
                 <?php
                 if (in_category(15) || post_is_in_descendant_category(15)) {
                     $icon ="ec";
                     $label ="EC";
                 } elseif (in_category(71) || post_is_in_descendant_category(71)) {
                     $icon = "product";
                     $label ="制作";
                 } elseif (in_category(72) || post_is_in_descendant_category(72)) {
                     $icon = "development";
                     $label ="開発";
                 } elseif (in_category(73) || post_is_in_descendant_category(73)) {
                     $icon = "global";
                     $label ="グローバル";
                 } elseif (in_category(51) || post_is_in_descendant_category(51)) {
                     $label ="その他";
                     $icon = "other";
                 } else {
                 }
                   ?>
                 <span class="blogItem__category <?php echo $icon; ?>"><?php echo $label; ?></span>
                 <span class="blogItem__date"><?php the_time('Y.m.d') ?></span>
               </div>
               <p class="blogItem__title"><?php the_title(); ?></p>
             </a>
           </li>
           <?php endwhile; ?>
           <?php wp_reset_postdata(); ?>
           <?php else : ?>
           <?php endif; ?>
         </ul>
       </div>
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
    <?php get_template_part('sidebar2020'); ?>
  </div><!-- .l-blogContents -->
</main>
<script>
$(function () {
  var $lcLinks = $('.js-loadLcLink');
  if ($lcLinks.length) {
    var links = [];
    $lcLinks.each(function () {
      var $lcLink = $(this);
      links.push($lcLink.data('lclink'));
    });
    if (links.length) {
      links = 'url[]=' + links.join('&url[]=');
      $.ajax('https://launchcart.jp/get_post_info/?' + links)
        .done(function (data) {
          data.forEach(function (post, index) {
            var title = String(post.title).replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,'');
            var lcLinkContent = [
              '<a href="' + post.url + '" target="_blank">',
                '<figure class="lcLink__figure"><img src="' + post.thumbnail + '" alt="' + title + '"></figure>',
                '<div class="lcLink__text">',
                  '<h3 class="lcLink__title">' + title + '</h3>',
                  '<div class="lcLink__info">',
                    '<p class="lcLink__category">' + post.post_type + '</p>',
                    '<p class="lcLink__date">' + post.date + '</p>',
                  '</div>',
                '</div>',
              '</a>'
            ].join('');
            $($lcLinks[index]).html(lcLinkContent);
            $($lcLinks[index]).children('a[target="_blank"]').on('click', function () {
              window.open($(this).attr('href'));
              return false;
            })
          });
        });
    }
  }
});
</script>

<?php get_footer(); ?>
