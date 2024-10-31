<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_accordion_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_accordion_quicktags' );
	function oxsn_accordion_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_accordion_title_quicktag', '[oxsn_accordion_title]', '[oxsn_accordion_title class=""]', '[/oxsn_accordion_title]', 'oxsn_accordion_title', 'Accordion Title', 201 );
				QTags.addButton( 'oxsn_accordion_inactive_icon_quicktag', '[oxsn_accordion_inactive_icon]', '[oxsn_accordion_inactive_icon class=""]', '[/oxsn_accordion_inactive_icon]', 'oxsn_accordion_inactive_icon', 'Accordion Inactive Icon', 202 );
				QTags.addButton( 'oxsn_accordion_active_icon_quicktag', '[oxsn_accordion_active_icon]', '[oxsn_accordion_active_icon class=""]', '[/oxsn_accordion_active_icon]', 'oxsn_accordion_active_icon', 'Accordion Active Icon', 203 );
				QTags.addButton( 'oxsn_accordion_content_quicktag', '[oxsn_accordion_content]', '[oxsn_accordion_content class=""]', '[/oxsn_accordion_content]', 'oxsn_accordion_content', 'Accordion Content', 204 );
			</script>

		<?php

		}

	}

}


?>