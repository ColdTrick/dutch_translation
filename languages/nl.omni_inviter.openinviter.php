<?php
/**
 * Omni Inviter -- Offers multiple, extendable ways of inviting new users
 *
 * @package Omni Inviter
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Brett Profitt <brett.profitt@gmail.com>
 */
if(is_plugin_enabled("omni_inviter")){
	$blurb = "OpenInviter Technology maakt het mogelijk eenvoudig je vrienden en contacten uit andere sociale netwerken uit te nodigen! 
	Selecteer welke site u wilt gebruiken, voer je gebruikersnaam en wachtwoord voor die site in, en klik op de knop 'Krijg Contactpersonen'
	om de lijst van uw contactpersonen op te halen
	";
	
	$dutch = array(
		'oi:method:openinviter:description' => 'Nodig vrienden van andere sociale netwerksites of bekende webbased e-mail diensten uit mbv OpenInviter.',
		'oi:method:openinviter:blurb' => $blurb,
		'oi:method:openinviter:invite_who' => 'Vrienden van andere sociale netwerksites of e-mail diensten',
		'oi:method:openinviter:key' => 'OpenInviter privé sleuten uit config.php',
		'oi:method:openinviter:username' => 'OpenInviter gebruikersnaam uit config.php',
		'oi:method:openinviter:remote_debug' => 'Remote Debug (PAS OP: Als je dit inschakeld is er een mogelijk beveiligings risico!)',
		'oi:method:openinviter:transport' => 'Methode om de gegevens te ontvangen/versturen',
	
		'oi:method:openinviter:provider_select' => 'E-mail / Sociale Netwerk Site:',
		'oi:method:openinviter:account_login' => 'Gebruikersnaam:',
		'oi:method:openinviter:account_password' => 'Wachtwoord:',
		'oi:method:openinviter:get_contacts' => 'Krijg Contactpersonen',
			
		'oi:method:openinviter:invalid_login' => 'We konden je niet aanmelden voor %s met de opgegeven gebruikersnaam en wachtwoord. Controlleer of de gegevens voor %s juist zijn en probeer het nogmaals!',
		'oi:method:openinviter:contacts_error' => 'Er was een probleem tijdens het ophalen van de contacten uit %s. Probeer het later nog een keer.',
		'oi:method:openinviter:no_contacts' => 'Geen contacten gevonden bij %s!',
	
		'oi:method:openinviter:internal_error' => 'Er was een interne fout bij OpenInviter. Probeer het later nog een keer. Fout details: %s',
	
		'oi:method:openinviter:incorrectly_installed' => 'OpenInviter is niet juist geïnstalleerd. Kijk in de README voor meer informatie.',
		'oi:method:openinviter:remove_postinst' => 'Verwijder aub het bestand postinstall.php uit de OpenInviter map. Kijk in de README voor meer informatie.',
		'oi:method:openinviter:no_dom_ext' => 'De DOMDocument extension van PHP is niet geïnstalleerd. OpenInviter heeft deze nodig on correct te functioneren.',
		'oi:method:openinviter:no_transport' => 'Zowel libcurl als wget zijn niet geïnstalleerd. OpenInviter heeft één van de twee nodig om correct te functioneren.',
		'oi:method:openinviter:no_plugins_found' => 'Geen plugins voor OpenInviter gevonden.',
		
		'oi:method:openinviter:checkall' => 'Selecteer alles',
		'oi:method:openinviter:checknone' => 'Selecteer geen',
	
		// this is horrible. these are used for JS and we have no sprintf...
		'oi:method:openinviter:select_this_page' => '%justSelectedCount contacten geselecteerd op deze pagina.',
		'oi:method:openinviter:select_all_contacts' => 'Selecteer anders alle %allContactsCount contacten?',
		'oi:method:openinviter:selected_all_contacts' => 'Selecteer alle %allContactsCount contacten.',
	
		'oi:method:openinviter:unselect_this_page' => 'Deselecteer %justSelectedCount contacten op deze pagina.',
		'oi:method:openinviter:unselect_all_contacts' => 'Deselecteer anders alle %allContactsCount contacten?',
		'oi:method:openinviter:unselected_all_contacts' => 'Deselecteer alle %allContactsCount contacten.',
	);
	
	add_translation("nl", $dutch);
}
?>