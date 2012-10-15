<?php
gp_title(__('Welcome', 'elggtranslate'));
gp_tmpl_header();
?>
	<h2><?php _e('Welcome to the Elgg Translation Portal', 'elggtranslate') ?></h2>
	<p>
		<?php _e('In these pages you can find a collection of language packs for <a href="http://www.elgg.org">Elgg</a>,
		one - if not the - greatest engine for social networking websites.', 'elggtranslate') ?>
	</p>
	<p>
        <?php _e('The best way to use this portal is together with the <a href="http://community.elgg.org/plugins/1095926/1.0/language-packs">Language Pack plugin</a>
		for Elgg, which imports and exports Zip files in exactly the format produced or processed
		by this translation portal.', 'elggtranslate') ?>
	</p>
	<p>
        <?php _e('You can browse translations', 'elggtranslate') ?>
		<ul>
			<li><a href="<?php echo gp_url_project(); ?>"><?php _e('by project', 'elggtranslate') ?></a></li>
			<li><a href="<?php echo gp_url_by_translation(); ?>"><?php _e('by language or translation sets', 'elggtranslate') ?></a></li>
            <?php if ( GP::$user->logged_in() ) { ?>
            <li><a href="<?php echo gp_url_users(); ?>"><?php _e('by translator', 'elggtranslate') ?></a></li>
            <?php } ?>
		</ul>
	</p>
    <?php if ( GP::$user->logged_in() ) { ?>
    <p>
        As a logged in user, you can suggest or modify existing translation entries from any of the above links.<br>
        You can also <a href="<?php echo gp_url_user_profile(); ?>">edit your profile</a> or view and work
        on the <a href="<?php echo gp_url_user_translations(); ?>">translation entries contributed by yourself</a>.
    </p>
    <?php } else { ?>
    <p>
        If instead you want to actively help translating <a href="http://www.elgg.org">Elgg</a> into your language,
        please <a href="<?php echo gp_url_login(); ?>">log in</a> to <?php echo gp_app_name(); ?>
        or <a href="<?php echo gp_url_register(); ?>">register</a> if you don't have an account yet.
    </p>
    <?php } ?>
	<h3>Notice</h3>
	<p>
		This website is powered by <a href="http://www.reglot.org" title="Social Translating">Re&sdot;Glot</a> for the Elgg community, but is not directly affiliated to Elgg.<br>
		The Elgg functionality and tools are provided by the <a href="https://github.com/ReGlot/elggtranslate">Elgg Translate plugin</a>, part of the Re&sdot;Glot project.
	</p>
<?php
gp_tmpl_footer();
