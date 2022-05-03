<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Axis
 */

?>
</div>
	 <!-- footer-->
	 <section class="footer bg-blue margin-top">
            <div class="wrapper">
                <div class="footer-links">
                    <div class="col left">
												<?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>

                        <a href="<?php echo home_url('/'); ?>" class="logo">
                            <img src="<?php echo $image[0]; ?>" width="186" height="77" alt="Axis-logo"> </a>
                        <p>
                            AXIS is a unified customer
                            engagement platform offering conversational commerce and built for
                            SMEs and startups in Africa. </p>
                    </div>
                    <div class="col right">
                        <div class="block">
                            <h2 class="ttle">Quick Links</h2>
                            <div class="links-wrap">
                                <ul style="display: block">
                                    <li><a href="<?php echo home_url('/company/'); ?>">Company</a></li>
<!--                                     <li><a href="#">Product Roadmap</a></li> -->
                                    <li><a href="<?php echo home_url('/career/'); ?>">Careers</a></li>
                                   
                                    <li><a href="<?php echo home_url('/contact-us/'); ?>">Contact Us</a></li>
                                    <li><a href="<?php echo home_url('/terms-condition/'); ?>">Terms</a></li>
                                    <li><a href="<?php echo home_url('/privacy/'); ?>">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="block">
                            <h2 class="ttle">Resources</h2>
                            <div class="links-wrap">
                                <ul style="display: block">
                                    <li><a href="<?php echo home_url('/blog/'); ?>"> Blog</a></li>
<!--                                     <li><a href="#">Watch a Demo</a></li> -->
                                    <li><a href="<?php echo home_url('/webinars/'); ?>">Webinars</a></li>
                                    <li><a href="#">What's New</a></li>
                                    <li><a href="<?php echo home_url('/help-center/'); ?>">Help Center</a></li>
                                    <li><a target="_blank" href="https://status.axis.africa/">Service Status</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="block">
                            <h2 class="ttle">Features</h2>
                            <div class="links-wrap">
                                <ul style="display: block">

                                <?php
        
                                    $args = array(
                                        'post_type' => 'features',
                                        'order' => 'ASC',
                                        'posts_per_page' => -1,
                                    );
                                    
                                    $query = new WP_Query( $args ); ?>

                                    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

                                    <li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                                   
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="copywright">
        <div class="strip">
            <p class="centre">© 2022 AXIS, PLC. All rights reserved.</p>

        </div>
    </section>
    <!-- footer -->
</div><!-- #page -->


<?php wp_footer(); ?>


</body>
</html>
