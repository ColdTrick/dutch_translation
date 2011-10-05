<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2010
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('messageboard')){
	$language = array (
	  'messageboard:history:title' => 'Geschiedenis',
	  'messageboard:replyon' => 'antwoord op',
	  'messageboard:board' => 'Berichten box',
	  'messageboard:messageboard' => 'berichten box',
	  'messageboard:viewall' => 'Alles bekijken',
	  'messageboard:postit' => 'Plaats',
	  'messageboard:history' => 'geschiedenis',
	  'messageboard:none' => 'Er zijn nog geen berichten geplaatst',
	  'messageboard:num_display' => 'Aantal berichten om weer te geven',
	  'messageboard:desc' => 'Dit is een berichten box die je op je profiel kunt plaatsen waar andere gebruikers op kunnen reageren.',
	  'messageboard:user' => '%s\'s berichten box',
	  'messageboard:river:annotate' => '%s heeft een nieuwe reactie op een bericht.',
	  'messageboard:river:create' => '%s heeft de berichten box toegevoegd.',
	  'messageboard:river:update' => '%s heeft de berichten box bijgewerkt.',
	  'messageboard:river:added' => '%s plaatste op',
	  'messageboard:river:messageboard' => 'berichten box',
	  'messageboard:posted' => 'Je bericht is succesvol geplaatst.',
	  'messageboard:deleted' => 'Je bericht is succesvol verwijderd.',
	  'messageboard:email:subject' => 'Er is een nieuwe reactie op een bericht!',
	  'messageboard:email:body' => '%s heeft een reactie geplaatst op een bericht. De reactie is:

%s

Om de reacties te bekijken, klik hier:

%s

Om %s\'s profiel te bekijken, klik hier:

%s

Je kunt niet antwoorden op deze email.',
	  'messageboard:blank' => 'Sorry, je moet wel tekst opgeven voordat we je bericht kunnen opslaan.',
	  'messageboard:notfound' => 'Sorry, we konden het opgegeven item niet vinden.',
	  'messageboard:notdeleted' => 'Sorry, we konden het bericht niet verwijderen.',
	  'messageboard:somethingwentwrong' => 'Er is een fout opgetreden tijdens het opslaan van je bericht, controlleer op je wel een bericht hebt geschreven.',
	  'messageboard:failure' => 'Er is een fout opgetreden tijdens het toevoegen van je bericht. Probeer het nogmaals.',
	);
	add_translation("nl", $language);
}
?>