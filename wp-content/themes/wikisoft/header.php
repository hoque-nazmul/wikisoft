<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<section class="s-pageheader <?php if (is_home()) { echo 's-pageheader--home'; } ?>">
    <header class="header">
        <div class="header__content row">
            <div class="header__logo">
                <a class="logo" href="<?php echo site_url(); ?>">
                    <h2 style="color: #fff; margin-top: 0px;"><?php bloginfo('name'); ?></h2>
                </a>
            </div> 

            <?php 
                if (is_active_sidebar('social-share')) {
                    dynamic_sidebar('social-share');
                }
            ?>
            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">
                <!-- Search Form -->
                <?php get_search_form(); ?>
    
                <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

            </div> 
            <?php get_template_part('/template-parts/common/navigation'); ?>
        </div> 
    </header> 
    <?php 
        if (is_home()) {
            get_template_part('template-parts/blog-home/featured');
        }
    ?>
</section>