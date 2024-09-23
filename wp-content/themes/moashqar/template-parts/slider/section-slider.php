<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    <?php echo get_theme_mod('hero_section_setting_slider1_title') ?> <br>

                                </h1>
                                <p>
                                    <?php echo get_theme_mod('hero_section_setting_slider1_description') ?> </p>
                                <div class="btn-box">
                                    <a href="" class="btn-1">
                                        Read More
                                    </a>
                                    <a href="" class="btn-2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class=" col-lg-10 mx-auto">
                                    <div class="img-box">
                                        <?php $theme_image = get_theme_mod('hero_section_slider1_setting' , get_template_directory_uri() . '/assets/images/slider-img.png',) ?>

                                        <img src="<?php echo $theme_image ?>" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    <?php echo get_theme_mod('hero_section_setting_slider2_title') ?>

                                </h1>
                                <p>
                                    <?php echo get_theme_mod('hero_section_setting_slider2_description') ?> </p>
                                <div class="btn-box">
                                    <a href="" class="btn-1">
                                        Read More
                                    </a>
                                    <a href="" class="btn-2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class=" col-lg-10 mx-auto">
                                    <div class="img-box">
                                        <?php $theme_image = get_theme_mod('hero_section_slider2_setting' , get_template_directory_uri() . '/assets/images/slider-img.png',) ?>

                                        <img src="<?php echo $theme_image ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
