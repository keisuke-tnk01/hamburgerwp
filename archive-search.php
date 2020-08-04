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

        <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <div class="u-open__menu__wrapper"></div>

        <header class="l-header">
            <div id="js-open__menu" class="c-header__menu">
                <p>Menu</p>
            </div>
            <p class="c-site__title">Hamburger</p>
            <form role="search" method="get" id="searchform" class="p-search__form">
                <div>
                    <input type="text" class="c-search__text" placeholder="&#xf002;">
                    <label>
                        <input type="submit" class="c-search__submit" value="検索">
                    </label>
                </div>
            </form>
        </header>

        <main class="l-main">

            <div class="p-archive__hero">
                <h2 class="c-archive__main__title">Search:</h2>
                <h3 class="c-archive__main__menu">チーズバーガー</h3>
            </div>
            <div class="p-archive__main">
                <div class="p-archive__container">
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>

                <section class="p-card__wrapper">
                    <div class="c-card__container">
                        <img class="c-card__imgframe">
                        <div class="p-card__contents">
                            <h2 class="c-card__title">見出しが入ります</h2>
                            <div class="c-card__text">
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <label class="c-card__btn">
                                <input type="submit" class="c-card__search__submit" value="詳しく見る">
                            </label>
                        </div>
                    </div>
                    <div class="c-card__container">
                        <img class="c-card__imgframe">
                        <div class="p-card__contents">
                            <h2 class="c-card__title">見出しが入ります</h2>
                            <div class="c-card__text">
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <label class="c-card__btn">
                                <input type="submit" class="c-card__search__submit" value="詳しく見る">
                            </label>
                        </div>
                    </div>
                    <div class="c-card__container">
                        <img class="c-card__imgframe">
                        <div class="p-card__contents">
                            <h2 class="c-card__title">見出しが入ります</h2>
                            <div class="c-card__text">
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <label class="c-card__btn">
                                <input type="submit" class="c-card__search__submit" value="詳しく見る">
                            </label>
                        </div>
                    </div>
                    <div class="c-card__container">
                        <img class="c-card__imgframe">
                        <div class="p-card__contents">
                            <h2 class="c-card__title">見出しが入ります</h2>
                            <div class="c-card__text">
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <label class="c-card__btn">
                                <input type="submit" class="c-card__search__submit" value="詳しく見る">
                            </label>
                        </div>
                    </div>
                    <div class="c-card__container">
                        <img class="c-card__imgframe">
                        <div class="p-card__contents">
                            <h2 class="c-card__title">見出しが入ります</h2>
                            <div class="c-card__text">
                                <h3>小見出しが入ります</h3>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                            <label class="c-card__btn">
                                <input type="submit" class="c-card__search__submit" value="詳しく見る">
                            </label>
                        </div>
                    </div>
                </section>

                <section class="p-pagenation">
                    <p class="c-page__view">page 1/10</p>
                    <div class="c-page__previous">
                        <img src="/images/archive_page_previous.png" class="c-page__logo">
                        <button type="button" class="c-page__word">前へ</button>
                    </div>
                    <div class="c-page__container">
                        <a href="#">
                            <div class="c-page_number">
                                <p>1</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>2</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>3</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>4</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>5</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>6</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>7</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>8</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="c-page_number">
                                <p>9</p>
                            </div>
                        </a>
                    </div>
                    <div class="l-page_next">
                        <button type="button" class="c-page__word">次へ</button>
                        <img src="/images/archive_page_next.png" class="c-page__logo">
                    </div>
                </section>
            </div>
        </main>

        <footer class="l-footer">
            <h2 class="p-shop__info">ショップ情報|ヒストリー</h2>
            <p class="p-copyright">Copyright : RaiseTech</p>
        </footer>

    </div>

    <script src="script.js"></script>

</body>

</html>