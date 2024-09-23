<?php
/**
 * Template name:Contact
 */
get_template_part('template-parts/header/nav');
?>


<section class="contact_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Get In Touch
            </h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="form_container">
                    <?php echo do_shortcode('[contact-form-7 id="8c3fb8e" title="contact us"]') ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->


<?php get_footer(); ?>
