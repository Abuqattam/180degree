<div class="part-s col-xs-12">
	<div class="container">
		<div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
			<h3>Clients</h3>
		</div>
		<div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
			<div class="part-slider owl-carousel">
				
				<?php 
				 $clients = new WP_Query(array(
				 'post_type' => 'customers',
				 'posts_per_page' => -1	 
				 )); 
				 while($clients->have_posts()):
				 $clients->the_post();
				?>
				 
				<div class="item"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php bloginfo('name'); ?>" /></div>
				
				<?php endwhile; wp_reset_query(); ?>
				
			</div>
		</div>
	</div>
</div>