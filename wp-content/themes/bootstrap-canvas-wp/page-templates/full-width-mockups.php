<?php
/**
 * Template Name: Mockups, Tables, Full-width Page Template, No Sidebar
 *
 * Description: Bootstrap Canvas WP loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>
<div class="mockup-page no-meta">

      <div class="row">

        <div class="col-sm-12 blog-main">
            
            <h2 class="heading">Mockups</h2>
                  
            
          <?php get_template_part( 'loop', 'page' ); ?>
            
            <?php if(is_page (11)) {
                get_template_part( 'partials/dashboard', 'default' ); ?>
                <?php } elseif (is_page (269)) {
                get_template_part( 'partials/dashboard', 'customerserviceinbox' ); ?>
                <?php } elseif (is_page (279)) {
                get_template_part( 'partials/dashboard', 'splashpage' ); ?>
                <?php } elseif (is_page (267)) {
                get_template_part( 'partials/dashboard', 'datepicker' ); ?>
                <?php } elseif (is_page (265)) {
                get_template_part( 'partials/dashboard', 'dateselector' ); ?>
                   <?php } elseif (is_page (249)) {
                get_template_part( 'partials/dashboard', 'errorsalerts' ); ?>
                 <?php } elseif (is_page (283)) {
                get_template_part( 'partials/dashboard', 'exportonreports' ); ?>
                <?php } elseif (is_page (255)) {
                get_template_part( 'partials/dashboard', 'header' ); ?>
                <?php } elseif (is_page (257)) {
                get_template_part( 'partials/dashboard', 'leftnav' ); ?>
                <?php } elseif (is_page (281)) {
                get_template_part( 'partials/dashboard', 'maps' ); ?>
                   <?php } elseif (is_page (251)) {
                get_template_part( 'partials/dashboard', 'packagedetails' ); ?>
                <?php } elseif (is_page (277)) {
                get_template_part( 'partials/dashboard', 'pagination' ); ?>
                <?php } elseif (is_page (261)) {
                get_template_part( 'partials/dashboard', 'performanceoverview' ); ?>
                <?php } elseif (is_page (275)) {
                get_template_part( 'partials/dashboard', 'responsiveviews' ); ?>
                <?php } elseif (is_page (273)) {
                get_template_part( 'partials/dashboard', 'ssologin' ); ?>
                <?php } elseif (is_page (271)) {
                get_template_part( 'partials/dashboard', 'standards' ); ?>
                <?php } elseif (is_page (263)) {
                get_template_part( 'partials/dashboard', 'standards' ); ?>
                   <?php } elseif (is_page (312)) {
                get_template_part( 'partials/products', 'localtrack' ); ?>
                <?php } elseif (is_page (314)) {
                get_template_part( 'partials/products', 'SEM' ); ?>
                <?php } elseif (is_page (316)) {
                get_template_part( 'partials/products', 'SEO' ); ?>
                <?php } elseif (is_page (318)) {
                get_template_part( 'partials/products', 'SMM' ); ?>
                <?php } elseif (is_page (320)) {
                get_template_part( 'partials/products', 'websites' ); ?>
                   <?php } else {
                get_template_part( 'partials/dashboard', 'default' ); ?>
            <?php } ?>
            
            
    
            
        </div><!-- /.blog-main -->

      </div><!-- /.row -->
    
</div>    
	<?php get_footer(); ?>
    