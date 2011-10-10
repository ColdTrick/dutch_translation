<?php
if(elgg_is_active_plugin("notifications")){
	$language = array (
	  'notifications:subscriptions:friends:title' => 'Vrienden',
	  'notifications:subscriptions:friends:description' => 'Het volgende is een automatische verzameling van je vrienden. Om updates te ontvangen selecteer hieronder. Dit zal invloed hebben op de betreffende gebruikers in het hoofd notificatie-instellingen overzicht aan de onderkant van deze pagina.',
	  'friends:all' => 'Alle vrienden',
	  'notifications:subscriptions:personal:description' => 'Ontvang een notificatie als er acties worden ondernomen op jou content',
	  'notifications:subscriptions:personal:title' => 'Persoonlijke notificatie',
	  'notifications:subscriptions:collections:edit' => 'Om je vrienden collecties aan te passen, klik hier.',
	  'notifications:subscriptions:changesettings' => 'Notificaties',
	  'notifications:subscriptions:changesettings:groups' => 'Groeps notificaties',
	  'notification:method:email' => 'E-mail',
	  'notifications:subscriptions:title' => 'Notificatie per gebruiker',
	  'notifications:subscriptions:description' => 'Om notificaties te ontvangen wanneer je vrienden nieuwe content plaatsen, vindt ze hieronder en selecteer de meldings manier die je wilt gebruiken.',
	  'notifications:subscriptions:groups:description' => 'Om een notificatie te ontvangen wanneer er nieuwe content is in een groep waarvan je lid bent, zoek de groep hieronder op en selecteer de meldings manier die je wilt gebruiken.',
	  'notifications:subscriptions:success' => 'Je notificatie instellingen zijn opgeslagen.',
	);
	add_translation("nl", $language);
}