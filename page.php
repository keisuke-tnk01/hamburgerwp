
<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <div class="u-open__menu__wrapper"></div>
        
        <main class="l-main">
            <div class="p-page-hero">
                <h1 class="c-single__main__title"><?php the_title(); ?>:</h1>
            </div>
            <?php if(have_posts()): post_class();//テーマチェックエラーで追加
                    while(have_posts()): the_post();
                        
                        the_content();
                    endwhile;
                else :
                    ?><p>表示する商品がありません</p><?php
                endif;
            ?>
            <div class="page-links">
                <?php wp_link_pages(); // 記事内ページャー ?>
            </div>
        </main>

        <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->