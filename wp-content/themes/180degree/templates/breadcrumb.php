<div class="hero-s hero-iner col-xs-12">
<div class="vid_bg" style="width: 100%; height: 100%;" data-vide-bg="https://3alammash.com/180degree/wp-content/uploads/2022/01/pexels-thirdman-7652720.mp4" data-vide-options="loop: true, muted: true, position: 0% 0%">

<div class="container">
	<div class="cap">
		<?php 
		if(is_page()){ ?>
		<ul>
			<li>
				<a href="<?= get_home_url(); ?>">Home</a>
			</li>
			
			<li><?php the_title(); ?></li>
		</ul>
		<h3><?php the_title(); ?></h3>
		
		<?php } elseif(is_single()){ ?>
			
		<ul>
			<li>
				<a href="<?= get_home_url(); ?>">Home</a>
			</li>
			<li>
				<a href="
				<?php
				$post = get_queried_object();
				$postType = get_post_type_object(get_post_type($post));					
				if($postType->labels->singular_name == 'Courses'){
					 echo esc_url( get_page_link( 269 ) ); 
				}elseif($postType->labels->singular_name == 'Services'){ 
					 echo esc_url( get_page_link( 271 ) ); 
	            }elseif($postType->labels->singular_name == 'Testimonals'){
				        echo esc_url( get_page_link( 273 ) ); 
				} 
				?> 
			    "><?php 
				if ($postType) {
				echo esc_html($postType->labels->singular_name);
				} ?>					
				</a>
			</li>
			
			<li><?php the_title(); ?></li>
		</ul>
		<h3><?php the_title(); ?></h3>	
			
			
			
			
			
			
		<?php } ?>
	</div>
</div> 
	</div>
	</div>