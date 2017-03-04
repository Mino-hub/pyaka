<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
<div id="articleheader">
        <div id="articleheader__title" class="flex-wrap-start flex-align-center">
            <?php get_template_part("eyecatch"); ?>
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
        <?php get_template_part("articleheader-bc-category-list"); ?>
    </div>
    <div class="separater top1 bottom1"></div>
    <div class="sns">
        <?php get_template_part("sns"); ?>
    </div>
    <div class="separater top1 bottom1"></div>
    <div class="articleheader__next-pre flex-wrap-between">
        <?php get_template_part("next-pre"); ?>
    </div>
    <div class="separater top1 bottom1"></div>
    <div id="articleheader__metainfo">
        <div id="articleheader__metainfo__related-article">
            <?php get_template_part("articleheader-metainfo-related-article"); ?>
        </div>
        <div class="separater top1 bottom1"></div>
        <div id="articleheader__metainfo__tag">
            <?php get_template_part("articleheader-metainfo-related-tag"); ?>
        </div>
        <div class="separater top1 bottom1"></div>
    </div>
</div>
<div class="flex-wrap-center">
    <?php get_template_part("outline"); ?>
</div>
<div class="separater top1 bottom3"></div>
<div id="content">
    <?php the_content(); ?>
</div>
<?php get_template_part("bottom-unit"); ?>
<div class="separater top1 bottom1"></div>
<div class="sns">
    <?php get_template_part("sns"); ?>
</div>
<div class="separater top1 bottom1"></div>
<div id="articleafter">
    <div id="articleafter__related">
        <?php get_template_part("articleafter-related-article"); ?>
    </div>
</div>
<div class="separater top1 bottom1"></div>
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>
