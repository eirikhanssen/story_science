<h1>Storyscience Theme Options</h1>
<form method="post" action="">
	<?php settings_fields('storyscience-settings-group');?>
	<?php do_settings_sections('storyscience_settings') ?>
	<?php submit_button(); ?>
</form>