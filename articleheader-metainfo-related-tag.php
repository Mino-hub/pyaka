<?php
    $posttags = get_the_tags();
    echo "<ul class=\"articleheader__metainfo__tag-ul flex-wrap-start\">";
    if ($posttags) {
        foreach($posttags as $tag) {
            echo "<li class=\"articleheader__metainfo__tag-ul-li\"><a class=\"articleheader__metainfo__tag-ul-li-a\" href=\"". get_tag_link($tag->term_id) ."\">" . $tag->name . "</a></li>";
        }
    }
    echo "</ul>";
?>
