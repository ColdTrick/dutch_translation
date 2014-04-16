<?php

if (elgg_is_active_plugin("thewire")) {
	$language = array (
	  'thewire:by' => 'Wire-bericht van %s',
	  'thewire:replying' => 'Antwoord op %s (@%s) die schreef',
	  'thewire:thread' => 'Gesprek',
	  'thewire:tags' => 'Wire-berichten met de tag \'%s\'',
	  'thewire:noposts' => 'Nog geen Wire-berichten',
	  'thewire:update' => 'Bijwerken',
	  'thewire:previous' => 'Vorige',
	  'thewire:hide' => 'Verberg',
	  'thewire:previous:help' => 'Bekijk vorige bericht',
	  'thewire:hide:help' => 'Verberg vorige bericht',
	  'river:create:object:thewire' => '%s plaatste op de %s',
	  'thewire:wire' => 'Wire',
	  'thewire:widget:desc' => 'Toon je laatste wire berichten',
	  'thewire:notify:subject' => 'Nieuw Wire-bericht',
	  'thewire:notify:reply' => '%s reageerde op %s op de Wire:',
	  'thewire:notify:post' => '%s plaatste op de Wire:',
	  'thewire:moreposts' => 'Meer Wire-berichten',
	  'thewire' => 'The Wire',
	  'thewire:user' => 'Wire van %s',
	  'thewire:everyone' => 'Alle Wire-berichten',
	  'thewire:reply' => 'Antwoord',
	  'thewire:charleft' => 'karakters resterend',
	  'item:object:thewire' => 'Wire-berichten',
	  'thewire:friends' => 'Je vrienden op de Wire',
	  'thewire:num' => 'Aantal items om weer te geven',
	  'thewire:posted' => 'Je bericht is succesvol geplaatst op The Wire.',
	  'thewire:deleted' => 'Je notitie is succesvol verwijderd.',
	  'thewire:blank' => 'Sorry; je moet iets typen voordat je notitie kan worden opgeslagen.',
	  'thewire:notfound' => 'Sorry; we konden de opgegeven notitie niet vinden.',
	  'thewire:notdeleted' => 'Sorry; we konden deze melding niet verwijderen.',
	);
	add_translation("nl", $language);
}
