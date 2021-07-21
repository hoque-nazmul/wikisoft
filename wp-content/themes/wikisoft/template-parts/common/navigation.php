<a class="header__toggle-menu" href="#0" title="Menu"><span>
    <?php _e('Menu', 'wikisoft'); ?>
</span></a>

<nav class="header__nav-wrap">

    <h2 class="header__nav-heading h6">
        <?php _e('Site Navigation', 'wikisoft'); ?>
    </h2>

    <?php 
        wp_nav_menu([
            'theme_location' => __('topmenu', 'wikisoft'),
            'menu_id' => __('topmenu', 'wikisoft'),
            'menu_class' => __('header__nav', 'header__nav')
        ])
    ?>

    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">
        <?php _e('Close', 'wikisoft'); ?>
    </a>

</nav> 