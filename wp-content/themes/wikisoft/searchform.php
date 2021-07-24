<?php 
    $home_dir = home_url( '/' );
?>

<form role="search" method="get" class="header__search-form" action="<?php $home_dir; ?>">
    <label>
        <span class="hide-content">
            <?php 
                _e('Search for:', 'wikisoft');
            ?>
        </span>
        <input 
            type="search" 
            class="search-field" 
            placeholder="<?php echo esc_attr('Type Keywords')?>" 
            value="" 
            name="s" 
            title="<?php esc_attr('Search for:') ?>" 
            autocomplete="off">
    </label>
    <input type="submit" class="search-submit" value="<?php echo esc_attr('Search'); ?>">
</form>