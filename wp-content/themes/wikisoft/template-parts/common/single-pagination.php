<div class="s-content__pagenav">
    <div class="s-content__nav">
        <?php 
            $prev_post = get_previous_post();
            if ($prev_post) :
        ?>
        <div class="s-content__prev">
            <a href="<?php echo get_the_permalink($prev_post); ?>" rel="prev">
                <span>
                    <?php _e('Previous Post', 'wikisoft'); ?>
                </span>
                <?php echo get_the_title($prev_post); ?>
            </a>
        </div>
        <?php endif; ?>

        <?php 
            $next_post = get_next_post();
            if ($next_post) :
        ?>
        <div class="s-content__next">
            <a href="<?php echo get_the_permalink($next_post)?>" rel="next">
                <span>
                    <?php _e('Next Post', 'wikisoft'); ?>
                </span>
                <?php echo get_the_title($next_post); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div> 