<?php
/**
 * Template name:Price
 */
get_header();
?>
<?php get_template_part('template-parts/slider/section-slider') ?>
<!-- end slider section -->
</div>


<!-- price section -->

<section class="price_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Plans
            </h2>
        </div>
        <div class="price_container ">
            <?php
            $plan_query = new WP_Query(array(
                'post_type' => 'plans',
                'post_status' => 'publish',
                'posts_per_page' => $args['posts_per_page'] ?? 4,
            ));

            if ($plan_query-> have_posts()) {
            while ($plan_query-> have_posts()) {
            $plan_query-> the_post(); ?>
            <div class="box">
                <div class="detail-box">
                    <h2> <span><?php
                            $plan_data = moashqar_get_plan_data($post->ID);
                            if ($plan_data['price'] > 0) {
                                echo __('$ ' , 'moashqar') . $plan_data['price'];
                            }else{
                                echo __('free', 'moashqar');
                            }
                            ?></span></h2>
                    <h6>
                        <?php the_title(); ?>
                    </h6>
                    <ul class="price_features">
                        <li>
                            <?php the_content(); ?>
                        </li>

                    </ul>
                </div>
                <div class="btn-box">
                    <a href="">
                        See Detail
                    </a>
                </div>
            </div>
            <?php }
                ?>

            <?php } ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!-- price section -->

<?php get_footer(); ?>
