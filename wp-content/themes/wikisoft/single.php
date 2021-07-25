<?php 
    get_header();
    the_post();
?>

<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">
        <div class="s-content__header col-full">
            <h1 class="s-content__header-title">
                <?php the_title(); ?>
            </h1>
            <ul class="s-content__header-meta">
                <li class="date">
                    <?php echo get_the_date(); ?>
                </li>
                <li class="cat">
                    <?php 
                        _e('In ', 'wikisoft');
                        the_category(' '); 
                    ?>
                </li>
            </ul>
        </div>

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <img src="<?php the_post_thumbnail_url('large'); ?> " width="100%" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
            </div>
        </div> 

        <div class="col-full s-content__main">
            <?php 
                the_content();
                wp_link_pages();
            ?>
            <p class="s-content__tags">
                <span>
                    <?php _e('Post Tags', 'wikisoft'); ?>
                </span>

                <span class="s-content__tag-list">
                   <?php echo get_the_tag_list(); ?>
                </span>
            </p> 
            <?php 
                get_template_part('template-parts/common/author');
                get_template_part('template-parts/common/single-pagination');
            ?>
        </div> 
    </article>

    <!-- Comment Template -->
    <?php 
        if (!post_password_required()) {
            comments_template();
        } 
    ?>
</section>

<?php 
    get_footer();
?>