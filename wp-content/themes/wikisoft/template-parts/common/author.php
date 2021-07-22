<div class="s-content__author">
    <?php 
        echo get_avatar(get_the_author_meta('ID'));
    ?>
    <div class="s-content__author-about">
        <h4 class="s-content__author-name">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>">
                <?php echo get_the_author_meta('display_name'); ?>
            </a>
        </h4>
        <p>
            <?php  echo get_the_author_meta('description'); ?>
        </p>
        <ul class="s-content__author-social">
            <?php 
                if (function_exists('the_field')) {
                    $github = get_field('github');
                    $website = get_field('website');
                    $facebook = get_field('facebook');
                }
            ?>
            <?php if ($website): ?>
                <li>
                    <a href="<?php echo $website; ?>">
                        <?php _e('Website', 'wikisoft') ?>
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if ($facebook): ?>
                <li>
                    <a href="<?php echo $facebook; ?>">
                        <?php _e('Facebook', 'wikisoft') ?>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>