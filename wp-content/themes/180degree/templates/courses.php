	<div class="courses col-xs-12">
		<div class="container">
			<div class="c-inner">
				<div class="c-data col-md-4 col-xs-12">
					<h4 data-aos="fade-up" data-aos-duration="500" data-aos-delay="200"><?php echo get_field('courses_title','option');?></h4>
					<p data-aos="fade-up" data-aos-duration="500" data-aos-delay="400"><?php echo get_field('courses_paragraph','option');?></p>
					<a href="<?php echo get_field('courses_button_link','option');?>" class="btn btn-border" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600"><?php echo get_field('courses_button_title','option');?></a>
				</div>
				<div class="c-wrap col-md-8 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">
					<div class="c-slider owl-carousel">

						<?php 
						$courses = new WP_Query(array(
							'post_type' => 'courses',

						));
						while($courses->have_posts()){
							$courses-> the_post(); ?>


						<div class="item">
							<div class="i-img">
								<img src="<?php echo get_field('home_page_section_image'); ?>" alt="<?php bloginfo('name'); ?>" />
								<span><?php echo wp_get_post_terms(get_the_ID(), 'Courses')[0]->name; ?></span>
								<div class="cap">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>


						<?php }  wp_reset_query(); ?>

					</div>
					<?php // comments_template(); ?>
				</div>
			</div>
		</div>
	</div>
