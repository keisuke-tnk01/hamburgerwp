<div class="c-card__container">
        <?php the_post_thumbnail('array()', array('class' => "c-card__imgframe")); ?>
        
        <div class="p-card__contents">
        <h1 class="c-single__main__title">            
            <h2 class="c-card__title"><?php the_title(); ?></h2>
                <div class="c-card__txt">
                <h3>小見出しが入ります</h3>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                    <button type="submit" class="c-card__btn" onclick="location.href='<?php the_permalink( $post ); ?>'" >詳しく見る</button>
        </div>
</div>