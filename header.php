<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SkylarWuebker2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/jquery.fancybox.css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/jquery.sidr.light.css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" media="screen">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49879763-1', 'skylarwuebker.com');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- STANDARD NAVIGATION -->
    <nav id="nav" class="col-sm-3 hidden-xs">
        <div class="logo"><img src="photos/logo.png"></div>
        <ul class="filters">
            <li><a class="filter" href="#" data-filter="*">HOME</a></li>
            <li><a class="filter" href="#identity" data-filter=".identity">IDENTITY</li></a> 
            <li><a class="filter" href="#web" data-filter=".web">WEB</a></li>
            <li><a class="filter" href="#print" data-filter=".print">PRINT</a></li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title('Contact'))); ?>">CONTACT</a></li>
            <li><a href="photos/SkylarResume.pdf">RESUME</a></li>
        </ul>
        <article>&copy; Skylar Wuebker 2014</article>
    </nav>

    <!-- MOBILE NAVIGATION TRIGGER -->
    <aside id="button" class="sidebar-small pull-left">
            <ul class="list-unstyled filters">
                <li><a id="menu-btn" href="#mobile-nav"><img src="photos/button.png"></a></li>
                <li><a class="filter" href="#identity" data-filter=".identity"><img src="photos/identity_icon.png"></a></li>
                <li><a class="filter" href="#web" data-filter=".web"><img src="photos/web_icon.png"></a></li>
                <li><a class="filter" href="#print" data-filter=".print"><img src="photos/print_icon.png"></a></li>
                <li><a href="<?php echo esc_url( get_permalink( get_page_by_title('Contact'))); ?>"><img src="photos/contact_icon.png"></a></li>
                <li><a href="photos/SkylarResume.pdf"><img src="photos/resume_icon.png"></a></li>
            </ul>
    </aside>

    <!-- MOBILE NAVIGATION -->
    <nav id="mobile-nav">
        <div class="logo"><a id="menu-btn" class="filter" href="#" data-filter="*"><img src="photos/mobile_logo.png"></div>
        <ul class="filters">
            <li><a class="filter" href="#identity" data-filter=".identity">IDENTITY</li></a> 
            <li><a class="filter" href="#web" data-filter=".web">WEB</a></li>
            <li><a class="filter" href="#print" data-filter=".print">PRINT</a></li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title('Contact'))); ?>">CONTACT</a></li>
            <li><a href="photos/SkylarResume.pdf">RESUME</a></li>
        </ul>
        <article>&copy; Skylar Wuebker 2014</article>
    </nav>
