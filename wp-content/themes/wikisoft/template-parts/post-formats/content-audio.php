<article class="masonry__brick entry format-audio" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="single-audio.html" class="entry__thumb-link">
            <img src="<?php the_post_thumbnail_url('wikisoft-square'); ?>" alt="">
        </a>
        <div class="audio-wrap">
            <audio id="player" src="<?php echo get_template_directory_uri(); ?>/assets/media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>
        </div>
    </div>

    <?php get_template_part('template-parts/common/post/content'); ?>

</article> 