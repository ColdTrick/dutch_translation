<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('twitter')){
	$dutch = array(
		/**
		* twitter widget details
		*/

		'twitter:username' => 'Geef je Twitter gebruikersnaam op.',
		'twitter:num' => 'Aantal Tweets om te tonen.',
		'twitter:visit' => 'bekijk mijn Twitter',
		'twitter:notset' => 'Deze Twitter Widget is nog niet ingesteld. Om je laatste Tweets te laten zien klik op "Edit" en vul je gegevens in',

		/**
		* twitter widget river
		**/

		//generic terms to use
		'twitter:river:created' => "%s heeft de Twitter Widget toegevoegd.",
		'twitter:river:updated' => "%s heeft de Twitter Widget bijgewerkt.",
		'twitter:river:delete' => "%s heeft de Twitter Widget verwijderd.",

		);

	add_translation("nl", $dutch);
}
?>