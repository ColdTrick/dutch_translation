<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2010
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('categories')){
	$language = array (
	  'categories:results' => 'Resultaten voor de Site categorie: %s',
	  'categories' => 'Categorieën',
	  'categories:settings' => 'Stel Site categorieën in',
	  'categories:explanation' => 'Om een aantal voorgedefinieerde categorieën in te stellen, die door over hele site kunnen worden gebruik, geeft ze hieronder in. Door een komma gescheiden. Geschikte plugins zullen ze dan weer geven als een gebruiker content bewerkt of aanmaakt.',
	  'categories:save:success' => 'Site categorieën zijn succesvol opgeslagen.',
	);
	
	add_translation("nl", $language);
}
?>