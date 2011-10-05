<?php
	/**
	 * Elgg GUID Tool
	 * 
	 * @package ElggGUIDTool
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
if(is_plugin_enabled('guidtool')){
	$dutch = array(

		/**
		* Menu items and titles
		*/

		'guidtool' => 'GUID Tool',
		'guidtool:browse' => 'Blader door GUIDs',
		'guidtool:import' => 'Importeren',
		'guidtool:import:desc' => 'Plak de data die je wilt importeren in het volgende venster, het moet in het "%s" formaat zijn.',

		'guidtool:pickformat' => 'Selecteer een formaat voor import of export.',

		'guidbrowser:export' => 'Exporteren',
	);
	
	add_translation("nl", $dutch);
}
?>