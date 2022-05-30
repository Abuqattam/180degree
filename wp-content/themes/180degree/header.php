<!DOCTYPE html>
<html <?= get_language_attributes(); ?> >
  <head>
    <title><?php bloginfo('name'); ?> <?php wp_title( '|', true, 'left' ); ?></title>
    <meta charset="utf-8" />
    <meta name="author" content="Mashworld" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>  
    
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    
  </head>
  <body>
    <div id="loading">
      <div class="loading"></div>
    </div>

    <div class="wrapper col-xs-12">
      <header class="main-head col-xs-12 <?php if (is_home() || is_page()): ?> <?php else: ?>inner-head  in-inner-pages<?php endif; ?>">
        <div class="container">
          <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
              <img src="<?php echo get_field("logo","option"); ?>" alt="" />
            </a>
          </div>
          <button type="button" class="op-menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        
			<?php
					wp_nav_menu(array(
						'theme_location' => 'main_location',
						'container_class'      => 'overlay-menu',			
					));
					?>
          
      </header>	
		<main class="main-content col-xs-12">