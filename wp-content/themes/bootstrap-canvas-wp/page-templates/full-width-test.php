<?php
/**
 * Template Name: Full-width Page Template, No Sidebar, Test
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

  

<div class="no-meta">

      <div class="row">

        <div class="col-sm-12 blog-main">
            
            <h2>Mockups</h2>
                   
         <?php get_template_part( 'loop', 'page' ); ?>
                   
            <?php    

                $args = array('post_type' => 'mockup');
                $loop = new WP_Query( $args );    ?>

                 <!--query_posts('category_ID=8 &showposts=10'); ?>-->

                <?php if( have_posts() ) : ?>
                <table width="100%" border="2px;">
                <tr>
                <td>Version #</td>    
                <td>Mockup Title</td>
                <td>Post Date</td>
                <td>Category</td>


                </tr>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <tr>
                <td><?php the_field('version'); ?></td>    
                <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td>
                <td><?php the_date(); ?></td>
                <td><?php the_category(); ?></td>


                </tr>
                <?php endwhile; ?>
                </table>
            
            <?php endif; ?>
  

        </div><!-- /.blog-main -->

      </div><!-- /.row -->
    
</div>    
	<?php get_footer(); ?>
		

				

					


 
					


