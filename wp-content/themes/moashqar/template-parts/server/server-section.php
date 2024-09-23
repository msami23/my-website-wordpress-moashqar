<section class="server_section">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <?php $theme_image = get_theme_mod('hero_section_server_setting' , get_template_directory_uri() . '/assets/images/server-img.jpg',) ?>

                    <img src="<?php echo $theme_image?>" alt="">
<!--                    <div class="play_btn">-->
<!--                        <button>-->
<!--                            <i class="fa fa-play" aria-hidden="true"></i>-->
<!--                        </button>-->
<!--                    </div>-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?php echo get_theme_mod('hero_section_setting_server_title') ?>
                        </h2>
                        <p>
                            <?php echo get_theme_mod('hero_section_setting_server_description') ?>
                        </p>
                    </div>
                    <a href="<?php echo get_theme_mod('hero_section_setting_server_read_more') ?>">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
