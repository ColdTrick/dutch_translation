<?php
if(elgg_is_active_plugin("messages")){
	$language = array (
	  'messages:user' => '%s\'s postvak in',
	  'messages:add' => 'Schrijf een bericht',
	  'messages:recipient' => 'Kies een ontvanger…',
	  'messages:to_user' => 'Aan: %s',
	  'messages:success:delete:single' => 'Bericht is verwijderd',
	  'messages:success:delete' => 'Berichten verwijderd',
	  'messages:success:read' => 'Bericht gemarkeerd als gelezen',
	  'messages:error:messages_not_selected' => 'Geen berichten geselecteerd',
	  'messages:error:delete:single' => 'Fout tijdens het verwijderen van het bericht',
	  'messages:deleted_sender' => 'Verwijderde gebruiker',
	  'messages:user:blank' => 'Je hebt niemand geselecteerd om dit naar toe te sturen.',
	  'messages' => 'Berichten',
	  'messages:back' => 'terug naar berichten',
	  'messages:posttitle' => '%s\'s berichten: %s',
	  'messages:inbox' => 'Postvak In',
	  'messages:send' => 'Verstuur een bericht',
	  'messages:sent' => 'Verstuurde berichten',
	  'messages:message' => 'Bericht',
	  'messages:title' => 'Titel',
	  'messages:to' => 'Aan',
	  'messages:from' => 'Van',
	  'messages:fly' => 'Verstuur',
	  'messages:replying' => 'Bericht beantwoorden',
	  'messages:sendmessage' => 'Verstuur een bericht',
	  'messages:compose' => 'Verstuur een bericht',
	  'messages:sentmessages' => 'Verstuurde berichten',
	  'messages:recent' => 'Recente berichten',
	  'messages:original' => 'Originele bericht',
	  'messages:yours' => 'Jouw bericht',
	  'messages:answer' => 'Antwoorden',
	  'messages:toggle' => 'Selecteer alles',
	  'messages:markread' => 'Markeer als gelezen',
	  'messages:new' => 'Nieuw bericht',
	  'notification:method:site' => 'Site',
	  'messages:error' => 'Er was een probleem tijdens het opslaan van je bericht. Probeer het nogmaals.',
	  'item:object:messages' => 'Berichten',
	  'messages:posted' => 'Je bericht is succesvol verzonden.',
	  'messages:email:subject' => 'Je hebt een nieuw bericht!',
	  'messages:email:body' => 'Je hebt een nieuw bericht van %s. Het bericht is:

%s

Om jouw berichten te bekijken, klik hier:

%s

Om %s een bericht te sturen, klik hier:

%s

Je kunt niet antwoorden op deze email.',
	  'messages:blank' => 'Sorry, je moet wel tekst invullen voordat we je bericht kunnen versturen.',
	  'messages:notfound' => 'Sorry, we konden het opgegeven bericht niet vinden.',
	  'messages:notdeleted' => 'Sorryd we konden dit bericht niet verwijderen.',
	  'messages:nopermission' => 'Je hebt geen toegang om dit bericht te mogen verwijderen.',
	  'messages:nomessages' => 'Er zijn geen berichten om weer te geven.',
	  'messages:user:nonexist' => 'We konden de geadresseerde niet vinden in de gebruikers database.',
	);
	add_translation("nl", $language);
}