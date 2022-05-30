<div class="send-s col-xs-12">
            <div class="container">
				<?php if(is_front_page() || is_home()){ ?>
                <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <h3><?= get_field('form_contact_title','option'); ?></h3>
                    <p><?= get_field('form_contact_paragraph','option'); ?></p>
                </div>
	            <?php } ?>
                <div class="g-body col-xs-12">
                    
                        <?= do_shortcode('[contact-form-7 id="33" title="Contact"]'); ?>
                    
                </div>
            </div>
        </div>
