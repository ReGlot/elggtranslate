<?php
gp_title(__('Elgg Translate Import', 'elggtranslate'));
gp_tmpl_header();
$project_dropdown1 = gp_projects_dropdown('import[core_project]', $import['core_project'], array(), __('Create a new project', 'elggtranslate'), true);
$project_dropdown2 = gp_projects_dropdown('import[plugin_project]', $import['plugin_project'], array(), __('Create a new project', 'elggtranslate'), true);
?>
<h2><?php _e('Elgg Translate Import', 'elggtranslate'); ?></h2>

<form action="" method="post" class="secondary" enctype="multipart/form-data">
<input type="hidden" name="import[gp_handle_settings]" value="on">
<dl>
	<dt><h3><?php _e('Elgg Package Import', 'elggtranslate'); ?></h3></dt>
	<dd>
		<p><?php _e('Import a language pack exported by the Language Packs plugin for Elgg.
		The core plugins are imported as subprojects into a top-level Elgg project, while all other
			plugins are imported into a top level Third Party Plugins project.
			The <em>en</em> locale is used for originals, any other locale is imported as translations.', 'elggtranslate'); ?></p>
		<p>
		<label for="import[core_project]"><?php _e('Project to import Elgg cores into', 'elggtranslate'); ?></label><br/>
		<?php echo $project_dropdown1; ?>
		</p>
		<p>
		<label for="import[plugin_project]"><?php _e('Project to import third party plugins into', 'elggtranslate'); ?></label><br/>
		<?php echo $project_dropdown2; ?>
		</p>
		<?php // <p> Either </p> ?>
		<p>
		<?php // <input type="radio" value="zip" name="import[elggtype]" id="elggtypezip"> ?>
		<label for="upload"><?php _e('Select the Elgg install zip file', 'elggtranslate'); ?></label><br/>
		<input type="file" name="upload" id="elggfile"><br/>
		<small><?php _e('You can get this file by exporting a language pack with the <a href="http://community.elgg.org/plugins/1095926/2.0/language-packs" target="_blank">Language Packs plugin</a> for Elgg', 'elggtranslate'); ?></small>
		</p>
		<?php /*
		<p> Or </p>
		<p>
		<input type="radio" value="dir" name="import[elggtype]" id="elggtypedir">
		<label for="import[elggpath]"><?php _e('Select the Elgg path on the server'); ?></label><br/>
		<input type="text" name="import[elggpath]" id="elggpath" style="width:400px" value="<?php echo $import['elggpath']; ?>"><br/>
		<small><?php _e('If GlotPress and Elgg are running on the same server, then you can specify what the Elgg path is and GlotPress will read from it directly.'); ?></small>
		</p>
		 */ ?>
		<p>
		<input type="checkbox" name="import[originals]" value="on" checked="checked">
		<label for="import[originals]"><?php _e('Also import original English texts', 'elggtranslate'); ?></label><br/>
		</p>
		<p>
		<input type="checkbox" name="import[overwrite]" value="on">
		<label for="import[overwrite]"><?php _e('Do not overwrite exisiting translation sets', 'elggtranslate'); ?></label><br/>
		</p>
	</dd>
</dl>
<p>
	<input type="submit" name="submit" value="<?php echo esc_attr(__('Import', 'elggtranslate')); ?>" id="submit" />
</p>
</form>
<?php
/*
<script>
	$('#elggfile').focus(function() {
		$('#elggtypezip').attr('checked', true);
	})
	$('#elggpath').focus(function() {
		$('#elggtypedir').attr('checked', true);
	})
</script>
*/
gp_tmpl_footer();