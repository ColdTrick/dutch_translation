<?php

if (elgg_is_active_plugin("notifications")) {
	$language = array (
	  'notifications:subscriptions:friends:title' => 'Vrienden',
	  'notifications:subscriptions:friends:description' => 'Hier vind je een automatische verzameling van je vrienden. Wil je updates krijgen? Dat kun je hieronder aangeven. Dit zal invloed hebben op de betreffende gebruikers in het hoofdoverzicht van notificatie-instellingen, aan de onderkant van deze pagina.',
	  'friends:all' => 'Alle vrienden',
	  'notifications:subscriptions:personal:description' => 'Ontvang een notificatie als er acties worden ondernomen op jouw content, bijvoorbeeld als er een reactie gegeven wordt.',
	  'notifications:subscriptions:personal:title' => 'Persoonlijke notificatie',
	  'notifications:subscriptions:collections:edit' => 'Wil je jouw vriendenverzamelingen aanpassen? Klik dan hier.',
	  'notifications:subscriptions:changesettings' => 'Notificaties',
	  'notifications:subscriptions:changesettings:groups' => 'Groepsnotificaties',
	  'notification:method:email' => 'E-mail',
	  'notifications:subscriptions:title' => 'Notificatie per gebruiker',
	  'notifications:subscriptions:description' => 'Wil je een notificatie ontvangen wanneer je vrienden nieuwe content plaatsen? Selecteer dan de wijze die je daarvoor wilt gebruiken.',
	  'notifications:subscriptions:groups:description' => 'il je een notificatie ontvangen wanneer er nieuwe content is in een groep waarvan je lid bent? Zoek de groep hieronder op en selecteer de wijze die je wilt gebruiken.',
	  'notifications:subscriptions:success' => 'Je notificatie-instellingen zijn opgeslagen.',
	);
	add_translation("nl", $language);
}
