<?php
get_header();
global $cat;
?>

    <section class="slider-section">
        <div class="uk-position-relative uk-visible-toggle" tabindex="-1"  uk-slideshow="ratio: false">

            <ul class="uk-slideshow-items uk-slider-wrapper">
                <li>
                    <img src="<?php bloginfo('template_directory');?>/assets/img/bg_slider_1.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-panel slider-content">
                        <h3>More than 200 000 players</h3>
                        <h1>500 FREE SPINS +20 BONUS FOR QUICK START</h1>
                        <a href="">PLAY NOW</a>
                    </div>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory');?>/assets/img/bg_slider_1.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-panel slider-content">
                        <h3>More than 200 000 players</h3>
                        <h1>500 FREE SPINS +20 BONUS FOR QUICK START</h1>
                        <a href="">PLAY NOW</a>
                    </div>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory');?>/assets/img/bg_slider_1.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-panel slider-content">
                        <h3>More than 200 000 players</h3>
                        <h1>500 FREE SPINS +20 BONUS FOR QUICK START</h1>
                        <a href="">PLAY NOW</a>
                    </div>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory');?>/assets/img/bg_slider_1.jpg" alt="" uk-cover>
                    <div class="uk-position-center uk-panel slider-content">
                        <h3>More than 200 000 players</h3>
                        <h1>500 FREE SPINS +20 BONUS FOR QUICK START</h1>
                        <a href="">PLAY NOW</a>
                    </div>
                </li>
            </ul>
            <ul class="uk-slideshow-nav uk-dotnav uk-slider-nav uk-flex-center"></ul>
        </div>
    </section>
    <section>
        <div class="slots__wrapper">
            <div class="slots__nav categories">
                <?php
                $cat_args = array(
                    'exclude' => array(1, 2),
                    'option_all' => 'All'
                );

                $categories = get_categories($cat_args);

                foreach( $categories as $cat):?>
                    <a href="<?= get_category_link($cat->term_id) ?>" data-category="<?= $cat->term_id?>" class="slot__item uk-width-1-6">
                        <div class="slots__nav__item">
                            <?php the_field('category-image', $cat)?>
                            <p><?php echo $cat->name ?></p>
                        </div>
                    </a>
                <? endforeach;?>
            </div>
            <div class="slots__filter">
                <div uk-filter="target: .js-filter">

                    <ul class="uk-subnav uk-subnav-pill games__filter">
                        <li class="uk-active" uk-filter-control><a href="#">all</a></li>
                        <li uk-filter-control=".tag-popular"><a href="#">popular</a></li>
                        <li uk-filter-control=".tag-new"><a href="#">new</a></li>
                        <li uk-filter-control=".tag-bonuses"><a href="#">bonuses</a></li>
                    </ul>

                    <ul class="js-filter uk-child-width-1-2 uk-child-width-1-4@m uk-text-center filter__content" uk-grid>
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 8
                            );
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
            </div>
            <div class="show__more">
                <a href="">show more <img src="<?php bloginfo('template_directory');?>/assets/img/icon_show_more.svg" alt=""></a>
            </div>
        </div>
    </section>
    <section>
        <div class="review__wrap">
            <h2>PLAYER WORDS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <div class="review__cards">
                <?php
                if( have_rows('review') ):
                    while( have_rows('review') ) : the_row();?>
                        <div class="card uk-width-1-2">
                            <img class="card__img" src="<?php the_sub_field('photo');?>" alt="">
                            <h3 class="card__name"><?php the_sub_field('name');?></h3>
                            <p class="card__decs"><?php the_sub_field('description');?></p>
                            <div class="card__rate">
                                <?php
                                if( have_rows('rates') ):
                                    while( have_rows('rates') ) : the_row();?>
                                        <img src="<?php the_sub_field('rate');?>" alt="">
                                   <?php endwhile;
                                endif;?>
                            </div>
                        </div>
                    <?endwhile;
                endif;?>
            </div>
        </div>
    </section>
    <section>
        <div class="news__wrap">
            <h2>LATEST NEWS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <div class="news__card_wrap">
                <div class="news__card uk-width-1-3">
                    <img class="news__image" src="<?php bloginfo('template_directory');?>/assets/img/img_1_5_1.png" alt="">
                    <div class="news__info">
                        <p class="news__date">20 July, 2020</p>
                        <p class="news__title">News 1</p>
                        <p class="news__content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500\nFR</p>
                        <a class="news__more" href="">READ MORE</a>
                    </div>
                </div>
                <div class="news__card uk-width-1-3">
                    <img class="news__image" src="<?php bloginfo('template_directory');?>/assets/img/img_1_5_1.png" alt="">
                    <div class="news__info">
                        <p class="news__date">20 July, 2020</p>
                        <p class="news__title">News 1</p>
                        <p class="news__content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500\nFR</p>
                        <a class="news__more" href="">READ MORE</a>
                    </div>
                </div>
                <div class="news__card uk-width-1-3">
                    <img class="news__image" src="<?php bloginfo('template_directory');?>/assets/img/img_1_5_1.png" alt="">
                    <div class="news__info">
                        <p class="news__date">20 July, 2020</p>
                        <p class="news__title">News 1</p>
                        <p class="news__content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500\nFR</p>
                        <a class="news__more" href="">READ MORE</a>
                    </div>
                </div>
            </div>
            <img class="news__back" src="<?php bloginfo('template_directory');?>/assets/img/bg_red_news.png" alt="">
        </div>
    </section>

<?php get_footer();?>