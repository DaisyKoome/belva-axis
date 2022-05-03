<?php
/**
 *
 * Template Name: Pricing
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


<section class="fill-inner"></section>
<section class="inside-pages-topper">
  <h2 class="centre"><?php echo the_title(); ?></h2>
</section>

<section class="products-cases padding-top-bottom">
  <div class="wrapper">
	 <h2 class="centre"> Pay As You Use. No software subscription
            <span>Pay-as-you-use allows you to easily adapt to changing business needs without overcommitting budgets and improving your responsiveness to customer needs. 
		 </span></h2>
		 
	  <!--Size dropdown menu-->
<select id="size_select" class="">

	<option value="option1">Whatsapp Pricing</option>
  <option value="option4">Email Pricing</option>
  <option value="option5">Bulk SMS Pricing</option>
  
  <option value="option2">Whatsapp Bulk Sender</option>
  <option value="option3">Whatsapp Bulk Sender (Reseller)</option>
</select>

<!--Size dropdown content-->
<div id="option1" class="size_chart">
    <?php echo do_shortcode('[ninja_tables id="266"]'); ?>
	  <?php echo do_shortcode('[ninja_tables id="267"]'); ?>
  	<?php echo do_shortcode('[ninja_tables id="269"]'); ?>
</div>

<div id="option2" class="size_chart">
<?php echo do_shortcode('[ninja_tables id="272"]'); ?>
<?php echo do_shortcode('[ninja_tables id="273"]'); ?>
<?php echo do_shortcode('[ninja_tables id="274"]'); ?>
</div>
<div id="option3" class="size_chart">
<?php echo do_shortcode('[ninja_tables id="271"]'); ?>
</div>
<div id="option4" class="size_chart">
   <?php echo do_shortcode('[ninja_tables id="265"]'); ?>
	<?php echo do_shortcode('[ninja_tables id="264"]'); ?>
</div>
<div id="option5" class="size_chart">
  <?php echo do_shortcode('[ninja_tables id="270"]'); ?>
  <?php echo do_shortcode('[ninja_tables id="264"]'); ?>
</div>
<div id="option6" class="size_chart">
  Large
</div>
      
  </div>
</section>



<?php get_template_part('template-parts/cta'); ?>

<?php get_footer(); ?>

<script>
	
	jQuery(document).ready(function(){

  //hides dropdown content
  jQuery(".size_chart").hide();
  
  //unhides first option content
  jQuery("#option1").show();
  
  //listen to dropdown for change
  jQuery("#size_select").change(function(){
    //rehide content on change
    jQuery('.size_chart').hide();
    //unhides current item
    jQuery('#'+$(this).val()).show();
  });
  
});
</script>