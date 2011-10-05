<?php
	/**
	 * Elgg reported content plugin language pack
	 * 
	 * @package ElggReportedContent
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
if(is_plugin_enabled('reportedcontent')){
	$dutch = array(

		/**
		* Menu items and titles
		*/

		'item:object:reported_content' => 'Gemelde items',
		'reportedcontent' => 'Gemelde inhoud',
		'reportedcontent:this' => 'Meld dit',
		'reportedcontent:none' => 'Er is geen gemelde inhoud',
		'reportedcontent:report' => 'Meld aan beheerder',
		'reportedcontent:title' => 'Pagina titel',
		'reportedcontent:deleted' => 'De gemelde inhoud is verwijderd',
		'reportedcontent:notdeleted' => 'We konden de gemelde inhoud niet verwijderen',
		'reportedcontent:delete' => 'Verwijderen',
		'reportedcontent:areyousure' => 'Weet je zeker dat je dit wilt verwijderen?',
		'reportedcontent:archive' => 'Archiveren',
		'reportedcontent:archived' => 'De melding is gearchiveerd',
		'reportedcontent:visit' => 'Bekijk gemelde inhoud',
		'reportedcontent:by' => 'Gemeld door',
		'reportedcontent:objecttitle' => 'Object titel',
		'reportedcontent:objecturl' => 'Object url',
		'reportedcontent:reason' => 'Reden van melding',
		'reportedcontent:description' => 'Waarom meld je dit?',
		'reportedcontent:address' => 'Locatie van het item',
		'reportedcontent:success' => 'Je melding is verstuurd naar de Site Administrator',
		'reportedcontent:failing' => 'Je melding kon niet worden verzonden',
		'reportedcontent:moreinfo' => 'Meer informatie',
	
		'reportedcontent:failed' => 'Sorry, de poging om deze inhoud te melden is mislukt.',
		'reportedcontent:notarchived' => 'Het was niet mogelijk om deze melding te archiveren',
	);
	
	add_translation("nl", $dutch);
}
?>