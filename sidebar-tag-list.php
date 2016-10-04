
<div id="sidebar__tag-list">
<div class="sidebar__tag-list-index">
    タグリスト
</div>
<?php 
    $args = array(
        'orderby'                  => 'count',
        'order'                    => 'desc',
        'number'                   => 150,

    ); 
    $terms = get_terms("post_tag",$args);
    echo "<ul id=\"sidebar__tag-list-ul\" class=\"flex-wrap-start\">";
    foreach ($terms as $tag) {
        $tag_link = get_tag_link($tag->term_id);
        echo "<li class=\"sidebar__tag-list-ul-li\"><a href=\"{$tag_link}\">{$tag->name}</a>";
    }
    echo "</ul>";
?>
</div>
