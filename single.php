
<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <div class="u-open__menu__wrapper"></div>



        <main class="l-main">

            <!--<div class="p-single__hero">-->
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="c-single__main__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </div>
                <?php endwhile; else : ?><p>表示する商品がありません</p>
                <?php endif; ?>
                <!--<h1 class="c-single__main__title"></h1>-->
            <!--</div>-->
            
    
            <div class="p-single-page__mainbg">
                <div class="p-single-page__main">
                    <div class="p-single-page__topics">
                        <h2>見出しh2</h2>
                        <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                        </p>
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h3>見出しh3</h3>
                        <h4>見出しh4</h4>
                        <h5>見出しh5</h5>
                        <h6>見出しh6</h6>
                    </div>
                    <div class="p-single-page__article">
                        <div class="c-single-page__blockquote">
                            <div class="c-single-page__blockquote__txt">
                                <p class="c-quote__txt1">
                                    Blockquote　引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                </p>
                                <p class="c-quote__txt2">出典元 : <a href="#">〇〇〇〇〇〇〇〇〇〇〇〇</a></p>
                            </div>
                        </div>

                        <img class="c-single-page__wide__imgframe">

                        <div class="c-single-page__card__container1">
                            <div class="c-single-page__card__txt">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="c-single-page__card__img">
                                <img class="c-single-page__card__imgframe">
                            </div>
                        </div>

                        <div class="c-single-page__card__container2">
                            <div class="c-single-page__card__txt">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="c-single-page__card__img">
                                <img class="c-single-page__card__imgframe">
                            </div>
                        </div>


                        <img class="c-single-page__middle__imgframe">

                        <div class="c-single-page__grid">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                            <img class="c-single-page__big__imgframe">
                        </div>
                        <div class="c-single-page__list1">
                            <ol class="c-list__item">
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ol>
                            <ol class="c-list__item">
                                <li class="c-list_middle">リスト2リスト2リスト2</li>
                                <li class="c-list_middle">リスト2リスト2リスト2</li>
                            </ol>
                            <ol class="c-list__item">
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ol>
                        </div>
                        <div class="c-single-page__list2">
                            <ul class="c-list__item">
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ul>
                            <ul class="c-list__item">
                                <li class="c-list_middle">リスト2リスト2リスト2</li>
                                <li class="c-list_middle">リスト2リスト2リスト2</li>
                            </ul>
                            <ul class="c-list__item">
                                <li>リストリストリスト</li>
                                <li>リストリストリスト</li>
                            </ul>
                        </div>
                        <div class="c-single-page__html__container">
                            <p>html</p>
                            <p>　head</p>
                            <p>　/head</p>
                            <p>　body</p>
                            <p>　/body</p>
                            <p>/html</p>
                        </div>
                        <table class="c-single-page__table">
                            <tr>
                                <td class="c-td1">テーブル</td>
                                <td class="c-td2">テーブル</td>
                            </tr>
                            <tr>
                                <td class="c-td1">テーブル</td>
                                <td class="c-td2">テーブル</td>
                            </tr>
                            <tr>
                                <td class="c-td1">テーブル</td>
                                <td class="c-td2">テーブル</td>
                            </tr>
                            <tr>
                                <td class="c-td1">テーブル</td>
                                <td class="c-td2">テーブル</td>
                            </tr>
                        </table>
                        <label>
                            <input type="submit" class="c-single-page__btn" value="ボタン">
                        </label>
                        <p class="c-under__btn__txt">boldboldboldboldboldboldbold</p>
                    </div>
                </div>
            </div>
        </main>

    
    <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->