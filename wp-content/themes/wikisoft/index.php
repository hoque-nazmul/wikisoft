<?php get_header(); ?>
<!-- Latest Post Area -->
<section class="s-content">
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"></div>
            <?php 
                while(have_posts()) {
                    the_post();
                    get_template_part('template-parts/post-formats/content', get_post_format());
                }
            ?>
        </div> 
    </div> 
    <?php get_template_part('template-parts/common/pagination'); ?>
</section> 
<!-- End Latest Post Area -->
<?php get_footer(); ?>