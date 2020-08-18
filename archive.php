
<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <div class="u-open__menu__wrapper"></div>

        <main class="l-main">

        
            <div class="p-archive__hero">
                <h2 class="c-archive__main__title">Menu:<span class="c-archive__main__menu"><?php single_cat_title(); ?></span></h2> 
            </div>
            

            <div class="p-archive__main">
                <div class="p-archive__container">
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
                <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>
                        <section class="p-card__wrapper">
                            <?php get_template_part('include/card'); ?>
                        </section>
                    <?php endwhile;
                else :
                    ?><p>表示する商品がありません</p><?php
                endif;
                ?>
                

                <section class="p-pagenation">
                    <p class="c-page__view">page 1/10</p>
                    <div class="c-page__previous">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/archive_page_previous.png" class="c-page__logo">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/archive_page_next.png" class="c-page__logo">
                    </div>
                </section>
            </div>
        </main>

        <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->