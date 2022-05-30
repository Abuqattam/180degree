<div class="what-bot col-xs-12">
              <div class="row">
                <div class="b-card col-md-6 col-xs-12">
                  <div class="row">
					
					  <?php $publicCourse = new WP_Query(array(
                        'post_type' => 'courses',
	                    'posts_per_page' => 4,
						
                      ));
					  while($publicCourse->have_posts()){
						  $publicCourse-> the_post(); ?>
						  
									  
					  
                      <div class="block col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <div class="inner">
                          <div class="i-img">
							 
							  
							 <span><?php echo wp_get_post_terms(get_the_ID(), 'Courses')[0]->name; ?></span>  

                            <a href="<?php the_permalink(); ?>"></a>
                            <?php the_post_thumbnail(); ?>
                            <h4><?php the_title(); ?></h4>
                          </div>
                        </div>
                      </div>
					  
		          <?php } wp_reset_query(); ?>
					 
                  </div>
                </div>
                <div class="b-card col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                  <div class="b-inner">
                    <h4>Public Courses</h4>
                    <p><?php echo get_field('public_courses_paragraph','option'); ?></p>
                    <a href="<?php echo get_field('public_courses_link','option'); ?>" class="btn">View all Courses</a>
                  </div>
                </div>
              </div>
            </div>