                 <?php 
	             $blog = new WP_Query(array(
					 'posts_per_page' => '3'			
				 ));
	              while($blog->have_posts()){
					  $blog-> the_post(); 
	
	            $videoorimg = get_field('do_you_want_to_have_img_or_video_for_this_post');
				    
			    if($videoorimg == 'image'): ?>
	
				<div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <div class="inner">
                        <img src="<?= get_field('image_post'); ?>" alt="">
                        <a href="<?= get_field('image_post'); ?>" class="op-imp" data-fancybox="images">
                            <i class="las la-expand"></i>
                        </a>
                    </div>
                </div>		   
	           
				<?php elseif($videoorimg == 'video'): ?>
                
	           <div class="block col-md-4 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <div class="inner">
                        <img src="<?= get_field('image_post'); ?>" alt="">
                        <a href="<?= get_field('video_post'); ?>" class="op-imp" data-fancybox="images">
                            <i class="la la-play"></i>
                        </a>
                    </div>
                </div>
	           <?php endif; ?>
	            <?php   }  wp_reset_query(); ?>
	           


