jQuery(function($) {
	$gp.showhide('a.revealing.plugins', 'form.filters-toolbar div.plugins', {
		show_text: 'Extra Plugins &darr;',
		hide_text: 'Extra Plugins &uarr;', 
		focus: '#sort\\[by\\]'
	});
	$gp.showhide('a.revealing.cores', 'form.filters-toolbar div.cores', {
		show_text: 'Core &amp; Bundled &darr;',
		hide_text: 'Core &amp; Bundled &uarr;', 
		focus: '#sort\\[by\\]'
	});
	$gp.showhide('a.revealing.locales', 'form.filters-toolbar div.locales', {
		show_text: 'Locales &darr;',
		hide_text: 'Locales &uarr;',
		focus: '#filters\\[term\\]'
	});
	$('#add_cores').click(function() {
		return !$('#select1_cores option:selected').remove().appendTo('#select2_cores');
	});
	$('#remove_cores').click(function() {
		return !$('#select2_cores option:selected').remove().appendTo('#select1_cores');
	});
	$('#add-all_cores').click(function() {
		return !$('#select1_cores option').remove().appendTo('#select2_cores');
	});
	$('#remove-all_cores').click(function() {
		return !$('#select2_cores option').remove().appendTo('#select1_cores');
	});
	$('#add_plugins').click(function() {
		return !$('#select1_plugins option:selected').remove().appendTo('#select2_plugins');
	});
	$('#remove_plugins').click(function() {
		return !$('#select2_plugins option:selected').remove().appendTo('#select1_plugins');
	});
	$('#add-all_plugins').click(function() {
		return !$('#select1_plugins option').remove().appendTo('#select2_plugins');
	});
	$('#remove-all_plugins').click(function() {
		return !$('#select2_plugins option').remove().appendTo('#select1_plugins');
	});
	$('#add_locales').click(function() {
		return !$('#select1_locales option:selected').remove().appendTo('#select2_locales');
	});
	$('#remove_locales').click(function() {
		return !$('#select2_locales option:selected').remove().appendTo('#select1_locales');
	});
	$('#add-all_locales').click(function() {
		return !$('#select1_locales option').remove().appendTo('#select2_locales');
	});
	$('#remove-all_locales').click(function() {
		return !$('#select2_locales option').remove().appendTo('#select1_locales');
	});
	$('form.filters-toolbar').submit(function() {
		prepare_hidden_field('cores', this);
		prepare_hidden_field('plugins', this);
		prepare_hidden_field('locales', this);
	});
});

function prepare_hidden_field(name, ctx) {
	hidden = $('input[name="export[' + name + '_selection]"]', ctx);
	hidden.val('');
	if ( $('#select2_' + name + ' option').length > 0 ) { // if no elements in select 2, nothing will be exported
		theval = $('#select2_' + name + ' option').each(function(index, option) {
			if ( hidden.val() ) {
				hidden.val(hidden.val() + "|" + option.value);
			} else {
				hidden.val(option.value);
			}
		});
	}
}
