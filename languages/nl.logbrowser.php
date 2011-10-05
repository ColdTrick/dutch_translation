<?php
	/**
	 * Elgg log browser plugin language pack
	 * 
	 * @package ElggLogBrowser
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */
	 
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('logbrowser')){
	$dutch = array(

		/**
		* Menu items and titles
		*/

		'logbrowser' => 'Log browser',
		'logbrowser:browse' => 'Bekijk systeem logboek',
		'logbrowser:search' => 'Verfijn resultaten',
		'logbrowser:user' => 'Gebruikersnaam om op te zoeken',
		'logbrowser:starttime' => 'Begin tijd (bijvoorbeeld "last monday", "1 hour ago")',
		'logbrowser:endtime' => 'Eind tijd',

		'logbrowser:explore' => 'Verken logboek',

	);
	
	add_translation("nl", $dutch);
}
?>