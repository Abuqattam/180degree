<div class="about-console vlog col-xs-12">
	<div class="container"> 
		<div class="row">

			<?php $vlogs = new WP_Query(array(
	'post_type' => 'vlogs',
	'posts_per_page' => -1

)); 
			while($vlogs -> have_posts()){
				$vlogs -> the_post(); ?>


			<div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
				<div class="inner">
					<div class="i-img">
						<?php the_post_thumbnail(); ?>
						<a href="<?php echo get_field("video_link_vlog"); ?>" data-fancybox>
							<i class="la la-play"></i>
						</a>
						<span>video</span>
					</div>
					<div class="title"><?php the_title(); ?></div>
				</div>
			</div>

			<?php } wp_reset_query(); ?>  



		</div>
	</div>
</div>
