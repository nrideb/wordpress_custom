<?php



    register_nav_menus(
        array('primary-menu'=>'Header Menu')
    ); 

    add_theme_support( 'post-thumbnails' ); // Add
    add_theme_support('custom-header');      // Header Image and Custom Header Text

    register_sidebar(
        array(
            'name'=>'sidebar location',
            'id'=>'sidebar'
        )
        );

    add_theme_support('custom-background');
    add_post_type_support('page','excerpt');

function simple_basic_theme_load_script(){

        wp_enqueue_style("stylecss", get_template_directory_uri()."/css/style.css");
        wp_enqueue_style("fontawsm", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        wp_enqueue_style("aos", "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css");
        wp_enqueue_style("theme-style", get_stylesheet_uri(), array(), "1.0", "all");
        wp_enqueue_script("aosjs", "https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"); 
        wp_enqueue_style("aoscss", "https://unpkg.com/aos@next/dist/aos.css");
        wp_enqueue_script("fontjs", "https://kit.fontawesome.com/a076d05399.js"); 
        wp_enqueue_script("scriptjs", get_template_directory_uri()."/js/script.js"); 

    }

    add_action("wp_enqueue_scripts", "simple_basic_theme_load_script");

    add_filter('change_text','change_data',10,1);
    function  change_data($str){
        $str="Searh here";
        return $str;
    }

    
    ?>
