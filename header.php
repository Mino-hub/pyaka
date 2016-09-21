<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" id="thema-css" href="<?php  echo get_stylesheet_directory_uri()."/style.css?". time(); ?>" type="text/css" media="all">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<header>
    <nav class="">
        <ul class="nav__ul flex-wrap-center">
            <li class="top-img-wrap">
                <div id="top-img">
                    <a href="<?php echo site_url(); ?>">
                        <img class="top-svg" src="./wp-content/themes/pyakathema/pyaka/img/top.svg">
                    </a>
                </div>
            </li>
            <li class="nav__ul-li"><a href="<?php echo site_url(); ?>" class="">すべての記事</a></li>
            <li class="nav__ul-li"><a href="http://pyaka.net/?p=513" class="">このサイトについて</a></li>
            <li class="nav__ul-li">
                <form id="inner_serach" method="get" action="<?php bloginfo('url') ?>" />
                    <input type="text" class="serach-text" name="s" placeholder="検索したいキーワードを入力">
                </form>
            </li>
        </ul>
    </nav>
</header>
<div id="continer" class="flex-wrap-start">
<div id="main">
