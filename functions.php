<?php 
    function sakura_theme_setup() {
    add_theme_support('post-thumbnails'); 
    add_image_size('category-thumb',650.9999);
    }

        add_action("after_setup_theme","sakura_theme_setup");

    
    function sakura_theme_link() {

        wp_enqueue_style("pc-css",get_template_directory_uri() . "/./css/style_pc.css",array(),"1.0.0","screen and ( min-width:769px )" );
        wp_enqueue_style("sp-css",get_template_directory_uri() . "/./css/style_sp.css",array(),"1.0.0","screen and ( max-width:768px )");


        wp_enqueue_script("common",get_template_directory_uri() . "/js/common.js",array(),"1.0.0",true);

    }
add_action("wp_enqueue_scripts","sakura_theme_link");