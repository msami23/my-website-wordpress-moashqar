<?php
/**
 * Template name:Homepage
 */

get_header(); ?>
<!-- slider section -->
<?php get_template_part('template-parts/slider/section-slider') ?>
<!-- end slider section -->
</div>

<!-- service section -->

<?php get_template_part('template-parts/services/section-services')?>
<!-- end service section -->

<!-- about section -->

<?php get_template_part('template-parts/about/section_about') ?>
<!-- end about section -->


<!-- server section -->

<?php get_template_part('template-parts/server/server-section') ?>
<!-- end server section -->

<!-- price section -->

<?php echo get_template_part('template-parts/plans/plan-section')?>
<!-- price section -->

<!-- client section -->
<?php echo get_template_part('template-parts/testimonial/testimonial-section')?>
<!-- end client section -->

<!-- contact section -->
<?php echo get_template_part('template-parts/contact/section-contact') ?>
<!-- end contact section -->

<?php get_footer(); ?>