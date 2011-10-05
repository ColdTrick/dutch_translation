<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('status')){
	$dutch = array(

		/**
		* Menu items and titles
		*/

		'status' => "Status",
		'status:user' => "%s's status",
		'status:current'=> "Huidige status",
		'status:desc'=> "Deze status widget laat je laatste status zien.",
		'status:posttitle' => "%s's status: %s",
		'status:everyone' => "Alle site status",
		'status:strapline' => "%s",
		'status:addstatus' => "Stel je status in",
		'status:messages' => "Status bericht",
		'status:text' => "Status:",
		'status:set' => "aangemaakt ",
		'status:clear' => "Leeg status",
		'status:delete' => "Verwijder status",
		'status:nostatus' => "Nog geen status ingesteld.",
		'status:viewhistory' => "Bekijk geschiendenis",

		'item:object:status' => 'Status berichten',


		/**
		* Status river
		**/

		//generic terms to use
		'status:river:created' => "%s heeft zijn/haar",

		//these get inserted into the river links to take the user to the entity
		'status:river:create' => "status bijgewerkt.",



		/**
		* Status messages
		*/

		'status:posted' => "Je nieuwe status is succesvol opgeslagen.",
		'status:deleted' => "Je status is succesvol verwijderd.",

		/**
		* Error messages
		*/

		'status:blank' => "Sorry, je moet wel iets schrijven in je status voordat we het kunnen opslaan.",
		'status:notfound' => "Sorry, we konden het opgegeven status bericht niet vinden.",
		'status:notdeleted' => "Sorry, we konden dit status bericht niet verwijderen.",
		'status:notsaved' => "Er is een fout opgetreden tijdens het opslaan van je status bericht. Probeer het nogmaals.",
		'status:problem' => "Er is een fout opgetreden tijdens het bewerken van je status bericht.",

	);
	
	add_translation("nl", $dutch);
}
?>