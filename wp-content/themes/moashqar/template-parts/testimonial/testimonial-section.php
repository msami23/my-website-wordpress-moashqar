<section class="client_section ">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Testimonial
            </h2>
            <p>
                Even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
            </p>
        </div>
    </div>
    <div class="container px-0">
        <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <?php $theme_image = get_theme_mod('hero_section_testimonial_1_setting' , get_template_directory_uri() . '/assets/images/client.jpg',) ?>

                                        <img src="<?php echo $theme_image?>" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    <?php echo get_theme_mod('hero_section_setting_testimonial_1_name') ?>
                                                </h5>
                                                <h6>
                                                   <?php echo  get_theme_mod('hero_section_setting_testimonial_1_job')?>
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            <?php echo get_theme_mod('hero_section_setting_testimonial_1_description') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <?php $theme_image = get_theme_mod('hero_section_testimonial_2_setting' , get_template_directory_uri() . '/assets/images/client.jpg',) ?>

                                        <img src="<?php echo $theme_image?>" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    <?php echo get_theme_mod('hero_section_setting_testimonial_2_name') ?>
                                                </h5>
                                                <h6>
                                                    <?php echo  get_theme_mod('hero_section_setting_testimonial_2_job')?>

                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            <?php echo get_theme_mod('hero_section_setting_testimonial_1_description') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>