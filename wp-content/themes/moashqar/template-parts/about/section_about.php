<section class="about_section layout_padding-bottom">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?php echo get_theme_mod('hero_section_setting_about_title') ?> <br>

</h2>
                    </div>
                    <p>
                        <?php echo get_theme_mod('hero_section_setting_about_description') ?>
 </p>
                    <a href="<?php echo get_theme_mod('hero_section_setting_about_read_more') ?>">
    Read More
</a>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="img-box">
                    <?php $theme_image = get_theme_mod('hero_section_about_setting' , get_template_directory_uri() . '/assets/images/slider-img.png',) ?>
                    <img src="<?php echo $theme_image?>" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
