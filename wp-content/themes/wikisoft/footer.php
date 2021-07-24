<?php 
    $popular_posts = new WP_Query([
        'posts_per_page' => 6,
        'ignore_sticky_posts' => 1,
        'orderby' => 'comment_count'
    ]);
?>
<section class="s-extra">
    <div class="row top">
        <!-- Popular Post -->
        <?php get_template_part('template-parts/common/post/popular'); ?>

        <div class="col-four md-six tab-full about">
            <?php 
                if (is_active_sidebar('about-summary')) {
                    dynamic_sidebar('about-summary');
                }
                if (is_active_sidebar('footer-social')) {
                    dynamic_sidebar('footer-social');
                }
            ?>
        </div> 
    </div> 
    <div class="row bottom tags-wrap">
        <div class="col-full tags">
            <h3>
                <?php _e('Tags', 'wikisoft'); ?>
            </h3>
            <div class="tagcloud">
                <?php echo get_the_tag_list(); ?>
            </div> 
        </div> 
    </div> 
</section> 

<!-- Footer Bottom Top -->
<footer class="s-footer">
    <div class="s-footer__main">
        <div class="row">
            <div class="col-two md-four mob-full s-footer__sitelinks">
                <h4>
                    <?php _e('Quick Links', 'wikisoft'); ?>
                </h4>
                <?php 
                    wp_nav_menu([
                        'container' => 'ul',
                        'menu' => 'footerleft',
                        'menu_class' => __('s-footer__linklist', 'wikisoft')
                    ])
                ?>
            </div> 
            <div class="col-two md-four mob-full s-footer__archives">
                <h4>
                    <?php _e('Archives', 'wikisoft'); ?>
                </h4>
                <?php 
                    wp_nav_menu([
                        'container' => 'ul',
                        'menu' => 'footermiddle',
                        'menu_class' => __('s-footer__linklist', 'wikisoft')
                    ])
                ?>
            </div> 
            <div class="col-two md-four mob-full s-footer__social">
                <h4>
                    <?php _e('Social', 'wikisoft'); ?>
                </h4>
                <?php 
                    wp_nav_menu([
                        'container' => 'ul',
                        'menu' => 'footerright',
                        'menu_class' => __('s-footer__linklist', 'wikisoft')
                    ])
                ?>
            </div> 

            <div class="col-five md-full end s-footer__subscribe">
                <?php 
                    if (is_active_sidebar('newsletter')) {
                        dynamic_sidebar('newsletter');
                    } 
                ?>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Send">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div> 

        </div>
    </div> 
    <!-- Footer Bottom -->
    <div class="s-footer__bottom">
        <div class="row">
            <div class="col-full">
                <?php 
                    if (is_active_sidebar('copyright')) {
                        dynamic_sidebar('copyright');
                    } 
                ?>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div>

</footer>


<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader">
        <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>

</html>