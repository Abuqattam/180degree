<div class="testo col-xs-12">
	<div class="g-head col-xs-12">
		<div class="container">
			<h3 style="text-align:center;">
				Testimonials
			</h3>
		</div>

	</div>
	<div class="container">
		<div class="testo-slider owl-carousel">
			<?php $index = 0;?>
			<?php $testimonals = new WP_Query(array(                       
	'post_type' => 'testimonals',	               
));
			while($testimonals->have_posts()){
				$index++;
				$testimonals->the_post(); 
				$testimonalType= get_field('is_it_a_video_or_text_'); ?>

			<div class="item">
				
				

				<div class="i-data">
					<!--  <h3><?php echo get_field('title_testimonal'); ?></h3> -->
					<p class="testimonials-text"><?php echo get_field('review_testimonal'); ?></p>
					<h4>Services:
						<ul>
							<? $arrayOfCourses = get_field('course_name_sec'); 						 
													 foreach($arrayOfCourses as $course){
														 $courseName = $course['course_name'];
														 echo '<li>' . $courseName . '</li>';	
													 }
							?>	
						</ul>
					</h4>
					<!--<span><?php echo get_field('position_testimonal_'); ?></span> -->
				</div>
				

			</div>
			<?php } wp_reset_query(); ?>
		</div>
	</div>
</div>
