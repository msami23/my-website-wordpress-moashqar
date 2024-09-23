<?php //if(!isset($arg)) { $arg = array();} ?>
<!--<body --><?php //body_class( $arg['body-class' ?? '']); ?><!--<!-->
<?php
//if(function_exists('wp_body_open')) {
//    wp_body_open();
//}
//?>
<body>
<div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span><?php echo get_theme_mod('hero_section_logo_name_setting')?></span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-auto">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'moashqar-header',
                            'menu'                 => 'header_section',
                            'container' => 'container-fluid',
                            'container_class' => 'navbar navbar-expand-lg custom_nav-container',
                            'menu_class'           => 'collapse navbar-collapse',
                            'menu_id'              => 'navbarSupportedContent',
                            'items_wrap' => '%3$s ',
                            'item_spacing'         => 'preserve',
                            'depth'                => 0,
                            'fallback_cb' => '',


                        )); ?>
                    </ul>

                    <div class="quote_btn-container">
                        <form class="form-inline">
                            <button class="btn   nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  Call : +01 123455678990
                </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>