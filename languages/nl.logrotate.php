<?php
if(elgg_is_active_plugin("logrotate")){
	$language = array (
	  'logrotate:period' => 'Hoe vaak moet het systeem logboek worden gearchiveerd?',
	  'logrotate:delete' => 'Verwijder logboek archieven ouder dan een',
	  'logrotate:week' => 'week',
	  'logrotate:month' => 'maand',
	  'logrotate:year' => 'jaar',
	  'logrotate:logdeleted' => 'Log verwijdert',
	  'logrotate:lognotdeleted' => 'Fout tijdens het verwijderen van de log',
	  'logrotate:weekly' => 'Iedere week',
	  'logrotate:monthly' => 'Iedere maand',
	  'logrotate:yearly' => 'Ieder jaar',
	  'logrotate:logrotated' => 'Logboek gearchiveerd',
	  'logrotate:lognotrotated' => 'Fout tijdens het archiveren van het logboek',
	);
	add_translation("nl", $language);
}