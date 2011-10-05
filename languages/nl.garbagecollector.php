<?php
	/**
	 * Elgg garbage collector language pack.
	 * 
	 * @package ElggGarbageCollector
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
if(is_plugin_enabled('garbagecollector')){
	$dutch = array(
	
		/**
		* Menu items and titles
		*/

		'garbagecollector:period' => 'Hoevaak moet de Elgg garbage collector draaien?',

		'garbagecollector:weekly' => 'Eens per week',
		'garbagecollector:monthly' => 'Eens per maand',
		'garbagecollector:yearly' => 'Eens per jaar',

		'garbagecollector' => "GARBAGE COLLECTOR\n",
		'garbagecollector:done' => "KLAAR\n",
		'garbagecollector:optimize' => "Optimaliseren %s ",

		'garbagecollector:error' => "FOUT",
		'garbagecollector:ok' => "OK",

		'garbagecollector:gc:metastrings' => 'Opruimen van niet gelinkte metastrings: ',
	
	);
	
	add_translation("nl", $dutch);
}
?>