<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('externalpages')){
	$dutch = array(

		/**
		* Menu items and titles
		*/

		'expages' => "Externe pagina's",
		'expages:frontpage' => "Voorpagina",
		'expages:about' => "Over ons",
		'expages:terms' => "Algemene Voorwaarden",
		'expages:privacy' => "Privacy",
		'expages:analytics' => "Analytics",
		'expages:contact' => "Contact",
		'expages:nopreview' => "Nog geen voorbeeld beschikbaar",
		'expages:preview' => "Voorbeeld",
		'expages:notset' => "Deze pagina is nog niet beschikbaar.",
		'expages:lefthand' => "Het linker informatie paneel",
		'expages:righthand' => "Het rechter informatie paneel",
		'expages:addcontent' => "Je kunt hier content plaatsen via de Admin Tools. Zoek naar de Externe pagina's link onder Beheer.",
		'item:object:front' => 'Voorpagina items',

		/**
		* Status messages
		*/

		'expages:posted' => "Je pagina bericht is succesvol geplaatst.",
		'expages:deleted' => "Je pagina bericht is succesvol verwijderd.",

		/**
		* Error messages
		*/

		'expages:deleteerror' => "Er was een probleem tijdens het verwijderen van de pagina",
		'expages:error' => "Er is een probleem opgetreden, probeer het nogmaals en als het probleem blijft bestaan, neem contact op met de Site administrator",

	);
	
	add_translation("nl", $dutch);
}
?>