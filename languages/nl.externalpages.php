<?php

if (elgg_is_active_plugin("externalpages")) {
	$language = array (
	  'admin:appearance:expages' => 'Externe pagina\'s',
	  'expages:posted' => 'Je pagina is succesvol bijgewerkt.',
	  'expages:error' => 'De pagina kon niet worden opgeslagen.',
	  'expages' => 'Externe pagina\'s',
	  'expages:about' => 'Over ons',
	  'expages:terms' => 'Algemene Voorwaarden',
	  'expages:privacy' => 'Privacy',
	  'expages:contact' => 'Contact',
	  'expages:notset' => 'Deze pagina is nog niet beschikbaar.',
	);
	add_translation("nl", $language);
}
