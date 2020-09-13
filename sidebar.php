<sidebar class="l-sidebar">

            <div class="p-sidebar__wrapper">
                
                <img src="<?php echo esc_url( get_template_directory_uri()); ?>/images/menu_cancel_btn.png" class="c-menu__cancel__btn" id="js-close__menu"><!--エスケープ処理-->
                <h2 class="c-sidebar__title">Menu</h2>
                <div class="c-menu__list">
                <?php wp_nav_menu(); ?>

                    <?php
                    if ( is_active_sidebar( 'category_widget' ) ) :
                            
                            
                        else:
                    ?>
                    
                    <div class="widget">
                        <h2>Menu</h2>
                        <p>ウィジットは設定されていません。</p>
                    </div>
                    
                    <?php endif; ?>
                </div>
                    
                    
            </div>
        </sidebar>