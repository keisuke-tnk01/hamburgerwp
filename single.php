
<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <div class="u-open__menu__wrapper"></div>

        <main class="l-main">

            <h1 class="c-single__main__title">
                <?php the_title(); ?>
            </h1>
            <?php the_post_thumbnail('array()', array('class' => "p-single__hero")); ?>
    
            <div class="p-single-page__mainbg">
                <div class="p-single-page__main">
                    <div class="p-single-page__topics">
                        <?php if(have_posts()): //post_class();テーマチェックエラーで追加も不要
                            while(have_posts()): the_post();
                                the_content(); the_tags();
                            endwhile;
                        else :
                            ?><p>表示する商品がありません</p><?php
                        endif;
                        ?>
                       <!--テーマチェックエラーによりループ内にthe_tags();を追加-->
                    </div>
                    <div class="page-links">
                        <?php wp_link_pages(); // 記事内ページャー ?>
                    </div>
                </div>
                
            </div>
        </main>

    
    <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->