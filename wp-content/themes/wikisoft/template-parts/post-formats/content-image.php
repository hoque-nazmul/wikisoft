<article class="masonry__brick entry format-standard" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
            <img src="<?php the_post_thumbnail_url('wikisoft-square'); ?>" alt="">
        </a>
    </div>

    <?php get_template_part('template-parts/common/post/content'); ?>

</article> 