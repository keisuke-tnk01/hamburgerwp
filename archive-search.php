
<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <div class="u-open__menu__wrapper"></div>

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
                    <?php get_template_part('include/card'); ?>
                    <?php get_template_part('include/card'); ?>
                    <?php get_template_part('include/card'); ?>
                    <?php get_template_part('include/card'); ?>
                    <?php get_template_part('include/card'); ?>
                    
                    <!--<div class="c-card__container">
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
                    </div>-->
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

        <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->