<?php
	/**
	 * Omni Inviter -- Offers multiple, extendable ways of inviting new users
	 * 
	 * @package Omni Inviter
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Brett Profitt <brett.profitt@gmail.com>
	 */
if(is_plugin_enabled("omni_inviter")){
	$blurb = "Door van deze methode gebruik te maken weten de gebruikers niet wie ze heeft uitgenodigd totdat ze zich hebben geregistreerd op de site.
	Het is een eenvoudige manier om mensen naar je site te krijgen. Controlleer of het standaard bericht 
	geen gebruikers gegevens bevat (zoals %USER_NAME% or %USER_FULLNAME%) anders is er geen verrassing!";
	
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
	
	$dutch = array(
		'oi:method:secret:description' => 'Verstuur uitnodigingen die gebruikers dwingen om te registeren om te achterhalen wie ze hebben uitgenodigd.',
		'oi:method:secret:invite_who' => 'Vrienden met e-mail adres (geheim).',
		'oi:method:secret:settings_blurb' => $blurb,
		
		'oi:method:secret:message_subject_default' => 'Iemand wil dat je lid wordt van %SITE_NAME%!',
		'oi:method:secret:message_from_default' => '%SITE_NAME% <%SITE_EMAIL%>',
		'oi:method:secret:message_body_default' => $body,
	
		// @todo these are horrible defaults.
		'oi:method:secret:post_reg_subj' => 'Je hebt je geregistreerd!!',
		'oi:method:secret:post_reg_message' => 'Ik heb je uitgenodigd! Blij dat je lid bent geworden ;)',
	);
	
	add_translation("nl", $dutch);
}
?>