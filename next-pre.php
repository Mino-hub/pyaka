<?php 
$next_article = get_next_post();
$pre_article = get_previous_post();

$next_url = get_permalink($next_article->ID);
$pre_url = get_permalink($pre_article->ID);
$next_postname = urldecode($next_article->post_name);
$pre_postname = urldecode($pre_article->post_name);

$next_html = "<a class=\"next\" href=\"{$next_url}\" rel=\"next\">{$next_postname}</a>";
$pre_html = "<a class=\"pre\" href=\"{$pre_url}\" rel=\"pre\">{$pre_postname}</a>";

echo $pre_html;
echo $next_html;
?>
