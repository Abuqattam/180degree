<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nabd
 */

get_header();
?>


    <div class="container">
        <div class="col-xs-12">
            <div class="page404">
                <h1>404</h1>
				
                <h2><?php _e('Sorry This page Not Found...', 'sa'); ?></h2>

            </div>
        </div>
    </div>

<style>
    .page404 {
        text-align: center;
    }

    .page404 h1 {
        color: #000000;
        font-size: 181px;
        margin-top: 51px;
        margin-bottom: 38px;
    }
    .page404 {
        text-align: center;
        margin-bottom: 28px;
		color: #000000;
		
    }
</style>


<?php
get_footer();