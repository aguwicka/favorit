<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action('wp_ajax_nopriv_filter' , 'filter_ajax');
add_action('wp_ajax_filter' , 'filter_ajax');

function filter_ajax(){


    $category = $_POST['category'];

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8
    );

    if (isset($category)) {
        $args['category__in'] = array($category);
    }?>

    <div uk-filter="target: .js-filter">

        <ul class="uk-subnav uk-subnav-pill games__filter">
            <li class="uk-active" uk-filter-control><a href="#">all</a></li>
            <li uk-filter-control=".tag-popular"><a href="#">popular</a></li>
            <li uk-filter-control=".tag-new"><a href="#">new</a></li>
            <li uk-filter-control=".tag-bonuses"><a href="#">bonuses</a></li>
        </ul>

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-4@m uk-text-center filter__content" uk-grid>
            <?php
                $query = new WP_Query($args);
                if ($query->have_posts()):
                    while ($query->have_posts()) : $query->the_post();?>
                        <li class="tag-popular">
                            <a href="<?php the_permalink();?>"><?= get_the_post_thumbnail()?></a>
                        </li>
                    <?php endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </ul>

    </div>



   <?php die();
}