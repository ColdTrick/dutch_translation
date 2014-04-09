<?php

if (elgg_is_active_plugin("invitefriends")) {
	$language = array (
	  'invitefriends:registration_disabled' => 'Registratie van nieuwe gebruikers is uitgeschakeld op deze site. Je kunt geen nieuwe gebruikers uitnodigen.',
	  'invitefriends:invitations_sent' => 'Aantal verzonden uitnodigingen: %s. De volgende problemen zijn opgetreden:',
	  'invitefriends:email_error' => 'De volgende adressen zijn ongeldig: %s',
	  'invitefriends:already_members' => 'De volgende mensen zijn al lid: %s',
	  'invitefriends:noemails' => 'Geen e-mailadressen opgegeven.',
	  'invitefriends:email' => 'Je bent uitgenodigd om lid te worden van %s door %s. Ze hebben het volgende bericht toegevoegd:

%s

Om lid te worden klik je op de onderstaande link:

%s

Je bent meteen vriend van hem/haar als je je account hebt aangemaakt.',
	  'friends:invite' => 'Vrienden uitnodigen',
	  'invitefriends:introduction' => 'Vul de e-mailadressen van vrienden die je wilt uitnodigen voor dit netwerk hieronder in (één per regel):',
	  'invitefriends:message' => 'Geeft een bericht op dat in de uitnodiging komt te staan:',
	  'invitefriends:subject' => 'Uitnodiging om lid te worden van %s',
	  'invitefriends:success' => 'Je vrienden zijn uitgenodigd.',
	  'invitefriends:message:default' => 'Hallo,

Ik wil je uitnodigen om lid te worden van mijn netwerk op %s.',
	);
	add_translation("nl", $language);
}
