<?php

if (elgg_is_active_plugin("categories")) {
	$language = array (
	  'categories' => 'Categorieën',
	  'categories:settings' => 'Stel sitecategorieën in',
	  'categories:explanation' => 'Geef hieronder een aantal voorgedefinieerde categorieën op. Deze kunnen over hele site worden gebruikt. Je kunt meerdere categorieën opgeven, door een komma gescheiden. Geschikte plugins zullen deze dan weergeven als een gebruiker content bewerkt of aanmaakt.',
	  'categories:save:success' => 'Sitecategorieën zijn succesvol opgeslagen.',
	  'categories:on_activate_reminder' => 'Sitecategorieën zal niet werken totdat je enkele categorieën toevoegt. <a href="%s">Voeg categorieën toe</a>.',
	  'categories:results' => 'Resultaten voor de sitecategorie: %s',
	);
	add_translation("nl", $language);
}
