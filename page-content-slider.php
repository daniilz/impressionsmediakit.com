<?php

/** 
Template Name: General with Sidebar Template 
**/

?>

<?php get_header(); ?>

<div id="audience" class="main-container">
    <div class="main wrapper clearfix">
        <div id="contentwrapper">
           <article>
              <section>                    
        					<div id="content-slider"> 
        					  <?php the_field('slider_content'); ?> 
        					</div> 
      						<?php if (have_posts()) : ?>
        					   <?php while (have_posts()) : the_post(); ?>
        				
                        <div class="content">
                          <div class="content-left">
                            <?php the_field('left_content'); ?>                        
                          </div>
                          <div class="content-right">  
                             <?php the_field('right_content'); ?>                                                                              
                          </div> 
                        </div>	

        						  <?php endwhile; ?>
      						<?php endif; ?>
  					   </section>
  				  </article>
  			</div>
	 </div>	
</div>     
<?php get_footer(); ?>