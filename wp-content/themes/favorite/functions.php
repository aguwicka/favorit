<?php
#thunbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

require_once get_template_directory() . '/func-temp/func-adm.php';

#styles
require_once  get_template_directory() . '/func-temp/func-styles.php';

#customize
require_once  get_template_directory() . '/func-temp/func-customize.php';

#ajax
require_once  get_template_directory() . '/func-temp/callback-ajax.php';