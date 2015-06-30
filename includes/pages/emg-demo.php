<?php

/* @since 1.3.29 */


function easmedia_demo_page() {
	
		wp_enqueue_style( 'emg-bootstrap-css' );
		wp_enqueue_script( 'emg-bootstrap-js' );
	
	
	?>
    <div class="wrap">

   <div class="metabox-holder" style="display:inline-block; max-width: 30%; float:right; vertical-align:top;">
			<div class="postbox">
            <h3><?php _e( 'Check it Out!', 'easmedia' ); ?></h3> 
            <?php easmedia_news_metabox(); ?>
           </div>
      </div>
<div class="metabox-holder" style="max-width:73%; display:block;">
			<div class="postbox">
				<h3><?php _e( 'Subscribe and Get Free Updates', 'easmedia' ); ?></h3>
        <div id="easymedia_docs2" style="padding:10px !important; ">
<script src="https://apis.google.com/js/platform.js"></script>  <div class="g-ytsubscribe" data-channel="GhozyLab" data-layout="full"></div>
    </div>
    </div>
  </div>
  

<div class="metabox-holder" style="max-width:73%; display:block;">
			<div class="postbox">
				<h3><?php _e( 'New Plugin, check it out!', 'easmedia' ); ?></h3>
        <div id="easymedia_docs3" style="padding:10px !important; ">
<a style="outline: none !important;" href="http://demo.ghozylab.com/plugins/easy-contact-form-plugin/" target="_blank"><img style="cursor:pointer;" src="<?php echo plugins_url( 'images/best-cp-plugin.png' , dirname(__FILE__) ); ?>" width="728" height="90" alt="New Release!" ></a>
    </div>
    </div>
  </div>  
  
  
 <?php 
 if ( easy_get_option( 'easymedia_disen_dasnews' ) == '1' ) {  ?>
 <div class="metabox-holder" style="max-width:73%; display:block;">
			<div class="postbox">
				<h3><?php _e( 'Share Easy Media Gallery', 'easmedia' ); ?></h3>
        <div id="easymedia_docs2" style="padding: 3px 3px 3px 17px !important; ">
        <?php emg_dashboard_widget(); ?>
    </div>
    </div>
  </div>
  <?php } ?>

		<div class="metabox-holder" style="max-width:73%; display:block;">
			<div class="postbox">
				<h3><?php _e( 'Video Tutorials', 'easmedia' ); ?></h3>
        <div id="easymedia_docs1" style="padding-left:10px !important;">
        <ul id="vidlist" style="list-style: square; position:relative; margin-left:15px; margin-bottom:25px">
        <li><a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/pjHvRoV2Bn8">How to Create Simple Photo Albums</a>&nbsp;&nbsp;<i style="color:red;">(NEW Feature @since version 1.3.10)</i></li>
        <li><a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/H1Z3fidyEbE">How to Create Simple Gallery</a>&nbsp;&nbsp;<i style="color:red;">(NEW Feature @since version 1.2.79)</i></li>
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/dXFBNY5t6E8">How to Create Single Image Media</a></li>
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/htxwZw_aPF0">How to Create Video Media Types</a></li>  
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/Bsn-CB5Hpbw">How to Create Audio (mp3) Media Types</a></li>
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/Z2qwXz7GIRw">How to Publish Easy Media Gallery</a></li>                  
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/2T73wvt_wOA">How to Change Media Border Size and Color</a></li>
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/56f_C7OXiAE">How to Change Media Columns</a></li>
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/TQ1MMxhsyD8">How to Create Grid Gallery</a>&nbsp;&nbsp;<i>(Pro version)</i></li> 
		<li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/OEoNB2LpnSE">How to Create Portfolio</a>&nbsp;&nbsp;<i>(Pro version)</i></li>
        
		<li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/-N0JNcToHOI">How to Create Grid Gallery with Pagination</a>&nbsp;&nbsp;<i>(Pro version)</i></li>        
        
		<li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/skCMKvVLD5o">How to Set Order of Image</a>&nbsp;&nbsp;<i>(Pro version)</i></li>
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/Oee2cpKT-kE">How to Create Audio Soundcloud</a>&nbsp;&nbsp;<i>(Pro version)</i></li>
        
<li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/uAGWUcs5ofE">How to Fetch Youtube or Vimeo Thumbnail</a>&nbsp;&nbsp;<i>(Pro version)</i></li>        
        
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/SYH8Yl2SQd4">How to Create Audio Reverbnation</a>&nbsp;&nbsp;<i>(Pro version)</i></li>    
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/PEgfleRf6hg">How to Create Google Maps</a>&nbsp;&nbsp;<i>(Pro version)</i></li>               
        <li><a data-toggle="modal" data-target="#videoModal" href="#" data-theVideo="http://www.youtube.com/embed/9cuYyBMKx2k">How to Insert Image into Media Description</a>&nbsp;&nbsp;<i>(Pro version)</i></li>        
                          
        </ul>
    </div>
  </div> 
  
 <!-- Video on Modal  -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div style="width: 835px; height:450px;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe width="803" height="430" src=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div> 
 <!-- End Video on Modal  -->  
 
<script type="text/javascript">// <![CDATA[
jQuery(document).ready(function($) {

      var trigger =jQuery("body").find('[data-toggle="modal"]');
      trigger.click(function () {
          var theModal = jQuery(this).data("target"),
              videoSRC = jQuery(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1&rel=0";
          jQuery(theModal + ' iframe').attr('src', videoSRCauto);
          jQuery(theModal + ' button.close').click(function () {
              jQuery(theModal + ' iframe').attr('src', videoSRC);
          });
          jQuery('.modal').click(function () {
              jQuery(theModal + ' iframe').attr('src', videoSRC);
          });
      });
	  
});
// ]]></script>
 
  
 </div>     

  </div> 
	<?php 
}


?>