<section class="info_section layout_padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_contact">
                    <h4>
                        Address
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                 <?php echo get_theme_mod('hero_section_setting_location')?>
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                   <?php echo get_theme_mod('hero_section_setting_phone')?>
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                  <?php echo get_theme_mod('hero_section_setting_email')?>
                </span>
                        </a>
                    </div>
                </div>
                <div class="info_social">
                    <a href="<?php echo get_theme_mod('hero_section_setting_facebook')?>">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_theme_mod('hero_section_setting_twitter')?>">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_theme_mod('hero_section_setting_linkedin')?>">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo get_theme_mod('hero_section_setting_instagram')?>">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_link_box">
                    <h4>
                        Links
                    </h4>
                    <div class="info_links">
<!--                        <a class="active" href="index.html">-->
<!--                            <img src="images/nav-bullet.png" alt="">-->
<!--                            Home-->
<!--                        </a>-->
<!--                        <a class="" href="about.html">-->
<!--                            <img src="images/nav-bullet.png" alt="">-->
<!--                            About-->
<!--                        </a>-->
<!--                        <a class="" href="service.html">-->
<!--                            <img src="images/nav-bullet.png" alt="">-->
<!--                            Services-->
<!--                        </a>-->
<!--                        <a class="" href="price.html">-->
<!--                            <img src="images/nav-bullet.png" alt="">-->
<!--                            Pricing-->
<!--                        </a>-->
<!--                        <a class="" href="contact.html">-->
<!--                            <img src="images/nav-bullet.png" alt="">-->
<!--                            Contact Us-->
<!--                        </a>-->
                        <?php wp_nav_menu(array(
                            'theme_location' => 'moashqar-header',
                            'menu_class'           => 'info_links',



                        )); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_detail">
                    <h4>
                        Info
                    </h4>
                    <p>
                        <?php echo get_theme_mod('hero_section_setting_info')?>
                </div>
            </div>
            <div class="col-md-3 mb-0">
                <h4>
                    Subscribe
                </h4>
                <form action="#">
                    <input type="text" placeholder="Enter email" />
                    <button type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/"><?php echo  get_theme_mod('hero_section_setting_copyright')?></a>
        </p>
    </div>
</footer>
<!-- footer section -->