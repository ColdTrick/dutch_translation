<?php

if(elgg_is_active_plugin("twitter")){
	$language = array (
	  'twitter:invalid' => 'Deze widget is geconfigureerd met een ongeldige Twitter gebruikersnaam. Klik op de bewerk icoon om dit aan te passen.',
	  'twitter:apibug' => '*Wegens een bug in de Twitter 1.0 API, is het mogelijk dat je minder tweets ziet als ingesteld.',
	  'twitter:title' => 'Twitter',
	  'twitter:info' => 'Toon je laatste tweets',
	  'twitter:notset' => 'Deze Twitter Widget is nog niet ingesteld. Om je laatste Tweets te laten zien klik op "Bewerk" en vul je gegevens in',
	  'twitter:username' => 'Geef je Twitter gebruikersnaam op.',
	  'twitter:num' => 'Aantal Tweets om te tonen.',
	  'twitter:visit' => 'bekijk mijn Twitter',
	);
	add_translation("nl", $language);
}