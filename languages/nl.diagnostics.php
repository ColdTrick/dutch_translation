<?php

if (elgg_is_active_plugin("diagnostics")) {
	$language = array (
	  'admin:administer_utilities:diagnostics' => 'Systeemdiagnose',
	  'diagnostics:report' => 'Diagnoserapport',
	  'diagnostics:download' => 'Download',
	  'diagnostics:header' => '========================================================================
		Elgg Diagnostic Report
		Generated %s by %s
		========================================================================',
	  'diagnostics:report:basic' => 'Elgg Release %s, version %s
		
		------------------------------------------------------------------------',
	  'diagnostics:report:php' => 'PHP info:
		%s
		------------------------------------------------------------------------',
	  'diagnostics:report:plugins' => 'Installed plugins and details:
		
		%s
		------------------------------------------------------------------------',
	  'diagnostics:report:md5' => 'Installed files and checksums:
			
		%s
		------------------------------------------------------------------------',
	  'diagnostics:report:globals' => 'Global variables:
			
		%s
		------------------------------------------------------------------------',
	  'diagnostics' => 'Systeem diagnose',
	  'diagnostics:description' => 'Het volgende diagnostische rapport is nuttig voor de diagnose van problemen met Elgg, en moet worden bijgevoegd aan een bugreport die je indient.',
	);
	add_translation("nl", $language);
}
