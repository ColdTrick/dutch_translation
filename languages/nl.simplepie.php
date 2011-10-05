<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('simplepie')){
	$dutch = array(	
		'simplepie:widget' => 'RSS Feed',
		'simplepie:description' => 'Voeg een externe RSS Feed to aan je Profiel',
		'simplepie:notset' => 'RSS Feed URL niet ingesteld',
		'simplepie:notfind' => 'Kan de RSS Feed niet vinden, controlleer de URL.',
		'simplepie:feed_url' => 'RSS Feed URL',
		'simplepie:num_items' => 'Aantal items',
		'simplepie:excerpt' => 'Toon inleiding',	
		'simplepie:post_date' => 'Toon datum',	
	);
	
	add_translation("nl", $dutch);
}
?>