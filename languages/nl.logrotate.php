<?php
	/**
	 * Elgg log rotator language pack.
	 * 
	 * @package ElggLogRotate
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
if(is_plugin_enabled('logrotate')){
	$dutch = array(
		'logrotate:period' => 'Hoevaak moet het systeem logboek worden gearchiveerd?',
	
		'logrotate:weekly' => 'Iedere week',
		'logrotate:monthly' => 'Iedere maand',
		'logrotate:yearly' => 'Ieder jaar',
	
		'logrotate:logrotated' => "Logboek gearchiveerd\n",
		'logrotate:lognotrotated' => "Fout tijdens het archiveren van het logboek\n",
	);
	
	add_translation("nl", $dutch);
}
?>