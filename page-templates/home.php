<?php
/**
 *
 * Template Name: Home
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Axis
 */

get_header(); ?>

        <div class="customer-banner offset" style="background: linear-gradient(45deg, #e9fcff 30%, #fdf2ed 60%);">
          <div class="wrapper">
              <div class="tbl">
                  <div class="col left">
                      <div class="new">
                          <button class="btn btn-secondary new-b">
                              <span>New</span>
                          </button>
                          <span class="tele">We just added Telegram to Unified inbox</span>
                      </div>
                      <h1>A unified customer engagement platform</h1>
                      <p>All-in-one platform to connect, engage and transact with your customers across multiple communication channels</p>
                         
                          <!-- <a href="mailto:support@axis.africa">
                            <button class="btn primary-btn">Request Demo</button>
                          </a> -->

                         

                          <a target="_blank" href="https://app.axis.africa/register">
                            <button class="btn btn-secondary btn-join">
                                <span>Get Started</span>
                            </button>
                        </a>

                        <a href="mailto:support@axis.africa">
                            <button class="btn btn-secondary btn-3 btn-join">
                                <span>Request Demo</span>
                            </button>
                        </a>

                         
                  </div>
                  <div class="col right bner">
                      <a href="#">
                          <img src="<?php echo the_post_thumbnail_url(); ?>" width="521" height="494" alt="banner">
                      </a>
                  </div>
              </div>
          </div>
        </div>
      <!-- end-of-banner -->
  </section>

  <!-- partners -->
<section class="partners padding-top-bottom">
             <h2 class="centre" style="filter: none;">A unified customer engagement platform</h2>
             <div class="container-scroll">

        <div class="faders-scroll">
            <div class="left-scroll"></div>
            <div class="right-scroll"></div>
        </div>

        <div class="items-scroll">
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/03/254-1.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/03/beauty-click.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/03/lintons.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/03/bazaar.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/03/glovo.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/05/hashtag-meats-cropped.jpg" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/05/nanjala.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/05/selam-pharmacy.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/05/meru-jordan-hospital.png" alt="Smiling chick" class="img-scroll">
            </div>
            <div class="entry-scroll">
                <img src="http://axis.local/wp-content/uploads/2022/05/SME-support-centre.png" alt="Smiling chick" class="img-scroll">
            </div>
        </div>
</div>
</section>
<!-- end-of-partners -->
<!-- partners-mobile -->
<!-- features-->
<section class="features padding-top-bottom">
    <div class="wrapper">
         <div class="featured-articles">
              <div class="axis">
                  <h3>Features of Axis</h3>
                  <p>
                      We are a complete customer communications platform with bots, apps and more—like email, messages,
                      so you can build great customer relationships, every step of the way.
                  </p>
				  <a href="<?php echo home_url('/features'); ?>">
				  	<button class="btn primary-btn">Learn More</button>
				  </a>
                  
              </div>
              <div class="articles">
                  <ul>
                  <?php
                    $args = array(
                        'post_type' => 'features',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                    
                    $query = new WP_Query( $args ); ?>

                    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

                        <li>
                            <div class="icn">
                                <img src="<?php echo the_field('features_logo'); ?>" width="" height="">
                            </div>
                            <h2 class="ttle"><?php echo the_title(); ?></h2>
                            <p><?php echo the_field('features_excerpt'); ?></p>
                        </li>

                    <?php endwhile; ?>
                     
                  </ul>
             </div>
         </div>
    </div>
</section>
<!-- end-of-features -->
<!-- things-->
<section class="things padding-top-bottom">
         <div class="wrapper">
             <h2 class="centre">Things we say about other things</h2>
             <div class="laptops">
                 <ul>

                 <?php
                    $args = array(
                        'post_type' => 'articles',
                        'order' => 'ASC',
                        'posts_per_page' => -1,
                    );
                    
                    $query = new WP_Query( $args ); ?>

                    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

                     <li>
                         <div class="pic-wrapper">
                             <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                         </div>
                         <div class="content">
                          <div class="date tbl">
                              <span class=" col left">PRODUCTIVITY</span>
                              <span class=" col right">3 days ago</span>
                          </div>
                           <a href="<?php echo the_permalink(); ?>">
                          <span class="captn"><?php echo the_title(); ?></span>
                          <p> <?php echo the_excerpt(); ?></p>
                           <span class="right"><span class="primary-btn transparent-btn">Learn More</span></span>
                             </a>
                         </div>
                     </li>

                     <?php endwhile; ?> 

                 </ul>
             </div>
         </div>

</section>
<!-- end-of-things -->
<!-- communication-->
<?php get_template_part('template-parts/cta'); ?>


<?php get_footer(); ?>
