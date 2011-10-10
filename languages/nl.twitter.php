<?php
if(elgg_is_active_plugin("twitter")){
	$language = array (
	  'twitter:title' => 'Twitter',
	  'twitter:info' => 'Toon je laatste tweets',
	  'twitter:notset' => 'Deze Twitter Widget is nog niet ingesteld. Om je laatste Tweets te laten zien klik op "Bewerk" en vul je gegevens in',
	  'twitter:username' => 'Geef je Twitter gebruikersnaam op.',
	  'twitter:num' => 'Aantal Tweets om te tonen.',
	  'twitter:visit' => 'bekijk mijn Twitter',
	);
	add_translation("nl", $language);
}