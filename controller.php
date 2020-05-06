
<?php
if (is_front_page() || is_page()){
	add_action( "wp_footer", "ctaBannerScript" );

	function ctaBannerScript() {
		wp_enqueue_script( "script", plugins_url( "/banner.js" , __FILE__ ) );
	}

}