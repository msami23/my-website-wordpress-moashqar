<?php
/**
 * Template name:Services
 */
get_template_part('template-parts/header/nav');
?>

<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Services
            </h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <?php
            $service_query = new WP_Query(array(
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => $args['posts_per_page'] ?? 3,
            ));

            if ($service_query-> have_posts()) {
            while ($service_query-> have_posts()) {
            $service_query-> the_post(); ?>

            <div class="col-md-6 col-lg-4">
                <div class="box ">
                    <div class="img-box">
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="detail-box">
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="">
                            Read More
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>

            <?php }
                ?>

            <?php } ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
