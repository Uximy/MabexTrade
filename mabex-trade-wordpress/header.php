
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mabex_trade
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Mabex Trade LTD">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Mabex Trade LTD</title>
</head>
<body>
    <header>
        <section class="backgound_banner">
            <img class="header_img" src="<?php the_field('top_banner');?>" alt="Mabex Trade LTD">
        </section>
        <section class="banner">
            <img src="<?php the_field('logo');?>" alt="Mabex Trade LTD-Logo">
            <div class="scroll">
                <p>Scroll Down</p>
            </div>
        </section>
    </header>
