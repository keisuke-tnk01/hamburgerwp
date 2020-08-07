<!doctype html>
<html lang="<?php language_attributes(); ?>"><!--言語設定を自動的に出力-->

<head>
    <meta charser="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/style.css">
    
    
    
    <?php wp_head(); ?>

</head>

<body>
    <div class="u-body__wrrapper">
        <!--全画面右余白削除,sidebar高さをfooterまで埋める調整用-->
        <header class="l-header">
            
            <div id="js-open__menu" class="c-header__menu">
                <p>Menu</p>
            </div>
            <h1 class="c-site__title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </h1>
            <?php get_search_form(); ?>
        </header>
        