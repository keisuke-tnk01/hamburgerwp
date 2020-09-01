<?php 
    add_theme_support( 'menus' ); //WP管理画面の外観に”メニュー”が追加される
    add_theme_support( 'title-tag' ); //タイトルを出力
    add_theme_support( 'post-thumbnails' );//アイキャッチ画像を扱えるようにする

    function hamburger_title( $title ) {
        //投稿・固定ページにかかわらず、サイトのフロントページが表示されているかを判定。そしてメインブログページが表示されているかを判定
        if ( is_front_page() && is_home() ) {
            $title = get_bloginfo('name', 'display');//トップページならこちら
        } 
        //個別投稿のページかを判定。is_single()、is_page() 、is_attachment() のいずれかに該当する場合に真を返す
        elseif ( is_singular() ) {
            $title = single_post_title('', false);//シングルページならこちら
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
        wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array() );//以下3種のフォントの読み込み
        wp_enqueue_style('M+PLUS+1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap', array() );
        wp_enqueue_style('M+PLUS+Rounded+1c', '//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap', array() );
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');//fontawesomeの読み込み
        wp_enqueue_style('style', get_template_directory_uri(). './css/style.css', array(), '1.0.0'); //ver.は作成者の中で管理
        wp_enqueue_style('style', get_template_directory_uri(). 'style.css', array(), '1.0.0'); //ver.は作成者の中で管理
        wp_deregister_script('jquery');//WP本体のjqueryを登録解除
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1');
        wp_enqueue_script('scriptjs', get_template_directory_uri(). '/script.js', array('jquery'), '1.0.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script');
    

    //editor-style.cssを読み込み
    function hamburger_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
    }
    add_action( 'admin_init', 'hamburger_theme_add_editor_styles' );

    //自動挿入されるGutenberg用CSSを削除
    //add_action( 'wp_enqueue_scripts', 'remove_block_library_style' );
    //function remove_block_library_style() {
	//wp_dequeue_style( 'wp-block-library' );
	//wp_dequeue_style( 'wp-block-library-theme' );
    //}

    //WP上部管理バーを非表示
    //add_filter( 'show_admin_bar', '__return_false' );