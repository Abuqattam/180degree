<div class="co-inner">
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
			<h4><?php echo get_the_title(); ?></h4>
		</div>
	</div>
	<ul>
		<li>
			<span>Duration:</span>
			<?= get_field("course_duration"); ?>
		</li>
		<!-- <li>
			<span>Materials:</span>
			<?= get_field("course_material"); ?>
		</li>
		<li>
			<span>Other Course Details:</span>
			<ul>
				<?php
				$courseArray = get_field("other_course_details");
				foreach($courseArray as $item){

					$item_detail = $item['detail'];

					echo "<li>$item_detail</li>";

				} 
				?>
			</ul>
		</li> -->
	</ul>
	<div class="co-form">
		<h4>Register Now</h4>
         
		<?= do_shortcode(' ' . get_field('course_form_shortcode') . ' '); ?>

	</div>
</div>
<?php
$reviews = get_field("does_this_course_have_reviews");
if($reviews == 'Yes'){ ?>

<!-- <div class="co-revs">
	<h4>Reviews</h4>
	<ul>  
		<?php 
	$reviews = get_field("reviews");
	$index = 0;
	$sum = 0;
	foreach($reviews as $single){

		$item_img = $single['person_image'];
		$item_name = $single['name_review'];
		$item_review = $single['rating_reviews'];
		$sum+= $item_review;
		$item_paragraph = $single['review_paragraph']; 
		$index++;
		$reviewsNumber = 4;
		?> 
		
		<li class="<?php if($index >= $reviewsNumber){echo 'reviewitem'; } ?>" style="<?php if($index >= $reviewsNumber){echo 'display:none';} ?>">
			<div class="r-img">
				<img src="<?php echo $item_img ?>" alt="">
			</div>
			<div class="r-data">
				<h5><?php echo $item_name ?></h5>
				<div class="co-rate">
					<div class="Stars" style="--rating: <?php echo $item_review ?>;"></div>
					<span><?php echo $item_review ?> Reviews</span>
				</div>
				<p><?php echo $item_paragraph ?></p>
			</div>
		</li>
		
	<?php 	
	} 

	$courseRatingAverage = $sum/$index; 
	$totalCourseRatingAverage = round($courseRatingAverage,1);
	global $totalCourseRatingAverage;
		?>

	</ul>
	<div class="g-more">
		<a id="loadbtn" href="javascript:void(0)">Show More</a>
	</div><br /><br />
</div> -->
<?php }  wp_reset_query(); ?>