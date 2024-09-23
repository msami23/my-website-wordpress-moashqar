<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon.png" type="<?php echo get_template_directory_uri(); ?> /assets/image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Mo Ashqar</title>



    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->

    <?php wp_head(); ?>
</head>

<body class="sub_page">

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
    <!-- end header section -->
</div>

