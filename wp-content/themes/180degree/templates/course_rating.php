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
	$index++;
} 

$courseRatingAverage = $sum/$index; 
$totalCourseRatingAverage = round($courseRatingAverage,1);
?>

<div class="co-rate">
	<div class="Stars" style="--rating: <?php echo $totalCourseRatingAverage; ?>;"></div>
	<span><?php echo $totalCourseRatingAverage; ?> Reviews</span>
</div>

<?php }  ?>
