<?php


/*
|--------------------------------------------------------------------------
| CONTROL, REGISTER & ENQUEUE FRONT END SCRIPTS / STYLES
|--------------------------------------------------------------------------
*/
function easymedia_frontend_stylesheet() {
	        wp_enqueue_style( 'easymedia_styles', EASYMEDG_PLUGIN_URL .'css/frontend.css' );
}
add_action( 'wp_print_styles', 'easymedia_frontend_stylesheet' );


function easymedia_frontend_script() {
	
	wp_enqueue_script( 'fittext' );	
	wp_enqueue_script( 'mootools-core' );
	wp_enqueue_script( 'easymedia-core' );	
	wp_enqueue_script( 'easymedia-frontend' );	
	
	( easy_get_option( 'easymedia_disen_autopl' ) == '1' ) ? $audautoplay = 'true' : $audautoplay = 'false';
	( easy_get_option( 'easymedia_disen_audio_loop' ) == '1' ) ? $audioloop = 'true' : $audioloop = 'false';
	( easy_get_option( 'easymedia_disen_autoplv' ) == '1' ) ? $autoplaya = '&autoplay=1' : $autoplaya = '';
	( easy_get_option( 'easymedia_disen_autoplv' ) == '1' ) ? $autoplayb = '?autoplay=1' : $autoplayb = '';
	( easy_get_option( 'easymedia_disen_autoplv' ) == '1' ) ? $autoplayc = '1' : $autoplayc = '0';	

	$eparams = array(
		'nblaswf' => plugins_url( '/swf/NonverBlaster.swf' , __FILE__ ),
  		'audiovol' => easy_get_option( 'easymedia_audio_vol' ),
  		'audioautoplay' => $audautoplay,
  		'audioloop' => $audioloop,
  		'vidautopa' => $autoplaya,
  		'vidautopb' => $autoplayb,  
  		'vidautopc' => $autoplayc, 
  		'ajaxpth' => plugins_url( 'ajax.php' , __FILE__ ),  
  		'ovrlayop' => easy_get_option( 'easymedia_overlay_opcty' ) / 100,   
		);

	wp_localize_script( 'easymedia-core', 'EasyLite', $eparams );		
	
}
add_action( 'wp_enqueue_scripts', 'easymedia_frontend_script' );


function easymedia_frontend_prop()
{   
		$boxstyle = EASYMEDG_PLUGIN_URL . 'css/styles/mediabox';
		echo "<link rel=\"alternate stylesheet\" title=\"Light\" type=\"text/css\" media=\"screen,projection\" href=\"$boxstyle/Light.css\" />\n";
		
ob_start(); ?>

<script src="<?php echo plugins_url('js/func/styleswitcher.js' , __FILE__) ?>"></script>
<link rel="stylesheet" href="<?php echo plugins_url('dynamic-style.php' , __FILE__) ?>" type="text/css" media="screen" />    


<!-- Easy Media Gallery Lite START (version <?php echo EASYMEDIA_VERSION; ?>)-->       
    
    <script type="text/javascript">
	/*<![CDATA[*/
	/* Easy Media Gallery */
    jQuery(document).ready(function($) {	
		var add = "easymedia";
jQuery('.da-thumbs a[rel!="easymedia"]').attr('rel', function (i, old) {
    return old ? old + ' ' + add : add; });		
    });
	
	easyActiveStyleSheet('<?php echo easy_get_option( 'easymedia_box_style' ); ?>');
    /*]]>*/</script>	

    <!--[if lt IE 9]>
<script src="<?php echo plugins_url( 'js/func/html5.js' , __FILE__ );  ?>" type="text/javascript"></script>
<![endif]-->  


<!-- Easy Media Gallery Lite  END  -->   
    
	<?php echo ob_get_clean();		
}
add_action( 'wp_head', 'easymedia_frontend_prop' );

?>