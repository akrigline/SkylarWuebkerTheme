<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SkylarWuebker2
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"<?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700|Numans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.sidr.light.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">


    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <style>
        #button {
            display: none;
        }
        @media only screen and (max-width: 767px){
            #button {
                display: block;
            }
            .nav {
                display:none;
            }
        }

        #mobile-nav{
            display:none;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <?php if ( is_page('home') ) { ?>
            <!-- STANDARD NAVIGATION -->
            <nav class="nav">
                <a href="index.html"><div class="logo"></div></a>
                <div class="clear"></div>
                <ul class="filters">
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_title('Work'))); ?>">WORK</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_title('Contact'))); ?>">CONTACT</a></li>
                    <li><a target=blank href="<?php bloginfo('template_directory');?>/photos/SkylarResume.pdf">RESUME</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>

            <!-- MOBILE NAVIGATION TRIGGER -->
            <aside id="button" class="sidebar-small pull-right">
                <a id="menu-btn" href="#mobile-nav"><img src="photos/button-white.png"></a>
            </aside>

            <!-- MOBILE NAVIGATION -->
            <nav id="mobile-nav">
                <div class="logo"><a id="menu-btn" class="filter" href="#" data-filter="*"><img src="photos/mobile_logo.png"></div>
                <ul class="filters">
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_title('Work'))); ?>">WORK</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_title('Contact'))); ?>">CONTACT</a></li>
                    <li><a href="<?php bloginfo('template_directory');?>/photos/SkylarResume.pdf">RESUME</a></li>
                </ul>
            </nav>
            <? } ?>