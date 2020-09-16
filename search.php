
<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <div class="u-open__menu__wrapper"></div>

        <main class="l-main">

        
            <div class="p-archive__hero">
                <h2 class="c-archive__main__title">Menu:<span class="c-archive__main__menu"><?php the_title(); ?></span></h2> 
            </div>
            

            <div class="p-archive__main">
                <div class="p-archive__container">
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
                <?php if(have_posts()): post_class();//テーマチェックエラーで追加
                    while(have_posts()): the_post(); ?>
                        <section class="p-card__wrapper">
                            <?php get_template_part('include/card'); ?>
                        </section>
                    <?php endwhile;
                else :
                    ?><p>表示する商品がありません</p><?php
                endif;
                ?>
                
                <!--ページネーション-->
                <section class="p-pagenation">

                    <p class="c-page__word__pre">前へ</p>
                    <?php wp_pagenavi(); ?> <!--WP page naviによるページネーションのプラグイン-->
                    <p class="c-page__word__nex">次へ</p>

                </section>
            </div>
        </main>

        <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->