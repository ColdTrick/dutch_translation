<?php
if(elgg_is_active_plugin("categories")){
	$language = array (
	  'categories' => 'Categorieën',
	  'categories:settings' => 'Stel Site categorieën in',
	  'categories:explanation' => 'Om een aantal voorgedefinieerde categorieën in te stellen, die door over hele site kunnen worden gebruik, geeft ze hieronder in. Door een komma gescheiden. Geschikte plugins zullen ze dan weer geven als een gebruiker content bewerkt of aanmaakt.',
	  'categories:save:success' => 'Site categorieën zijn succesvol opgeslagen.',
	  'categories:on_activate_reminder' => 'Site categorieën zal niet werken totdat je enkele categorieën toevoegt. <a href="%s">Voeg categorieën toe</a>.',
	  'categories:results' => 'Resultaten voor de Site categorie: %s',
	);
	add_translation("nl", $language);
}