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


<!-- s-footer
================================================== -->
<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">
            
            <div class="col-two md-four mob-full s-footer__sitelinks">
                    
                <h4>Quick Links</h4>

                <ul class="s-footer__linklist">
                    <li><a href="#0">Home</a></li>
                    <li><a href="#0">Blog</a></li>
                    <li><a href="#0">Styles</a></li>
                    <li><a href="#0">About</a></li>
                    <li><a href="#0">Contact</a></li>
                    <li><a href="#0">Privacy Policy</a></li>
                </ul>

            </div> <!-- end s-footer__sitelinks -->

            <div class="col-two md-four mob-full s-footer__archives">
                    
                <h4>Archives</h4>

                <ul class="s-footer__linklist">
                    <li><a href="#0">January 2018</a></li>
                    <li><a href="#0">December 2017</a></li>
                    <li><a href="#0">November 2017</a></li>
                    <li><a href="#0">October 2017</a></li>
                    <li><a href="#0">September 2017</a></li>
                    <li><a href="#0">August 2017</a></li>
                </ul>

            </div> <!-- end s-footer__archives -->

            <div class="col-two md-four mob-full s-footer__social">
                    
                <h4>Social</h4>

                <ul class="s-footer__linklist">
                    <li><a href="#0">Facebook</a></li>
                    <li><a href="#0">Instagram</a></li>
                    <li><a href="#0">Twitter</a></li>
                    <li><a href="#0">Pinterest</a></li>
                    <li><a href="#0">Google+</a></li>
                    <li><a href="#0">LinkedIn</a></li>
                </ul>

            </div> <!-- end s-footer__social -->

            <div class="col-five md-full end s-footer__subscribe">
                    
                <h4>Our Newsletter</h4>

                <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
            
                        <input type="submit" name="subscribe" value="Send">
            
                        <label for="mc-email" class="subscribe-message"></label>
            
                    </form>
                </div>

            </div> <!-- end s-footer__subscribe -->

        </div>
    </div> <!-- end s-footer__main -->

    <div class="s-footer__bottom">
        <div class="row">
            <div class="col-full">
                <div class="s-footer__copyright">
                    <span>© Copyright WikiSoft 2021</span> 
                    <span>Developed by <a target="_blank" href="//softcope.com">SoftCope</a></span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div> <!-- end s-footer__bottom -->

</footer> <!-- end s-footer -->


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