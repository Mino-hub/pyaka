<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
<div id="articleheader">
        <div id="articleheader__title" class="flex-wrap-start flex-align-center">
            <h1 id="articleheader__title-h1">
                <?php the_title();?>
            </h1>
        </div>
    <div class="separater top3 bottom1"></div>
    <div id="articleheader__bc" class="flex-wrap-start">
        <ul id="articleheader__bc__date-ul">
            <li class="articleheader__bc__date-ul-li">
                <?php echo get_the_modified_date("Y/m/d H:i:s");?>
            </li>
        </ul>
    </div>
    <div class="separater top3 bottom1"></div>
</div>
<div class="sd flex-wrap-center">
    <?php get_template_part("outline"); ?>
</div>
<div class="separater top1 bottom3"></div>
<div id="content">
    <?php the_content(); ?>
</div>
<div class="separater top1 bottom1"></div>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>
