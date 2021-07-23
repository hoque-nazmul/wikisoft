<?php 
/** 
* Template Name: Contact Page
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

        <div class="col-full s-content__main">
            <?php 
                the_content();
            ?>
            <!-- Contact Information -->
            <?php if (is_active_sidebar('contact-info')): ?>
                <div class="row block-1-2 block-tab-full">
                    <?php dynamic_sidebar('contact-info'); ?>
                </div>
            <?php endif; ?>
        </div> 
    </article>
</section> 

<?php 
    get_footer();
?>