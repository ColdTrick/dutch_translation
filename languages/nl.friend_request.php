<?php
	/**
	 * Friend request plugin
	 * Dutch translation
	 * 
	 * Original design by Bosssumon and Zac Hopkinson
	 * 
	 * @package friend_request
	 * @author ColdTrick IT Solutions
	 * @copyright Coldtrick IT Solutions 2009
	 * @link http://www.coldtrick.com/
	 * @version 2.0
	 */

if(is_plugin_enabled("friend_request")){
	$dutch = array(
		'friend_request' => "Vriend verzoek",
		'friend_request:menu' => "Vriend verzoeken",
		'friend_request:title' => "Vriend verzoeken",
	
		'friend_request:new' => "Nieuwe vriend verzoeken",
		
		'friend_request:newfriend:subject' => "%s wil je vriend worden!",
		'friend_request:newfriend:body' => "%s wil je vriend worden! Er wordt echter gewacht op jouw goedkeuring, dus meld je nu aan om het verzoek goed te keuren!

Je kunt je openstaande verzoeken bekijken op (controleer of je wel bent aangemeld voor je op de link klikt, anders wordt je doorverwezen naar de aanmeld pagina):

%s

(Je kunt niet antwoorden op deze e-mail)",
		
		// Actions
		// Add request
		'friend_request:add:failure' => "Sorry, wegens een fout op het systeem konden we je verzoek niet verwerken, probeer het nogmaals.",
		'friend_request:add:successful' => "Je hebt verzocht vriend te worden met %s. Hij/zij moet dit verzoek goedkeuren voor hij/zij in je vriendenlijst wordt opgenomen.",
		'friend_request:add:exists' => "Je hebt reeds verzocht om vriend te worden van %s.",
		
		// Approve request
		'friend_request:approve' => "Goedkeuren",
		'friend_request:approve:successful' => "%s is nu een vriend",
		'friend_request:approve:fail' => "Fout tijdens het maken van de vriend relatie met %s",
	
		// Decline request
		'friend_request:decline' => "Afwijzen",
		'friend_request:decline:subject' => "%s heeft je vriend verzoek afgewezen",
		'friend_request:decline:message' => "Beste %s,

%s heeft je verzoek om vriend te worden afgewezen.",
		'friend_request:decline:success' => "Vriend verzoek succesvol afgewezen",
		'friend_request:decline:fail' => "Fout tijdens het afwijzen van het vriend verzoek, probeer het nogmaals",
		
		// Revoke request
		'friend_request:revoke' => "Terugtrekken",
		'friend_request:revoke:success' => "Vriend verzoek succesvol terug getrokken",
		'friend_request:revoke:fail' => "Fout tijdens het terugtrekken van het vriend verzoek, probeer het nogmaals",
	
		// Views
		// Received
		'friend_request:received:title' => "Ontvangen vriend verzoeken",
		'friend_request:received:none' => "Geen ontvangen verzoeken gevonden die wachten op goedkeuring",
	
		// Sent
		'friend_request:sent:title' => "Verzonden vriend verzoeken",
		'friend_request:sent:none' => "Geen verzonden verzoeken gevonden die wachten op goedkeuring",
	);
					
	add_translation("nl", $dutch);
}
?>