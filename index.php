<?php get_header(); ?>
    <?php get_template_part("is"); ?>
    <?php get_template_part("pagenation"); ?>
<div class="separater-bold top1 bottom1"></div>
<div class="sns">
    <?php get_template_part("sns"); ?>
</div>
<?php if (have_posts()) : ?>    
    <?php while (have_posts()) : the_post(); ?>
    <div class="separater-bold top1 bottom3"></div>
    <div id="articleheader">
        <div id="articleheader__title" class="flex-wrap-start flex-align-center">
            <?php get_template_part("eyecatch"); ?>
                <h1 id="articleheader__title-h1">
                    <a class="articleheader__title-a" href="<?php the_permalink(); ?>">
                        <?php the_title();?>
                    </a>
                </h1>
        </div>
    <div class="separater top3 bottom1"></div>
    <div id="articleheader__bc" class="flex-wrap-start">
        <ul id="articleheader__bc__date-ul">
            <li class="articleheader__bc__date-ul-li">
                <?php echo get_the_modified_date("Y/m/d H:i:s");?>
            </li>
        </ul>
        <?php get_template_part("articleheader-bc-category-list"); ?>
    </div>
    <div class="separater top1 bottom1"></div>
</div>
<?php endwhile; ?>
<?php endif; wp_reset_query(); ?>
<?php get_template_part("pagenation"); ?>
<div class="separater top1 bottom1"></div>
<?php get_footer(); ?>
