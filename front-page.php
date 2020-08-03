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

        <sidebar class="l-sidebar">
            <div class="p-sidebar__wrapper">
                <img src="images/menu_cancel_btn.png" class="c-menu__cancel__btn" id="js-close__menu">
                <h2 class="c-sidebar__title">Menu</h2>
                <div class="c-menu__list">
                    <div class="c-burger__menu">
                        <h3>バーガー</h3>
                        <p>ハンバーガー</p>
                        <p>チーズバーガー</p>
                        <p>テリヤキバーガー</p>
                        <p>アボカドバーガー</p>
                        <p>フィッシュバーガー</p>
                        <p>ベーコンバーガー</p>
                        <p>チキンバーガー</p>
                    </div>
                    <div class="c-side__menu">
                        <h3>サイド</h3>
                        <p>ポテト</p>
                        <p>サラダ</p>
                        <p>ナゲット</p>
                        <p>コーン</p>
                    </div>
                    <div class="c-drink__menu">
                        <h3>ドリンク</h3>
                        <p>コーラ</p>
                        <p>ファンタ</p>
                        <p>オレンジ</p>
                        <p>アップル</p>
                        <p>紅茶（Ice/Hot）</p>
                        <p>コーヒー（Ice/Hot）</p>
                    </div>
                </div>
            </div>
        </sidebar>

        <div class="u-open__menu__wrapper"></div>

        <header class="l-header">

            <div id="js-open__menu" class="c-header__menu">
                <p>Menu</p>
            </div>
            <h1 class="c-site__title">Hamburger</h1>
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
            <div class="p-page__hero">
                <h2 class="c-main__title">ダミーサイト</h2>
            </div>
            <div class="p-main__container">
                <div class="p-takeOut__container">
                    <h2>Take Out</h2>
                    <div class="c-content1">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <div class="c-content2">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </div>
                <div class="p-eatIn__container">
                    <h2>Eat In</h2>
                    <div class="c-content1">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <div class="c-content2">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </div>
            </div>
            <section>
                <div class="p-map__container">
                    <div class="c-map__comment">
                        <h2>見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </div>
                </div>
            </section>
        </main>

        <footer class="l-footer">
            <h2 class="p-shop__info">ショップ情報|ヒストリー</h2>
            <p class="p-copyright">Copyright : RaiseTech</p>
        </footer>

    </div>

    <script src="script.js"></script>
    </div>
</body>

</html>