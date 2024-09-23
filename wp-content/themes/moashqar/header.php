
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


        <!-- bootstrap core css -->
<!--        <link rel="stylesheet" type="text/css" href="--><?php //echo get_template_directory_uri(); ?><!-- /assets/css/bootstrap.css" />-->

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

        <!-- font awesome style -->
<!--        <link href="--><?php //echo get_template_directory_uri(); ?><!-- /assets/css/font-awesome.min.css" rel="stylesheet" />-->

        <!-- Custom styles for this template -->
<!--        <link href="--><?php //echo get_template_directory_uri(); ?><!-- /assets/css/style.css" rel="stylesheet" />-->
        <!-- responsive style -->
<!--        <link href="--><?php //echo get_template_directory_uri(); ?><!-- /assets/css/responsive.css" rel="stylesheet" />-->


    <?php wp_head(); ?>
    </head>

<?php
$arg = array();
if(is_front_page()){
    $arg['body-class'] = 'index-page';
}

if(is_singular()){
    $arg['body-class'] = 'singular-page';
}
?>

              <?php get_template_part('template-parts/header', 'navbar' , $arg) ?>

        <!-- end header section -->


