<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

    <main class="main-content col-xs-12">
         <div class="feat-s taqs col-xs-12">
            <div class="container">
                <div class="g-body col-xs-12">
                    <?php if(have_posts()) { while(have_posts()) : the_post(); ?>
                        <div class="block col-md-3 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="inner">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                            </div>
                        </div>
                    <?php endwhile; } else { ?>
	                 <br>
					<h1> The content that you are trying to search about is not found....</h1>
					<br>
					<br>
					<br>
<?php  }  ?>
					
					
                </div>
            </div>
        </div>
    </main>


<?php get_footer();