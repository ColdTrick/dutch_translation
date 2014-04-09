<?php

if (elgg_is_active_plugin("messageboard")) {
	$language = array (
	  'messageboard:owner' => 'Berichtenbox van %s',
	  'messageboard:owner_history' => 'Berichten van %s in de berichtenbox van %s',
	  'river:messageboard:user:default' => '%s plaatste in berichtenbox van %s',
	  'messageboard:history:title' => 'Geschiedenis',
	  'messageboard:replyon' => 'antwoord op',
	  'messageboard:board' => 'Berichtenbox',
	  'messageboard:messageboard' => 'berichtenbox',
	  'messageboard:viewall' => 'Alles bekijken',
	  'messageboard:postit' => 'Plaats',
	  'messageboard:history' => 'geschiedenis',
	  'messageboard:none' => 'Er zijn nog geen berichten geplaatst',
	  'messageboard:num_display' => 'Aantal berichten om weer te geven',
	  'messageboard:desc' => 'Dit is een berichtenbox die je op je profiel kunt plaatsen waar andere gebruikers op kunnen reageren.',
	  'messageboard:user' => 'Berichtenbox van %s',
	  'messageboard:posted' => 'Je bericht is succesvol geplaatst.',
	  'messageboard:deleted' => 'Je bericht is succesvol verwijderd.',
	  'messageboard:email:subject' => 'Er is een nieuwe reactie op een bericht!',
	  'messageboard:email:body' => '%s heeft een reactie geplaatst op een bericht. De reactie is:

%s

Om de reacties te bekijken klik je hier:

%s

Om het profiel van %s te bekijken klik je hier:

%s

Je kunt niet antwoorden op deze email.',
	  'messageboard:blank' => 'Sorry, je moet wel tekst opgeven voordat we je bericht kunnen opslaan.',
	  'messageboard:notfound' => 'Sorry, we konden het opgegeven item niet vinden.',
	  'messageboard:notdeleted' => 'Sorry, we konden het bericht niet verwijderen.',
	  'messageboard:somethingwentwrong' => 'Er is een fout opgetreden tijdens het opslaan van je bericht. Controleer of je wel een bericht hebt geschreven.',
	  'messageboard:failure' => 'Er is een fout opgetreden tijdens het toevoegen van je bericht. Probeer het nogmaals.',
	);
	add_translation("nl", $language);
}
