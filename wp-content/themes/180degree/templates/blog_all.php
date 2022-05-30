	<div class="about-console blogs col-xs-12">
          <div class="container"> 
              <div class="row">
                 <?php 
				  $counta = 0; 
	             $blog2 = new WP_Query(array(
					 'posts_per_page' => '15'
				 ));
	              while($blog2->have_posts()){
					  $blog2-> the_post();
			    	  
	            $videoorimg = get_field('do_you_want_to_have_img_or_video_for_this_post');
				    
			    if($videoorimg == 'image'): 
				 $counta++;
				 if($counta <= 2){ ?>
					
				  
				  <div class="block col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                  <div class="inner">
                    <div class="i-img">
                      <a href="<?php the_permalink(); ?>"></a>
                      <img src="<?= get_field('image_post'); ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="i-data">
                      <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                      <?php the_excerpt(); ?>
                    <!--  <div class="i-author">
                        <div class="au-img">
                          <img src="<?= get_field("author_image"); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="au-data">
                          <h4><?= get_field("author"); ?></h4>
                          <span><?= get_field("author_position"); ?></span>
                        </div> 
                      </div>-->
                    </div>
                  </div>
                </div> 
					 
					 
				<?php }else{ ?>
					 
					 <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                  <div class="inner">
                    <div class="i-img">
                      <a href="<?php the_permalink(); ?>"></a>
                      <img src="<?= get_field('image_post'); ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="i-data">
                      <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                      <?php the_excerpt(); ?>
                    <!--  <div class="i-author">
                        <div class="au-img">
                          <img src="<?= get_field("author_image"); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="au-data">
                          <h4><?= get_field("author"); ?></h4>
                          <span><?= get_field("author_position"); ?></span>
                        </div> 
                      </div>-->
                    </div>
                  </div>
                </div>
					 
					 
					 
					 
					 
					 
					 
					 
					 
			   <?php  } ?>
				  
				 
			  	           
				<?php elseif($videoorimg == 'video'): ?>
                    			  
				<div class="block bigOne col-md-12 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                  <div class="inner">
                    <div class="i-img">
                      <span>video</span>
                      <a href="<?= get_field('video_post'); ?>"></a>
                      <img src="<?= get_field('image_post'); ?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="i-data">
                      <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                      <?php the_excerpt(); ?>
                   <!--   <div class="i-author">
                        <div class="au-img">
                          <img src="<?= get_field("author_image"); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="au-data">
                          <h4><?= get_field("author"); ?></h4>
                          <span><?= get_field("author_position"); ?></span>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>  

	           <?php endif; ?>
	            <?php   } wp_reset_query(); ?>
              
              </div>
          </div>
        </div>	           
	           




