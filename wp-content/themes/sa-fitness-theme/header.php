<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="head">
        <div class="left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            <div>
                SA FITNESS
            </div>
        </div>
        <div class="center">
            <ul>
                <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li><a href="<?php echo home_url('/services'); ?>">Services</a></li>
                <li><a href="<?php echo home_url('/training'); ?>">Training</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>">Contact Us</a></li>
            </ul>
        </div>
        <div class="right">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrjDqNtsWHJgVLqGRzMmMhTJrGwVxgBcxDMbwxWJSTmKBvhkWVTQLsnVvnnLXDCkxjBrrg" target="_blank">Email</a>
        </div>
    </div>
