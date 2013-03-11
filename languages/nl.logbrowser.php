<?php

if(elgg_is_active_plugin("logbrowser")){
	$language = array (
	  'logbrowser:no_result' => 'Geen resultaten',
	  'logbrowser:ip_address' => 'IP adres',
	  'admin:administer_utilities:logbrowser' => 'Log browser',
	  'logbrowser:date' => 'Datum en tijd',
	  'logbrowser:user:name' => 'Gebruiker',
	  'logbrowser:user:guid' => 'Gebruiker GUID',
	  'logbrowser:object' => 'Object type',
	  'logbrowser:object:guid' => 'Object GUID',
	  'logbrowser:action' => 'Actie',
	  'logbrowser' => 'Log browser',
	  'logbrowser:browse' => 'Bekijk systeem logboek',
	  'logbrowser:search' => 'Verfijn resultaten',
	  'logbrowser:user' => 'Gebruikersnaam om op te zoeken',
	  'logbrowser:starttime' => 'Begin tijd (bijvoorbeeld "last monday", "1 hour ago")',
	  'logbrowser:endtime' => 'Eind tijd',
	  'logbrowser:explore' => 'Verken logboek',
	);
	add_translation("nl", $language);
}
