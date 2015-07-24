<?php
/**
 * Template for displaying all single posts in custom post type, Mockup
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>
    <div class="mockup-post">
      <div class="row">

        <div class="col-sm-12 blog-main">

          <?php get_template_part( 'loop', 'single' ); ?>

        </div><!-- /.blog-main -->

        <!--<?php// get_sidebar(); ?>-->

      </div><!-- /.row -->
    </div>  
	<?php get_footer(); ?>