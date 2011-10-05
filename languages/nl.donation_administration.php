<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('donation_administration')){
	$dutch = array(

		/**
		* Menu items and titles
		*/
		'item:object:donation' => 'Donaties',

		'donation_administration' => 'Donatie Administratie',
		'donation_administration:title' => 'Donatie Administratie',
		'donation_administration:input:username' => 'Geef gebruikersnaam:',
		'donation_administration:input:startdate' => 'Geef startdatum:',
		'donation_administration:input:enddate' => 'Geef einddatum:',
		'donation_administration:input:amount' => 'Geef donatie bedrag:',
		'donation_administration:input:showform' => 'Nieuwe donatie',

		'donation_administration:input:save:usernamefail' => 'Gebruikersnaam bestaat niet',
		'donation_administration:input:save:amountfail' => 'Donatie bedrag moet een nummer zijn',
		'donation_administration:input:save:succes' => 'Donatie succesvol opgeslagen',
		'donation_administration:input:save:fail' => 'Fout tijdens opslaan van donatie',

		'donation_administration:delete:succes' => 'Donatie succesvol verwijderd',
		'donation_administration:delete:fail' => 'Donatie kon niet worden verwijderd',

		'donation_administration:usersettings:title' => 'Donatie Informatie',
		'donation_administration:usersettings:donator' => 'Dank voor je donatie.',
		'donation_administration:usersettings:nodonator' => 'Ondersteun onze site en doneer nu!',
		'donation_administration:usersettings:validuntil' => 'Je premium account is actief tot:',
		'donation_administration:usersettings:renewdonation' => 'Als je de premium periode wil verlengen doneer dan opnieuw!',

		'donation_administration:button' => 'https://www.paypal.com/en_US/i/btn/x-click-but04.gif',	

	);
	
	add_translation("nl", $dutch);
}
?>