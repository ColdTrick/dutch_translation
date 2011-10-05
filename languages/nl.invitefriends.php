<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2010
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('invitefriends')){
	$language = array (
	  'invitefriends:email_error' => 'Uitnodigingen zijn verstuurd, echter de volgende adressen zijn ongeldig: %s',
	  'friends:invite' => 'Vrienden uitnodigen',
	  'invitefriends:introduction' => 'Om vrienden uit te nodigen om lid te worden van dit netwerk, vul de e-mail adressen hieronder in (een per regel):',
	  'invitefriends:message' => 'Geeft een bericht op welke in de uitnodiging komt te staan:',
	  'invitefriends:subject' => 'Uitnodiging om lid te worden van %s',
	  'invitefriends:success' => 'Je vrienden zijn uitgenodigd.',
	  'invitefriends:failure' => 'Je vrienden konden niet worden uitgenodigd.',
	  'invitefriends:message:default' => '
Hallo,

Ik wil je uitnodigen om lid te worden van mijn netwerk op %s.',
	  'invitefriends:email' => '
Je bent uitgenodigd om lid te worden van %s door %s. Ze hebben het volgende bericht toegevoegd:

%s

Om lid te worden, klik op de onderstaande link:

	%s

Je zult ze direct als vriend hebben als je je account hebt aangemaakt.',
	);
	add_translation("nl", $language);
}
?>