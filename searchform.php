<form role="search" method="get" action="<?php echo home_url('/'); ?>" id="searchform" class="p-search__form">
    <div>
        <input type="text" class="c-search__text" placeholder="&#xf002;" name="s" id="s">
            <label>
                <input type="submit" class="c-search__submit" onclick="location.href='<?php the_permalink( $post ); ?>'" value="検索" id="searchsubmit">
            </label>
    </div>
</form>