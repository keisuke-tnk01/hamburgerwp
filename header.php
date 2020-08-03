<!doctype html>
<html lang="en">

<head>
    <meta charser="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>hamburger</title>
    <meta name="description" content="">
    <script src="jquery-3.5.1.min.js"></script>
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
            <form role="search" method="get" id="searchform" class="p-search__form">
                <div>
                    <input type="text" class="c-search__text" placeholder="&#xf002;">
                        <label>
                            <input type="submit" class="c-search__submit" value="検索">
                        </label>
                </div>
            </form>
        </header>