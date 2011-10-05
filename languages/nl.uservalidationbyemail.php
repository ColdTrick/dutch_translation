<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2010
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('uservalidationbyemail')){
	$language = array (
	  'email:validate:body' => 'Beste %s,
	
	Bevesting aub je email adres door op onderstaande link te klikken:
	
	%s',
	  'email:validate:success:body' => 'Beste %s,
	
	Gefeliciteerd, je hebt je email adres succesvol bevestigd.',
	  'email:confirm:fail' => 'Je e-mail adres kon niet worden geverifieerd...',
	  'email:validate:subject' => '%s bevestig aub je email adres!',
	  'email:validate:success:subject' => 'Email adres bevestigd %s!',
	  'uservalidationbyemail:registerok' => 'Om je account te activeren, bevestig je email adres door te klikken op de link die we je gestuurd hebben.',
	  'email:confirm:success' => 'Je hebt je e-mail adres bevestigd!',
	);
	add_translation("nl", $language);
}
?>