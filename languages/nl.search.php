<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2010
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('search')){
	$language = array (
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
	  'search:unavailable_entity' => 'Niet beschikbare Entity',
	);
	add_translation("nl", $language);
}
?>