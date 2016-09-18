    <ul class="articleheader__bc__category-ul">
        <?php
        $category=get_the_category();
        foreach ($category as $item) {
            $link=get_category_link($item->term_id);
            echo "<li class=\"articleheader__bc__category-ul-li\"><a class=\"articleheader__bc__category-ul-li-a\" href=\"{$link}\">{$item->name}</a></li>";
        }

        ?>
    </ul>
