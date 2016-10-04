<div class="is">
    <?php
    if(is_category()){
        $catId = get_query_var('cat'); 
        $cat = get_category($catId); 
        echo "カテゴリ 「{$cat->name}」";
    }
    else if(is_month()){
        $date = get_post_time( 'Y年m月' );
        echo  "アーカイブ 「{$date}」";
    }
    else if(is_tag()){
         single_tag_title();
    }
    else if(is_search()){
        $s = get_query_var('s'); 
        echo "「{$s}」の検索結果";
    }
    else if(is_home()){
        echo " 最近更新した記事";
    }
    ?>
</div>
