<?php
// Exit if the file is accessed directly over web
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}
?>

<div class="mpp-container mpp-clearfix mpp-members-component" id="mpp-container">
	<div class="mpp-breadcrumbs mpp-clearfix"><?php mpp_gallery_breadcrumb();?></div>
	
	<?php 
	if( is_super_admin() || bp_is_my_profile() ) {
		mpp_display_space_usage();
	}	
	?>
<?php
	//IMPORTANT: Template loading
	//Please do not mmodify the code below unless you know what you are doing
	
	if ( mpp_is_gallery_create() ) {
		$template = 'gallery/create.php';
	} elseif ( mpp_is_gallery_management() ) {
		$template = 'buddypress/members/gallery/manage.php';
	} elseif ( mpp_is_media_management() ) {
		$template = 'buddypress/members/media/manage.php';
	} elseif ( mpp_is_single_media() ) {
		$template = 'buddypress/members/media/single.php';
	} elseif ( mpp_is_single_gallery() ) {
		$template = 'buddypress/members/gallery/single.php';
	} elseif ( mpp_is_gallery_home() ) {
		$template = 'gallery/loop-gallery.php';
	} else {
		$template = 'gallery/404.php';//not found
	}
	
	$template = mpp_locate_template( array( $template ), false );
	//filter on located template
	$template = apply_filters( 'mpp_member_gallery_located_template', $template );

	if ( is_readable( $template ) ) {
		include $template;
	}
	
	//you can modify anything after this
?>
</div>  <!-- end of mpp-container -->