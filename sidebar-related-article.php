<?php
$args = array(
    'posts_per_page'   => 20, 
    'orderby'          => 'rand',
    'post_type'        => array('post'),
    'post_status'      => 'publish'
);
$wp_query = new WP_Query($args);
?>

<div id="sidebar__related-article">
    <div class="sidebar__related-article-index">
        最近更新された記事
    </div>
    <?php if (have_posts()) : ?>    
        <ul class="sidebar__related-article-ul flex-wrap-start">
        <?php while (have_posts()) : the_post(); ?>
            <li class="sidebar__related-article-ul-li">
                <a class="sidebar__related-article-ul-li-a flex-wrap-start" href="<?php the_permalink(); ?>">
                    <div class="sidebar__related-article-ul-li-a-eyecatch">
                        <?php the_post_thumbnail([100,100]); ?>
                    </div>
                    <div class="sidebar__related-article-ul-li-a-title">
                        <?php the_title();?>
                    </div>
                </a>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; wp_reset_query();?>
</div>
