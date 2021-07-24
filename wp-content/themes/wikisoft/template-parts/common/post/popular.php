<!-- Popular Post in Footer Section -->
<?php 
    $popular_posts = new WP_Query([
        'posts_per_page' => 6,
        'ignore_sticky_posts' => 1,
        'orderby' => 'comment_count'
    ]);
?>
<div class="col-eight md-six tab-full popular">
    <h3>
        <?php _e('Popular Posts', 'wikisoft'); ?>
    </h3>

    <div class="block-1-2 block-m-full popular__posts">
        <?php while($popular_posts->have_posts()): 
            $popular_posts->the_post();
        ?>
            <article class="col-block popular__post">
                <a href="<?php esc_url(the_permalink()); ?>" class="popular__thumb">
                    <?php the_post_thumbnail(); ?>
                </a>
                <h5>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h5>
                <section class="popular__meta">
                    <span class="popular__author">
                        <span><?php _e('By', 'wikisoft'); ?></span> 
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"> 
                            <?php the_author(); ?>
                        </a>
                    </span>
                    <span class="popular__date">
                        <span><?php _e('on', 'wikisoft'); ?></span> 
                        <time datetime="2017-12-19">
                            <?php echo get_the_date(); ?>
                        </time>
                    </span>
                </section>
            </article>
        <?php 
            endwhile; 
            wp_reset_query();
        ?>
    </div> 
</div> 