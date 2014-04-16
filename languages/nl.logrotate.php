<?php

if (!elgg_is_active_plugin("logrotate")) {
	return;
}

$language = array (
  'logrotate:never' => 'nooit',
  'logrotate:period' => 'Hoe vaak moet het systeemlogboek worden gearchiveerd?',
  'logrotate:delete' => 'Verwijder logboekarchieven ouder dan een',
  'logrotate:week' => 'week',
  'logrotate:month' => 'maand',
  'logrotate:year' => 'jaar',
  'logrotate:logdeleted' => 'Log verwijderd',
  'logrotate:lognotdeleted' => 'Fout tijdens het verwijderen van de log',
  'logrotate:logrotated' => 'Logboek gearchiveerd',
  'logrotate:lognotrotated' => 'Fout tijdens het archiveren van het logboek',
);
add_translation("nl", $language);
