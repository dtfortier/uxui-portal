<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

	get_header(); ?>

      <div class="row">

        <div class="col-sm-12 blog-main">
<h2 style="color:red">*Category pages are not yet functional*</h2>
          <h1><?php printf( __( 'Category Archives: %s', 'bootstrapcanvaswp' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
		  <hr />
        
              
           <?php if (is_category('25')) : ?>
            <p>This is underthe text to describe category 25</p>
            <?php elseif (is_category('5')) : ?>
            <p>This is the text to describe category 5</p>
            <?php else : ?>
            <p>This is some generic text to describe all other category pages, 
            I could be left blank</p>
            <?php endif; ?>     
            
		  <?php get_template_part( 'partials/dashboard', 'default' ); ?>
            


        </div><!-- /.blog-main -->

        

      </div><!-- /.row -->
      
	<?php get_footer(); ?>