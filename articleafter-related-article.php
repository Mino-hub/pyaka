<?php
$args = array(
    'posts_per_page'   => 8, 
    'orderby'          => 'rand',
    'post_type'        => array('post'),
    'post_status'      => 'publish'
);
$wp_query = new WP_Query($args);
?>

<div class="articleafter__related-article-index">
    こちらの記事もオススメ！！
</div>
<?php if (have_posts()) : ?>    
    <ul class="articleafter__related-article-ul flex-wrap-start">
    <?php while (have_posts()) : the_post(); ?>
        <li class="articleafter__related-article-ul-li">
            <a class="articleafter__related-article-ul-li-a flex-wrap-start" href="<?php the_permalink(); ?>">
                <div class="articleafter__related-article-ul-li-a-eyecatch">
                    <?php the_post_thumbnail([100,100]); ?>
                </div>
                <div class="articleafter__related-article-ul-li-a-title">
                    <?php the_title();?>
                </div>
            </a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; wp_reset_query();?>
