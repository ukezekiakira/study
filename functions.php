<?php 
    function sakura_theme_setup() {
    add_theme_support('post-thumbnails'); 
    add_image_size('category-thumb',650.9999);
    }

        add_action("after_setup_theme","sakura_theme_setup");

    
    function sakura_theme_link() {
        wp_enqueue_style("common-css",get_template_directory_uri() . "/./css/style.css" );

        wp_enqueue_style("pc-css",get_template_directory_uri() . "/./css/style_pc.css",array(),"1.0.0","screen and ( min-width:769px )" );
        wp_enqueue_style("sp-css",get_template_directory_uri() . "/./css/style_sp.css",array(),"1.0.0","screen and ( max-width:768px )");
        wp_enqueue_style("drawer","https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css");


        wp_enqueue_script("jquery",get_template_directory_uri() . "js/jquery-3.2.1.min.js",array(),"1.0.0",true);
        wp_enqueue_script("iscroll", "https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js",array("jQuery"),"1.0.0",true);
        wp_enqueue_script("drawer", "https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js",array("jQuery","iscroll"),"1.0.0",true);
        wp_enqueue_script("common",get_template_directory_uri() . "/js/common.js",array("jQuery","iscroll","drawer"),"1.0.0",true);

    }
add_action("wp_enqueue_scripts","sakura_theme_link");







     
function sakura_theme_init() {
    register_post_type("daily", [ // 投稿タイプ名の定義
        'labels' => [
            'name'=> '日報', // 管理画面上で表示する投稿タイプ名
           
        ],
        'public'=> true,  // 投稿タイプをpublicにするか
        'show_in_rest'  => true,
        
    ]);
}


        add_action("init","sakura_theme_init");
        
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
// アーカイブ昨日を実行するための記述
