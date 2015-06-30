<?php

/*-------------------------------------------------------------------------------*/
/*   Comparison Page
/*-------------------------------------------------------------------------------*/
function easmedia_create_comparison_page() {
    $easmedia_comparison_page = add_submenu_page('edit.php?post_type=easymediagallery', 'Comparison', __('UPGRADE to PRO', 'easmedia'), 'edit_posts', 'comparison', 'easymedia_comparison');
}
add_action( 'admin_menu', 'easmedia_create_comparison_page' );

/*-------------------------------------------------------------------------------*/
/*   Generate Comparison Page
/*-------------------------------------------------------------------------------*/
function easymedia_comparison() {
	
	wp_enqueue_style( 'easymedia-comparison-css' );	
	wp_enqueue_script( 'easymedia-comparison-js' );
	
	
?>

<!-- DC Pricing Tables:3 Start -->

    <div class="wrap">
        <div id="icon-edit" class="icon32 icon32-posts-easymedia"><br /></div>
        <h2><?php _e('Comparison', 'easmedia'); ?></h2>     
  <div class="tsc_pricingtable03 tsc_pt3_style1" style="margin-bottom:110px; height:1330px;">
    <div class="caption_column">
      <ul>
        <li class="header_row_1 align_center radius5_topleft"><?php emg_share(); ?></li>
        <li class="header_row_2">
          <h2 class="caption"><?php echo EASYMEDIA_NAME; ?></h2>
        </li> 
        <li class="row_style_2"><span>License</span></li>
        <li class="row_style_4"><span>Single Image</span></li>
        <li class="row_style_2"><span>Video Media</span></li>       
        <li class="row_style_4"><span>Audio Media</span></li>
        <li class="row_style_2"><span>HTML5 Video/Audio (mp4, webm, ogv)</span></li>   
        <li class="row_style_4"><span>Auto Fetch Youtube/Vimeo Thumbnail</span><span class="newftr"></span></li>    
        <li class="row_style_2"><span>Photo Albums</span><a target="_blank" href="http://goo.gl/B6WraQ" style="text-decoration:underline !important;"> Click for Sample</a>&nbsp;&nbsp;<span class="newftr"></span></li>                 
        <li class="row_style_4"><span>Image Slider</span><a target="_blank" href="http://goo.gl/kica46" style="text-decoration:underline !important;"> Click for Sample</a>&nbsp;&nbsp;<span class="newftr"></span></li>
        <li class="row_style_2"><span>Image Gallery</span><a target="_blank" href="http://goo.gl/CLoA4r" style="text-decoration:underline !important;"> Click for Sample</a></li>  
         <li class="row_style_4"><span>Portfolio</span><a target="_blank" href="http://goo.gl/XprVz6" style="text-decoration:underline !important;"> Click for Sample</a></li>                     
        <li class="row_style_2"><span>Pagination</span><a target="_blank" href="http://goo.gl/Bk0gUE" style="text-decoration:underline !important;"> Click for Sample</a>&nbsp;&nbsp;<span class="newftr"></span></li>
        <li class="row_style_4"><span>Carousel</span><a target="_blank" href="http://goo.gl/Zyy6DE" style="text-decoration:underline !important;"> Click for Sample</a>&nbsp;&nbsp;<span class="newftr"></span></li>
        <li class="row_style_2"><span>10+ Lightbox styles</span><a target="_blank" href="http://goo.gl/4oz80i" style="text-decoration:underline !important;"> Click for Sample</a>&nbsp;&nbsp;<span class="newftr"></span></li>      
        <li class="row_style_4"><span>Backup & Restore Settings</span></li>
        <li class="row_style_2"><span>Google Maps / Street View</span></li>
        <li class="row_style_4"><span>Custom CSS</span></li>
        <li class="row_style_2"><span>Custom Columns</span></li>
        <li class="row_style_4"><span>Custom Content</span></li>
        <li class="row_style_2"><span>Custom Media Alignment</span></li>
        <li class="row_style_4"><span>Custom Thumbnail Size</span></li>
        <li class="row_style_2"><span>Image &amp; Video Custom Size</span></li>
        <li class="row_style_4"><span>Unlimited colors and layout</span></li>
        <li class="row_style_2"><span>Pattern Overlay</span></li>
        <li class="row_style_4"><span>Powerfull Control Panel </span> <a href="http://demo.ghozylab.com/content/pro.html?utm_source=comparison&utm_medium=comparisonpage&utm_campaign=gotodemoprocp" target="_blank" style="text-decoration:underline !important;">Screenshot</a></li>
        <li class="row_style_2"><span>Advanced Shortcode </span><a href="<?php echo plugins_url( 'images/pro-version-shortcode-manager.png' , dirname(__FILE__) ) ?>" target="_blank" style="text-decoration:underline !important;">Screenshot</a></li>
        <li class="row_style_4"><span>Facebook, Twitter &amp; Pinterest share buttons</span></li>
         <li class="row_style_2"><span>AJAX page/post load Support</span></li>
        <li class="row_style_2"><span>WP Multisite</span></li>
        <li class="row_style_4"><span>Support</span></li>
        <li class="row_style_2"><span>Update</span></li>
        <li class="footer_row"></li>
      </ul>
    </div>
    <div class="column_1">
      <ul>
        <li class="header_row_1 align_center">
          <h2 class="col1">Lite</h2>
        </li>
        <li class="header_row_2 align_center">
          <h1 class="col1">Free</h1>
        </li>
        <li class="row_style_3 align_center">None</li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>  
        <li class="row_style_3 align_center"><span class="pricing_no"></span></li>  
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>      
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>        
        <li class="row_style_3 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_no"></span></li>          
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>      
        <li class="row_style_3 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>        
        <li class="row_style_3 align_center"><span>max 3 columns</span></li>
        <li class="row_style_1 align_center"><span>title &amp; subtitle ONLY</span></li>
        <li class="row_style_3 align_center"><span>center</span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_3 align_center"><span>3 patterns</span></li>
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>
		<li class="row_style_3 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_1 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
         
        <li class="footer_row"></li>
      </ul>
    </div>
    
    <div class="column_2">
      <ul>
        <li class="header_row_1 align_center">
          <h2 class="col2">Pro</h2>
        </li>
        <li class="header_row_2 align_center">
          <h1 class="col2">$<span><?php echo EASYMEDIA_PRO_PRICE; ?></span></h1>
        </li>
        <li class="row_style_4 align_center"><span style="font-weight: bold; color:#F77448; font-size:14px;">1 Site</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>  
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span>up to 8 columns</span></li>
        <li class="row_style_2 align_center"><span>title, subtitle &amp; unlimited content</span></li>
        <li class="row_style_4 align_center"><span>left, right, center</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span>15 patterns</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
		<li class="row_style_4 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_2 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_4 align_center"><span>1 Month</span></li>
        <li class="row_style_2 align_center"><span>1 Year</span></li>
        <li class="footer_row"><a target="_blank" href="http://ghozylab.com/plugins/ordernow.php?order=pro&utm_source=lite&utm_medium=comparisonpage&utm_campaign=orderfromcompare" class="tsc_buttons2 red">Upgrade Now</a></li>
      </ul>
    </div>    
    
    <div class="column_2">
      <ul>
        <li class="header_row_1 align_center">
          <h2 class="col2">Pro+</h2>
        </li>
        <li class="header_row_2 align_center">
          <h1 class="col2">$<span><?php echo EASYMEDIA_PRICE; ?></span></h1>
        </li>
        <li class="row_style_4 align_center"><span style="font-weight: bold; color:#F77448; font-size:14px;">3 Sites</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span>up to 8 columns</span></li>
        <li class="row_style_2 align_center"><span>title, subtitle &amp; unlimited content</span></li>
        <li class="row_style_4 align_center"><span>left, right, center</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span>15 patterns</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
		<li class="row_style_4 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_2 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_4 align_center"><span>1 year</span></li>
        <li class="row_style_2 align_center"><span>1 year</span></li>
        <li class="footer_row"><a target="_blank" href="http://ghozylab.com/plugins/ordernow.php?order=proplus&utm_source=lite&utm_medium=comparisonpage&utm_campaign=orderfromcompare" class="tsc_buttons2 red">Upgrade Now</a></li>
      </ul>
    </div>
    <div class="column_2">
      <ul>
        <li class="header_row_1 align_center">
          <h2 class="col2">Pro++</h2>
        </li>
        <li class="header_row_2 align_center">
          <h1 class="col2">$<span><?php echo EASYMEDIA_PLUS_PRICE; ?></span></h1>
        </li>
        <li class="row_style_4 align_center"><span style="font-weight: bold; color:#F77448; font-size:14px;">5 Sites</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>         
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span>up to 8 columns</span></li>
        <li class="row_style_2 align_center"><span>title, subtitle &amp; unlimited content</span></li>
        <li class="row_style_4 align_center"><span>left, right, center</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span>15 patterns</span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_4 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_2 align_center"><span class="pricing_yes"></span></li>
		<li class="row_style_4 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_2 align_center"><span class="pricing_no"></span></li>
        <li class="row_style_4 align_center"><span>1 year</span></li>
        <li class="row_style_2 align_center"><span>1 year</span></li>
        <li class="footer_row"><a target="_blank" href="http://ghozylab.com/plugins/ordernow.php?order=proplusplus&utm_source=lite&utm_medium=comparisonpage&utm_campaign=orderfromcompare" class="tsc_buttons2 red">Upgrade Now</a></li>
      </ul>
    </div>    
     <div class="column_4">
      <ul>
        <li class="header_row_1 align_center">
          <h2 class="col2">Developer</h2>
        </li>
        <li class="header_row_2 align_center">
          <h1 class="col2">$<span><?php echo EASYMEDIA_DEV_PRICE; ?></span></h1>
        </li>
        <li class="row_style_3 align_center"><span style="font-weight: bold; color: #F77448; font-size:14px;">15 Sites</span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>  
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li> 
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span>up to 8 columns</span></li>
        <li class="row_style_1 align_center"><span>title, subtitle &amp; unlimited content</span></li>
        <li class="row_style_3 align_center"><span>left, right, center</span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span>15 patterns</span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
		<li class="row_style_3 align_center"><span class="pricing_yes"></span></li>        
        <li class="row_style_1 align_center"><span class="pricing_yes"></span></li>
        <li class="row_style_3 align_center"><span>1 year</span></li>
        <li class="row_style_1 align_center"><span>1 year</span></li>
        <li class="footer_row"><a target="_blank" href="http://ghozylab.com/plugins/ordernow.php?order=dev&utm_source=lite&utm_medium=comparisonpage&utm_campaign=orderfromcompare" class="tsc_buttons2 red">Upgrade Now</a></li>
      </ul>
    </div>   
    
    
    </div>
  </div>
<!-- DC Pricing Tables:3 End -->
<div class="tsc_clear"></div> <!-- line break/clear line -->
<?php
}


?>