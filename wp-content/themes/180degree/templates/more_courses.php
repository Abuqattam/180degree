<div class="co-extra col-xs-12">
	<h4>More Courses</h4>
	<div class="ex-body">
		<div class="co-slider owl-carousel">
			<?php 

			$courses = new WP_Query(array(
				'post_type' => 'courses',

			));
			while($courses->have_posts()){
				$courses-> the_post(); ?>

			<div class="item">
				<div class="block">
					<div class="inner">
						<?php 
				$imageOrVideoInnerCourse = get_field('do_want_to_have_a_video_or_image_for_the_course');
				if($imageOrVideoInnerCourse == 'image'):
						?>

						<div class="i-img">
							<?php the_post_thumbnail(); ?>
						</div>

						<?php elseif($imageOrVideoInnerCourse == 'video'): ?>

						<div class="i-img">
							<?php the_post_thumbnail(); ?>
							<a href="<?php echo get_field("video_url_course"); ?>" data-fancybox>
								<i class="la la-play"></i>
							</a>
							<span>video</span>
						</div>
						<?php else: ?>

						<div class="i-img">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>			

						<div class="co-rate">
							<?php 
				$reviews = get_field("does_this_course_have_reviews");
				if($reviews == 'Yes'){ 
					$reviews = get_field("reviews");
					$index = 0;
					$sum = 0;
					foreach($reviews as $single){
						$item_img = $single['person_image'];
						$item_name = $single['name_review'];
						$item_review = $single['rating_reviews'];
						$sum+= $item_review;
						$item_paragraph = $single['review_paragraph']; 
						$index++; } 
					$courseRatingAverage = $sum/$index; 
					$totalCourseRatingAverage = round($courseRatingAverage,1); ?> 

							<!-- <div class="Stars" style="--rating: <?=$totalCourseRatingAverage;?>;"></div>
<span><?=$totalCourseRatingAverage;?> Reviews</span> -->
						</div> <?php } ?>
						<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
					</div>
				</div>
			</div>

			<?php } wp_reset_query(); ?>

		</div>
	</div>
</div>