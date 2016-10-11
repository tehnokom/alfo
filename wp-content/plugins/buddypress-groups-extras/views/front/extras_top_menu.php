<?php do_action( 'bpge_template_extras_top_menu_before' ); ?>

<?php switch ( $cur ) {
	case 'general': ?>
		<span class="extra-title"><?php echo bpge_names( 'title_general' ); ?></span>
		<span class="extra-subnav">
            <a href="<?php echo $group_link; ?>/" class="button active"><?php _e( 'General', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields/" class="button"><?php _e( 'All Fields', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages/" class="button"><?php _e( 'All Pages', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields-manage/" class="button"><?php _e( 'Add Field', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages-manage/" class="button"><?php _e( 'Add Page', 'buddypress-groups-extras' ); ?></a>
			<?php do_action( 'bpge_group_admin_head_nav', $cur, $group_link ); ?>
        </span>
		<?php break; ?>

	<?php case 'fields': ?>
		<span class="extra-title"><?php echo bpge_names( 'title_fields' ); ?></span>
		<span class="extra-subnav">
            <a href="<?php echo $group_link; ?>/" class="button"><?php _e( 'General', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields/" class="button active"><?php _e( 'All Fields', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages/" class="button"><?php _e( 'All Pages', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields-manage/" class="button"><?php _e( 'Add Field', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages-manage/" class="button"><?php _e( 'Add Page', 'buddypress-groups-extras' ); ?></a>
			<?php do_action( 'bpge_group_admin_head_nav', $cur, $group_link ); ?>
        </span>
		<?php break; ?>

	<?php case 'fields-manage': ?>
		<?php if ( isset( $_GET['edit'] ) && ! empty( $_GET['edit'] ) ) : ?>
			<span class="extra-title"><?php echo bpge_names( 'title_fields_edit' ); ?></span>
			<?php $active = ''; ?>
		<?php else: ?>
			<span class="extra-title"><?php echo bpge_names( 'title_fields_add' ); ?></span>
			<?php $active = 'active'; ?>
		<?php endif; ?>
		<span class="extra-subnav">
            <a href="<?php echo $group_link; ?>/" class="button"><?php _e( 'General', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields/" class="button"><?php _e( 'All Fields', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages/" class="button"><?php _e( 'All Pages', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields-manage/"
               class="button <?php echo $active; ?>"><?php _e( 'Add Field', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages-manage/" class="button"><?php _e( 'Add Page', 'buddypress-groups-extras' ); ?></a>
			<?php do_action( 'bpge_group_admin_head_nav', $cur, $group_link ); ?>
        </span>
		<?php break; ?>

	<?php case 'pages': ?>
		<span class="extra-title"><?php echo bpge_names( 'title_pages' ); ?></span>
		<span class="extra-subnav">
            <a href="<?php echo $group_link; ?>/" class="button"><?php _e( 'General', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields/" class="button"><?php _e( 'All Fields', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages/" class="button active"><?php _e( 'All Pages', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields-manage/" class="button"><?php _e( 'Add Field', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages-manage/" class="button"><?php _e( 'Add Page', 'buddypress-groups-extras' ); ?></a>
			<?php do_action( 'bpge_group_admin_head_nav', $cur, $group_link ); ?>
        </span>
		<?php break; ?>

	<?php case 'pages-manage': ?>
		<?php if ( isset( $_GET['edit'] ) && ! empty( $_GET['edit'] ) ) : ?>
			<span class="extra-title"><?php echo bpge_names( 'title_pages_edit' ); ?></span>
			<?php $active = ''; ?>
		<?php else: ?>
			<span class="extra-title"><?php echo bpge_names( 'title_pages_add' ); ?></span>
			<?php $active = 'active'; ?>
		<?php endif; ?>
		<span class="extra-subnav">
            <a href="<?php echo $group_link; ?>/" class="button"><?php _e( 'General', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields/" class="button"><?php _e( 'All Fields', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages/" class="button"><?php _e( 'All Pages', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/fields-manage/" class="button"><?php _e( 'Add Field', 'buddypress-groups-extras' ); ?></a>
            <a href="<?php echo $group_link; ?>/pages-manage/" class="button <?php echo $active; ?>"><?php _e( 'Add Page', 'buddypress-groups-extras' ); ?></a>
			<?php do_action( 'bpge_group_admin_head_nav', $cur, $group_link ); ?>
        </span>
		<?php break; ?>
	<?php } ?>

<?php do_action( 'bpge_template_extras_top_menu_after' ); ?>

<div style="clear:both">&nbsp;</div>
