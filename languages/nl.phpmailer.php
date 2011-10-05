<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('phpmailer')){
	$dutch = array(	
		'phpmailer:smtp' => 'Gebruik SMTP',	
		'phpmailer:host' => 'SMTP Host',
		'phpmailer:smtp_auth' => 'Gebruik SMTP Authorisatie',
		'phpmailer:username' => 'Gebruikersnaam',
		'phpmailer:password' => 'Wachtwoord',
		'phpmailer:nonstd_mta' => 'Gebruik niet-standaard MTA (Regel einde = \n)',
		'phpmailer:override' => 'Overschrijf standaard Elgg mail handler',
	);
	
	add_translation("nl", $dutch);
}
?>
