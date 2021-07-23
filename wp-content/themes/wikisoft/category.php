<?php get_header(); ?>
<!-- Latest Post Area -->
<section class="s-content">
    <div class="row narrow">
        <div class="col-full s-content__header" data-aos="fade-up">
            <h1>
                <?php 
                    _e('Category: ', 'wikisoft');
                    single_cat_title(); 
                ?>
            </h1>

            <p class="lead">
                <?php echo category_description(); ?>
            </p>
        </div>
    </div>
    
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"></div>

            <?php 
                if (!have_posts()) {
                    _e("<h2 class='text-center'>No Post Found</h2>", 'wikisoft');
                } else {
                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/post-formats/content', get_post_format());
                    }
                }
            ?>
        </div> 
    </div> 
    <?php get_template_part('template-parts/common/pagination'); ?>
</section> 
<!-- End Latest Post Area -->
<?php get_footer(); ?>