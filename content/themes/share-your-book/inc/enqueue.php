<?php

if (! function_exists('shareYourBook_enqueue_scripts')) {


	function shareYourBook_enqueue_scripts() {
		wp_enqueue_style(
			'shareYourBook_style',
			get_theme_file_uri('public/css/app.css'),
            [ 'shareYourBook_vendor' ],
            SHAREYOURBOOK_THEME_VERSION
		);
		wp_enqueue_style(
			'shareYourBook_vendor',
			get_theme_file_uri('public/css/vendors.css'),
            [],
            SHAREYOURBOOK_THEME_VERSION
		);
        wp_enqueue_script(
            'shareYourBook_script',
            get_theme_file_uri( 'public/js/app.js' )
        );
	}
}
add_action('wp_enqueue_scripts' , 'shareYourBook_enqueue_scripts');
