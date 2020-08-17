<sidebar class="l-sidebar">
    
            <div class="p-sidebar__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu_cancel_btn.png" class="c-menu__cancel__btn" id="js-close__menu">
                <h2 class="c-sidebar__title">Menu</h2>
                <div class="c-menu__list">
                    <?php wp_nav_menu(); ?> <!--サイドバーのメニューをgmenuから読み込み-->
                </div>
            </div>
        </sidebar>