<?php
/*---------------------
  パンくず
----------------------*/
function breadcrumb()
{
    $home = '<div class="breadcrumb"><li><a href="' . get_bloginfo('url') . '" >TOP > </a></li>';
    $page = '<div id="breadcrumb" class="breadcrumb"><li><a href="' . get_bloginfo('url') . '" >TOP > </a></li>';

    echo '<ul>';
    if (is_front_page()) {

    } else if (is_single()) {

        echo $home;
        the_title('<li>', '</li>');
    } else if (is_page()) {

        echo $page;
        the_title('<li>', '</li>');
    } else if (is_search()) {

        echo $home;
        echo '<li>「' . get_search_query() . '」の検索結果</li>';
    } else if (is_404()) {

        echo $home;
        echo '<li>ページが見つかりません</li>';
    }
    echo "</ul></div>";
}

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_month()) {
        $title = single_month_title('', false);
    }
    return $title;
});
