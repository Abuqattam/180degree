	<div class="about-console courses col-xs-12">
		<div class="container"> 




			<ul class="nav-tabs col-xs-12">
				<li class="active">
					<a data-target="#all" data-toggle="tab">all</a>
				</li>
				<!-- <li>
					<a data-target="#in-class" data-toggle="tab">In-Class</a>
				</li>
				<li>
					<a data-target="#online" data-toggle="tab">Online</a>
				</li> --> 
			</ul>



			<div class="tab-content col-xs-12">

				<div class="tab-pane fade active in" id="all">
					<div class="row">
						<?php $allcourses = new WP_Query(array(
						'post_type' => 'courses',
						));
						while($allcourses -> have_posts()){
							$allcourses -> the_post(); 
						?>

						<div class="block col-md-4 col-sm-6 col-xs-12"  data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
							<div class="inner">
								<div class="i-img">
									<span><?php echo wp_get_post_terms(get_the_ID(), 'Courses')[0]->name; ?></span>
									<a href="<?php the_permalink(); ?>"></a>
									<?php the_post_thumbnail('full'); ?>
									<!-- <h4><?php the_title(); ?></h4> -->
								</div>
							</div>
						</div>
						<?php  }  wp_reset_query(); ?>
					</div>
				</div>


				<div class="tab-pane fade" id="in-class">
					<div class="row">
						<?php $classCourses = new WP_Query(array(
						'post_type' => 'courses',
	                    'tax_query' => array(
									array(
										'taxonomy' => 'Courses', // Taxonomy Name
										'terms' => 7, // Term Value 
										'field' => 'term_id'
									)
							)
						));
						while($classCourses -> have_posts()){
							$classCourses -> the_post(); 
						?>

						<div class="block col-md-4 col-sm-6 col-xs-12"  data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
							<div class="inner">
								<div class="i-img">
									<span><?php echo wp_get_post_terms(get_the_ID(), 'Courses')[0]->name; ?></span>
									<a href="<?php the_permalink(); ?>"></a>
									<?php the_post_thumbnail(); ?>
									<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<?php  } wp_reset_query(); ?>

					</div>
				</div>


				<div class="tab-pane fade" id="online">
					<div class="row">

						<?php $onlineCourses = new WP_Query(array(
							'post_type' => 'courses',
							'tax_query' => array(
								array(
									'taxonomy' => 'Courses', // Taxonomy Name
									'terms' => 8, // Term Value 
									'field' => 'term_id'
								)
								)

							));
						while($onlineCourses -> have_posts()){
							$onlineCourses -> the_post(); 
						?>

						<div class="block col-md-4 col-sm-6 col-xs-12"  data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
							<div class="inner">
								<div class="i-img">
									<span><?php echo wp_get_post_terms(get_the_ID(), 'Courses')[0]->name; ?></span>
									<a href="<?php the_permalink(); ?>"></a>
									<?php the_post_thumbnail(); ?>
									<h4><?php the_title(); ?></h4>
								</div>
							</div>
						</div>
						<?php  }  wp_reset_query(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
