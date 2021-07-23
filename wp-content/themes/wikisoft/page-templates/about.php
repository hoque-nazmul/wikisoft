<?php 
/** 
* Template Name: About Us
**/
    get_header();
    the_post();
?>

<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">
        <div class="s-content__header col-full">
            <h1 class="s-content__header-title">
                <?php the_title(); ?>
            </h1>
        </div>

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <img src="<?php the_post_thumbnail_url('large'); ?> " width="100%" sizes="(max-width: 2000px) 100vw, 2000px" alt="">
            </div>
        </div> 

        <div class="col-full s-content__main">
            <?php 
                the_content();
            ?>
            <!-- About Us: Key Points -->
            <?php if (is_active_sidebar('about')): ?>
                <div class="row block-1-2 block-tab-full">
                    <?php dynamic_sidebar('about'); ?>
                </div>
            <?php endif; ?>
        </div> 
    </article>
</section> 

<?php 
    get_footer();
?>