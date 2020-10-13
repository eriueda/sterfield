<div class="l-blogSidenavi">
  <div class="blogSidenavi__content">
    <h2 class="blogSidenavi__title">人気の記事</h2>
    <ul class="blogSidenavi__list">
      <?php if (function_exists ( 'wpp_get_mostpopular' ) ) {
        wpp_get_mostpopular(
          array(
            'limit' => 5,
            'range' => "monthly",
            'stats_category' => 1
          )
        );
      } ?>
    </ul>
  </div>
  <div class="blogSidenavi__content">
    <h2 class="blogSidenavi__title">越境EC関連の記事</h2>
    <ul class="blogSidenavi__list launchCartJP">
      <script>
        $.getJSON('https://launchcart.jp/get_post_info/?latest&post_per_page=5')
        .done(function (json) {
          var posts = '';
          for (var i = 0; i < json.length; i++) {
            posts += '<li class="blogSidenavi__item">'+
                        '<a href="'+json[i].url+'" target="_blank">'+
                          '<figure class="blogSidenavi__item__figure">'+
                            '<img src="'+json[i].thumbnail+'">'+
                          '</figure>'+
                          '<p class="blogSidenavi__item__title">'+json[i].title+'</p>'+
                        '</a>'+
                      '</li>'
          }
          $('.launchCartJP').html(posts);
        });
      </script>
    </ul>
  </div>
  <div class="blogSidenavi__content">
    <h2 class="blogSidenavi__title category"> カテゴリーから探す</h2>
    <?php
    if((get_post_type() == 'info') ||  is_tax() ) {
      $terms_name = 'item';
      $term_root_id = 0;
    } else {
      $terms_name = 'category';
      $term_root_id = 38;
    } ?>
    <ul class="searchCategory__list">
    <?php $categories = get_terms($terms_name, array(
      'orderby' => 'id',
      'parent' => $term_root_id
    ));
    foreach($categories as $category) { ?>
      <li class="searchCategory__item">
        <h3 class="searchCategory__categoryName is-close <?php echo $category->slug ?>">
          <a href="<?php echo get_term_link($category->term_id, $terms_name); ?>"><?php echo $category->name ?></a>
        </h3>
          <?php $children = get_terms($terms_name, array(
            'orderby' => 'id',
            'parent' => $category->term_id
          ));
          if (count(category)) { ?>
          <ul class="searchCategory__sublist">
            <?php foreach($children as $child) { ?>
                <li class="searchCategory__subitem">
                  <a href="<?php echo get_term_link($child->term_id, $terms_name); ?>"><?php echo $child->name ?></a>
                </li>
            <?php } ?>
          </ul>
        <?php } ?>
      </li>
    <?php } ?>
    </ul>
  </div>
  <div class="blogSidenavi__content">
    <h2 class="blogSidenavi__title">月から探す</h2>
    <div class="searchMonth__list">
      <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
        <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
        <?php wp_get_archives( 'type=monthly&limit=12&format=option&show_post_count=1' ); ?>
      </select>
    </div>
  </div>
<script type="text/javascript">
  $(".searchCategory__categoryName").click(function () {
    $(this).toggleClass("is-open");
    $(this).toggleClass("is-close");
    $(this).next().slideToggle();
  });
</script>
