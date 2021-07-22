<?php 
    $video_url = '';
    if (function_exists('the_field')) {
        $video_url = get_field('file_source');
    }
?>
<article class="masonry__brick entry format-video" data-aos="fade-up">
                        
    <div class="entry__thumb video-image">
        <a href="<?php echo $video_url; ?>" data-lity>
            <img src="<?php the_post_thumbnail_url('wikisoft-square'); ?>" alt="">
        </a>
    </div>

    <?php get_template_part('template-parts/common/post/content'); ?>

</article> 