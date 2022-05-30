<div class="serv-s col-xs-12">
    <div class="container">	
        <div class="g-head col-xs-12">
            <h3>our services </h3>
        </div>
        <div class="g-body col-xs-12">
            <div class="row">
                <?php 
                $services = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => '6' 	  
                ));
                while($services->have_posts()){
                    $services->the_post(); ?>
                
               <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                  <div class="inner">
        <!--                   <a href="<?php the_permalink(); ?>"> -->
                      <?php the_post_thumbnail(); ?>
                      <div class="i-cap">
                        <img src="<?php echo get_field('icon_services'); ?>" alt="" >
                        <div>
							<h3><?php the_title();?></h3>
							<?php the_excerpt(); ?>
						  </div>
                      </div>
        <!--                   </a> -->
                  </div>	
                </div>	
                
                <?php } wp_reset_query();  ?>
            </div>
        </div>
    </div>
  </div>	
