<?php

/*

Template Name: Editorial Content Template

*/

?>

<?php get_header(); ?>


<div class="main-container page-editorial-content">

    <div class="main wrapper clearfix">

        <div id="contentwrapper">

            <article>

                <section> 
                    <div class="table-header">
                        <span class="title"><h3><?php the_title(); ?></h3></span>
                    </div>            
                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>
                    <div class="table">     
                    <table cellspacing="0" cellpadding="0" border="0" align="left">
                        <thead>
                            <tr class="header-row">
                                <th><strong><?=the_field('column_1_title'); ?></strong></th>
                                <th><strong><?=the_field('column_2_title'); ?></strong></th>
                            </tr>
                        </thead>
                        <tbody>

       
                    <?php
                    $contents = get_field('contents');

                    $posttype = get_field('row_type_name'); 


                   
                    if(!empty($contents)) {
                        foreach($contents as $content) { 
                    ?>
                        <tr>
                            <td style="width: 25%;"><strong><?=$content['topic']; ?></strong></td>
                            <td><?=$content['about']; ?></td>              
                        </tr>   
                    <?php  
                        }    
                    }                                        
                    ?>                                          

                       </tbody>
                    </table>   
                    </div> 
                    <?php if(get_field('note')) { ?> 
                        <div class="note">
                            <span><? the_field('note'); ?></span>
                        </div><br />
                    <? } ?>  
                    <?php endwhile; ?>               
                    <?php endif; ?> 
                    </section>
            </article>
            </div>
        </div>

</div>

    <?php get_footer(); ?>