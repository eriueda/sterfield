<?php get_header(); ?>
    <div id="subVisual">
        <h1>News</h1>   
    </div>
    <div id="contents" class="clearfix">
    <div class="submenu">
<?php 
        if(is_tax()){
                        $taxonomy_var = get_post_taxonomies($post->id); // ターム取得のためのタクソノミ
        $terms_array = get_the_terms($post->id, $taxonomy_var); // スラグ取得のためのターム配列
        $slug_var = $terms_array[0]->slug; // 配列からスラグ取得
        }else{
        $slug_var = "";
        }
        ?>
                <ul class="<?php echo $slug_var; ?>">
                    <li class="navi01"><a href="<?php get_bloginfo("url"); ?>/item/news/">お知らせ</a></li>
                    <li class="navi02"><a href="<?php get_bloginfo("url"); ?>/item/release/">リリース</a></li>
                    <li class="navi03"><a href="<?php get_bloginfo("url"); ?>/item/seminar/">セミナー</a></li>
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

            <?php if(is_tax( 'item', 'seminar' )):?>
                <ul class="art-list seminarList">
                <li class="head">
                    <dl><dt>開催日</dt><dd>内容</dd></dl>  
                </li>
                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                <li>
                    <dl>
                        <dt><?php echo CFS()->get('seminar_date'); ?></dt>
                        <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
                    </dl>
                </li>
                <?php endwhile; wp_reset_query(); endif; ?>
            <?php else: ?>
                <ul class="art-list">
                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                <?php 
                    $taxonomy_var = get_post_taxonomies($post->id); // ターム取得のためのタクソノミ
                    $terms_array = get_the_terms($post->id, $taxonomy_var); // スラグ取得のためのターム配列
                    $slug_var = $terms_array[0]->slug; // 配列からスラグ取得
                    $label = $terms_array[0]->name;
                ?>
                <li class="<?php echo $slug_var; ?>">
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
                <?php endwhile; wp_reset_query(); endif; ?>
            <?php endif; ?>

            

        </ul>
    </div>
        <?php get_sidebar(); ?>
    </div>
    <!--//main --></div>
    <!--//contents --></div>
    <?php get_footer(); ?>
