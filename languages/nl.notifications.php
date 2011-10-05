<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('notifications')){
	$dutch = array(

		'friends:all' => 'Alle vrienden',

		'notifications:subscriptions:personal:description' => 'Ontvang een notificatie als er acties worden ondernomen op jou content',
		'notifications:subscriptions:personal:title' => 'Persoonlijke notificatie',

		'notifications:subscriptions:collections:title' => 'Vrienden collecties',
		'notifications:subscriptions:collections:description' => 'Om notificaties van leden van je vrienden collecties aan te zetten, gebruik je onderstaande icoonen. Dit heeft effect op de weergegeven gebruiker in onderstaande venster.',
		'notifications:subscriptions:collections:edit' => 'Om je vrienden collecties aan te passen, klik hier.',

		'notifications:subscriptions:changesettings' => 'Notificaties',
		'notifications:subscriptions:changesettings:groups' => 'Groeps notificaties',
		'notification:method:email' => 'E-mail',	

		'notifications:subscriptions:title' => 'Notificatie per gebruiker',
		'notifications:subscriptions:description' => 'Om notificaties te ontvangen wanneer je vrienden nieuwe content plaatsen, vindt ze hieronder en selecteer de meldings manier die je wilt gebruiken.',

		'notifications:subscriptions:groups:description' => 'Om een notificatie te ontvangen wanneer er nieuwe content is in een groep waarvan je lid bent, zoek de groep hieronder op en selecteer de meldings manier die je wilt gebruiken.',

		'notifications:subscriptions:success' => 'Je notificatie instellingen zijn opgeslagen.',

	);

	add_translation("nl", $dutch);
}
?>