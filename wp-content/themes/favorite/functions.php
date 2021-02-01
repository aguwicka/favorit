<?php
#thunbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

require get_template_directory() . '/func-temp/func-adm.php';

#styles
require  get_template_directory() . '/func-temp/func-styles.php';

#customize
require  get_template_directory() . '/func-temp/func-customize.php';
