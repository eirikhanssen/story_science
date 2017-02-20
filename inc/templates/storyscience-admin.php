<h1>Storyscience Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('storyscience-settings-group');?>
	<?php do_settings_sections('storyscience_settings') ?>
	<?php submit_button(); ?>
</form>