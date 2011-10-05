<?php
	/**
	 * Omni Inviter -- Offers multiple, extendable ways of inviting new users
	 * 
	 * @package Omni Inviter
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Brett Profitt <brett.profitt@gmail.com>
	 * @version 1.0b3
	 */
	/*
	 * Dutch Translation 
	 * 
	 * @package dutch_translation
	 * @author ColdTrick IT Solutions
	 * @copyright ColdTrick 2009
	 * @link http://www.coldtrick.com
	 */

if(is_plugin_enabled("omni_inviter")){

	$blurb = "Configureer het te versturen bericht, hoevaak en hoeveel berichten tegelijk,
	welke methoden ingeschakeld moeten worden en de eventuele instellingen hiervoor.<br /><br />
	
	In het onderwerp, bericht en e-mail velden worden de volgende variabelen
	automatisch ingevult als het bericht wordt verstuurd:<br />
	<ul>
		<li>%USER_NAME% -- De gebruikersnaam van de persoon die uitnodigd.</li>
		<li>%USER_FULLNAME% -- De naam van de persoon die uitnodigd.</li>
		<li>%USER_EMAIL% -- Het e-mail adres van de persoon die uitnodigd.</li>
		<li>%USER_MESSAGE% -- Een bericht van de persoon die uitnodigd.</li>
		
		<li>%INVITED_NAME% -- De naam van de uitgenodigde persoon.</li>
		<li>%INVITED_EMAIL% -- Het e-mail adres van de uitgenodigde persoon.</li>
		
		<li>%SITE_EMAIL% -- Het e-mail adres van de site.</li>
		<li>%SITE_NAME% -- De naam van de site.</li>
		<li>%SITE_DOMAIN_SHORTENED% -- Een versie van de startpagina URL welke langs spam filters komt.</li>
		
		<li>%OI_JOIN_LINK% -- De link waarop uitgenodigde personen moeten klikken om te registreren.</li>
		<li>%OI_INVITATION_ID% -- De uitnodigings ID.</li>
		<li>%OI_INVITATION_CODE% -- De uitnodigings code.</li>
	</ul>
	
	Voor maximale compatibliteit met e-mail clients, schakkel alle HTML editors uit.
	";
	
	// the weird formatting is because we use wordwrap to wrap at 75 chars.
	// can't do that here because of the vars, but long lines annoy me.
	$body = "Beste %INVITED_NAME%,
	
%USER_FULLNAME% heeft je uitgenodigd om lid te worden van %SITE_NAME%!  Klik op " .  
"de onderstaande link om je te registeren! Nadat je je hebt " .
"geregistreerd, zullen jij en %USER_FULLNAME% automatisch gekoppeld zijn " . 
"en kun je genieten van alle voordelen van %SITE_NAME%.

Klik hieronder om te beginnen!
(Deze link is speciaal voor jou, deel deze niet met anderen!)
%OI_JOIN_LINK%

Als je onderstaande link niet kunt zien, of erop klikken werkt niet, kun je " .
"met onderstaande gegevens je registreren op de website.  Ga naar %SITE_DOMAIN_SHORTENED% " .
"en klik op de Registreer link, zoek dan naar het 'Ik heb een uitnodiging' gedeelte.

Uitnodigings ID: %OI_INVITATION_ID%
Uitnodigings code: %OI_INVITATION_CODE%

Hier is wat %USER_FULLNAME% over %SITE_NAME% te zeggen heeft:
%USER_MESSAGE%

Bedankt!
%SITE_NAME%

!!!!!!OPGELET ELGG ADMINS: PLAATS HIER JE EIGEN PRIVACY POLICY NEER!!!!!!

Privacy Policy:  Je e-mail adres is via %USER_FULLNAME% in ons systeem gekomen " . 
"%SITE_NAME% zal jou gegevens NIET aan derden beschikbaar stellen, " . 
"noch zal je informatie voor enig ander doel worden gebruikt dan het " .
"aanmaken van een account op %SITE_NAME%, indien je dit wenst.
";
	
	$default_user_message = "Graag zie ik je snel op deze site!!";
	

	$dutch = array(
		'oi:settings:rename' => 'Hernoem',
		'oi:settings:blurb' => $blurb,
		'oi:settings:installed_methods' => 'Geïnstalleerde methoden',
		
		'oi:settings:message_subject_default' => '%USER_FULLNAME% heeft je uitgenodigd voor %SITE_NAME%!',
		//'oi:settings:message_from_default' => '%SITE_NAME% <%SITE_EMAIL%>',
		'oi:settings:message_from_default' => '%SITE_EMAIL%',
		'oi:settings:message_body_default' => $body,
		'oi:settings:message_rate' => 'Verstuur maximaal %s uitnodigingen per %s',
		'oi:settings:message_subject' => 'Uitnodigings Onderwerp',
		'oi:settings:message_from' => 'Uitnodiging Van',
		'oi:settings:message_body' => 'Uitnodiging Bericht',
		
		'oi:settings:disabled' => 'Uitgeschakeld -- Alleen handmatig verzenden',
		'oi:settings:minute' => 'Minuut',
		'oi:settings:fiveminute' => 'Vijf minuten',
		'oi:settings:fifteenminute' => 'Vijftien minuten',
		'oi:settings:halfhour' => 'Dertig minuten',
		'oi:settings:hourly' => 'Uur',
		'oi:settings:daily' => 'Dag',
		'oi:settings:weekly' => 'Week',
	
		'oi:settings:enable_widget' => 'Schakel de Omni Inviter widget in?',
	
		'oi:settings:max_send_attempts' => 'Maximaal aantal pogingen voordat een uitnodiging wordt geannuleerd',
		
		/* User Settings */
		'oi:usersettings:notify_on_invite_use' => 'Stuur mij een bericht als iemand die ik uitnodig lid wordt',
	
		'oi:message:invited_join_subject' => '%s is zojuist lid geworden van %s!',
		'oi:message:invited_join_body' => '%s heeft zojuit jou uitnodiging om lid te worden van %s gebruikt! Kom eens kijken!',
	
		'oi:invite:i_want_to_invite' => 'Uitnodigingen versturen aan',
		'oi:invite:default_user_message' => $default_user_message,
		'oi:invite:user_message' => 'Persoonlijk bericht',
	
		'oi:invite:invitations_created' => '%s uitnodigingen zijn aangemaakt en zullen spoedig worden verstuurd!',
		'oi:invite:invitations_created_singular' => '%s uitnodiging is aangemaakt en zal spoedig worden verstuurd!',
	
		'oi:invite' => 'Gebruikers uitnodigen',
		'oi:invite:inviting' => 'Ik nodig %s gebruikers uit.',
		'oi:invite:inviting_singular' => 'Ik nodig %s gebruiker uit.',
		'oi:invite:send_invitations' => 'Verstuur uitnodigingen!',
		'oi:invite:send_success' => 'Uitnodigingen verstuurd!',
		'oi:invite:delete_success' => 'Uitnodiging is verwijderd.', 
	
		'oi:send' => 'Verstuur',
		'oi:name' => 'Naam',
		'oi:method' => 'Methode',
		'oi:log' => 'Log',
		'oi:add' => 'Voeg gebruiker toe',
		'oi:done' => 'Klaar met toevoegen van gebruikers',
		'oi:added_users' => 'Je gebruikers zijn toegevoegd, maar er zijn nog geen uitnodigingen verstuurd! Je kunt nog meer gebruikers zoeken of klik op Verstuur uitnodigingen om alle uitnodigingen nu te versturen.',
		
		'oi:have_invitation' => 'Ik heb een uitnodigings ID en Code.',
		'oi:invitation_id' => 'Uitnodigings ID',
		'oi:invitation_code' => 'Uitnodigings Code',
		'oi:invitation_info_accepted' => 'Uitnodigings ID en Code bevestigd! Ga aub verder met de registratie!',
	
		/* WIDGET */
		'oi:widget:name' => 'Uitgenodigde gebruikers',
		'oi:widget:description' => 'Toon de gebruikers die je hebt uitgenodigd!!',
		'oi:widget:i_invited' => 'Ik heb %s gebruikers uitgenodigd!',
		'oi:widget:i_invited_singular' => 'Ik heb %s gebruiker uitgenodigd!',
		'oi:widget:link_msg' => 'Kijk of jij er meer kunt uitnodigen!',
		'oi:widget:my_invited_users' => 'Mijn uitgenodigde gebruikers',
		'oi:widget:num_display' => 'Aantal uitgenodigde gebruikers om te tonen',
		'oi:widget:icon_size' => 'Icoon grootte van uitgenodigde gebruikers',
		'oi:widget:small' => 'Klein',
		'oi:widget:tiny' => 'Zeer klein',
		'oi:widget:disabled' => 'Uitgeschakeld',
	
	
		/* ERRORS */
		'oi:errors:unknown_method' => 'Onbekende Omni Inviter methode. Kan niet verder gaan.',
		'oi:errors:cannot_create_all_invitations' => 'Slechts %s van jou %s uitnodigingen kon worden aangemaakt. Bekijk de Uitnodigingen sectie voor meer informatie.',
		'oi:errors:used_code' => 'De door jou opgegeven Code is al gebruikt! Controlleer je uitnodigings ID en Code en probeer het nogmaals. Als je geen uitnodigings ID en Code hebt kun je je nog steeds registreren! Vul het onderstaande formulier in!',
		'oi:errors:invalid_code' => 'De door jou opgegeven ID of Code is ongeldig. Controlleer je uitnodigings ID en Code en probeer het nogmaals. Als je geen uitnodigings ID en Code hebt kun je je nog steeds registreren! Vul het onderstaande formulier in!',
		'oi:errors:method_error' => 'Er is een probleem met de geselecteerde methode. Selecteer een andere.',
		'oi:errors:unknown_user' => 'Onbekende gebruiker.',
		'oi:errors:send_fail' => 'Uitnodiging kon niet worden verstuurd. Controlleer of de details juist zijn, de methode beschikbaar is en het maximun aantal verstuurd nog niet is bereikt.',
	
		/* ADMIN */
		'oi:omni_inviter' => 'Omni Inviter',
		'oi:admin:stats' => 'Statistieken',
		'oi:admin:invitations' => 'Toon uitnodigingen',
		'oi:admin:no_invitations' => 'Geen uitnodigingen gevonden.',
	
		'oi:admin:invites:list_user' => 'Uitnodigingen verstuurd door %s',
		'oi:admin:invites:list_all' => 'Alle uitnodigingen',
	
		'oi:admin:sent_status' => 'Verzend status:',
		'oi:admin:not_sent' => 'Niet verstuurd.',
		'oi:admin:sent_error' => 'Kon niet worden verstuurd. (Pogingen: %s, laatste poging: %s)',
		'oi:admin:sent_stalled' => 'Onderbroken. (Pogingen: %s, laatste poging: %s)',
		'oi:admin:sent_status_value' => 'Laatst verstuurd op %s (Pogingen: %s, succes: %s)',
		
		'oi:admin:used_status' => 'Gebruikt status:',
		'oi:admin:not_used' => 'Niet gebruikt.',
		'oi:admin:used_status_value' => 'Gebruikt door %s op %s',
	
		'oi:admin:clicked_status' => 'Geklikt status:',
		'oi:admin:not_clicked' => 'niet geklikt.',
		'oi:admin:clicked_status_value' => 'Geklikt op %s',
	
		'oi:admin:created_by' => 'Gemaakt door',
		'oi:admin:created_by_value' => '%s op %s',
		'oi:admin:invited_name' => 'Uitgenodigde gebruiker naam',
	
		'oi:admin:log' => 'Log',
	
		/* Stats */
	
		// section headers
		'oi:stats' => 'Statistieken',
		'oi:stats:sent_invitations' => 'Verstuurde uitnodigingen',
		'oi:stats:all_invitations' => 'Alle uitnodigingen',
		'oi:stats:used_invitations' => 'Gebruikte uitnodigingen',
		'oi:stats:total' => 'Totaal',
	
	
		// types
		'oi:stats:sent' => 'Verstuurd',
		'oi:stats:unsent' => 'Niet verstuurd',
		'oi:stats:error' => 'Fout tijdens versturen',
		'oi:stats:used' => 'Gebruikt',
		'oi:stats:ignored' => 'Genegeerd',
		'oi:stats:clicked_and_ignored' => 'Geklikt',
		'oi:stats:error_sending' => 'Fout tijden versturen',
		
		// Object
		'item:object:invitation' => 'Uitnodigingen'
	);
	
	add_translation("nl", $dutch);
}
?>
