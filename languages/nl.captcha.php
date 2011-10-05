<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2010
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('captcha')){
	$language = array (
	  'captcha:entercaptcha' => 'Geef de tekst van het plaatje op',
	  'captcha:captchafail' => 'Sorry, de opgegeven tekst komt niet overeen met de tekst in het plaatje.',
	);
	add_translation("nl", $language);
}
?>