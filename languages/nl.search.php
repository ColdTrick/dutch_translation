<?php

if (elgg_is_active_plugin("search")) {
	$language = array (
	  'search:comment_by' => 'door',
	  'search:enter_term' => 'Geef een zoekterm op:',
	  'search:no_results' => 'Geen resultaten:',
	  'search:matched' => 'Gevonden:',
	  'search:results' => 'Resultaten voor %s',
	  'search:no_query' => 'Geef een zoekopdracht op',
	  'search:search_error' => 'Fout',
	  'search:more' => '+%s meer %s',
	  'search_types:tags' => 'Tags',
	  'search_types:comments' => 'Reacties',
	  'search:comment_on' => 'Reacties op "%s"',
	  'search:unavailable_entity' => 'Niet beschikbaar',
	);
	
	add_translation("nl", $language);
}
