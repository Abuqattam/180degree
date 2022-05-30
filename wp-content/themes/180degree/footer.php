</main> 
<footer class="main-footer col-xs-12">
        <div class="f-top col-xs-12">
            <div class="container">
                <div class="f-item col-md-4 col-xs-12">
                    <h3><?php echo get_field("footer_title","option"); ?></h3>
                    <p><?php echo get_field("footer_paragraph","option"); ?></p>
                </div>
                <div class="f-item col-md-4 col-xs-12">
                    <h4><?php echo get_field("footer_title_2nd","option"); ?></h4>
	
						<?php
					wp_nav_menu(array(
						'theme_location' => 'footer_location',
						'menu_class'      => 'sitemap',
						

					));
					?>
                        
                    
                </div>
                <div class="f-item col-md-4 col-xs-12">
                    <h4><?php echo get_field('contact_info_title', 'option'); ?></h4>
                    <ul class="c-info">
                        <li>
                            <i class="la la-map-marker"></i>
                            <span><?php echo get_field('contact_location', 'option'); ?></span>
                        </li>
                        <li>
                          <i class="la la-phone"></i>
                          <span><?php echo get_field('contact_mobile', 'option'); ?></span>
                          <span><?php echo get_field('contact_mobile_2', 'option'); ?></span>
                      </li>
                      <li>
                        <i class="la la-envelope"></i>
                        <span><a class="green" href="mailto:<?php echo get_field('contact_email', 'option'); ?>"><?php echo get_field('contact_email', 'option'); ?></a></span><br>
						<span><a class="green" href="mailto:<?php echo get_field('contact_email_2', 'option'); ?>"><?php echo get_field('contact_email_2', 'option'); ?></a></span>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="f-botom col-xs-12">
          <div class="container">
            <span><?php echo get_field('all_rights','option'); ?></span>
            <span>180 Degrees <?php echo date('y'); ?> Co.</span>
          </div>
        </div>
        <div class="toTop">
          <i class="la la-angle-up"></i>
        </div>	 
      </footer>
    </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
     <script>
		 
       
		 
		 $('.gallery-filters li').on("click", function () {
			 $(this).addClass('active').siblings().removeClass('active');
		 });
</script>

  </body>

</html>
