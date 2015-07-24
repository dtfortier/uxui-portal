                <?php 
                $args = array(
                    'post_type' => 'mockup',
                    'posts_per_page' => 20,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'cat' => 20,
                );
                $loop = new WP_Query( $args );   
                $date_format = get_option( 'date_format' ); ?>
            
                
   
               
                <?php if( have_posts() ) : ?>
                <table width="100%" border="2px;" class="custom">
                <tr>
                <td class="head">Version #</td>    
                <td class="head">Mockup Title</td>
                <td class="head">Post Date</td>
                
                </tr>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <tr>
                <td><?php the_field('version'); ?></td>    
                <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td>
                <td><?php the_time( $date_format ) ?></td>
                
                </tr>
                <?php endwhile; ?>
                </table>
                <?php endif; ?>