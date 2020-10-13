<?php get_header(); ?>
  <div id="subVisual">
  <h1><?php if(is_singular('info')): ?>News

<?php else: ?>Blog<?php endif; ?></h1>

    </div>

<div id="contents" class="clearfix">

    <div class="submenu">

<?php
if ( in_category(1) || post_is_in_descendant_category(1) ) {
  $icon = "programmer";
 }

 if ( in_category(7) || post_is_in_descendant_category(7) ) {
  $icon = "designer";
 }

if ( in_category(6) || post_is_in_descendant_category(6) ) {
  $icon = "officer";
 }
if ( in_category(10) || post_is_in_descendant_category(10) ) {
  $icon = "news";
 }
if ( in_category(11) || post_is_in_descendant_category(11) ) {
  $icon = "release";
 }
if ( in_category(153) || post_is_in_descendant_category(153) ) {
  $icon = "seminar";
 }
?>
              <ul class="<?php echo $icon; ?>">
                <?php if(is_singular('info')): ?>
                    <li class="navi01"><a href="/item/news/">お知らせ</a></li>
                    <li class="navi02"><a href="/item/release/">リリース</a></li>
                    <li class="navi03"><a href="/item/seminar/">セミナー</a></li>
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
<?php else: ?>
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
<?php endif; ?>
    <div id="main" class="clearfix">
<div class="mainIn articleWrap">
    <div class="article">
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
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

                <?php related_posts(); ?>

<?php if(is_singular('info')): ?>
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


    <?php get_sidebar(); ?>
</div>
    <!--//main --></div>
  <!--//contents --></div>

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
