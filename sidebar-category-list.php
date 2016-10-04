
<div id="sidebar__category-list">
<div class="sidebar__category-list-index">
    カテゴリリスト
</div>
<?php 
    $args = array(
        'orderby'                  => 'name',
        'order'                    => 'ASC',
    ); 
    $categories = get_categories($args);
    echo "<ul id=\"sidebar__category-list-ul\" class=\"flex-wrap-start\">";
    foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        echo "<li class=\"sidebar__category-list-ul-li\"><a href=\"{$category_link}\">{$category->name} ({$category->count})</a>";
    }
    echo "</ul>";
?>
</div>
