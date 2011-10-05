<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('banner_administration')){
	$dutch = array(
	
		/**
		 * Menu items and titles
		 */
	
		'banner_administration' => 'Banner Administratie',
		'banner_administration:title' => 'Banner Administratie',
		'banner_administration:input:bannercode' => 'Voer hier banner code in',
		'banner_administration:input:warning' => '* Ingevoerde tekst wordt niet opgeschoont, dus <b>pas op</b>. Dit kan een beveiligings risico zijn.',	
		'banner_administration:input:save:succes' => 'Banner code is succesvol opgeslagen.',	
		'banner_administration:input:save:fail' => 'Fout tijdens het opslaan van banner code.',	
	);
	
	add_translation("nl", $dutch);
}
?>