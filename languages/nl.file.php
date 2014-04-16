<?php

if (!elgg_is_active_plugin("file")) {
	return;
}

$language = array (
  'file:notify:summary' => 'Nieuw bestand genaamd %s',
  'file:notify:subject' => 'Nieuw bestand: %s',
  'file:notify:body' => '%s plaatste een nieuw bestand: %s

%s

Bekijk en reageer op het bestand:
%s',
  'file:list:list' => 'Toon in lijstweergave',
  'file:list:gallery' => 'Toon in galerijweergave',
  'file:friends' => 'Bestanden van vrienden',
  'file:more' => 'Meer bestanden',
  'file:list' => 'lijstweergave',
  'file:gallery' => 'galerijweergave',
  'file:list:title' => '%s\'s %s %s',
  'file:title:friends' => 'Vrienden',
  'file:add' => 'Upload een bestand',
  'file:type:' => 'Bestanden',
  'file:widget' => 'Bestandenwidget',
  'file:widget:description' => 'Laat je laatste bestanden zien',
  'file:tagcloud' => 'Tag cloud',
  'river:create:object:file' => '%s heeft het bestand %s geüpload',
  'river:comment:object:file' => '%s reageerde op het bestand %s',
  'file:downloadfailed' => 'Sorry, dit bestand is op dit moment niet beschikbaar.',
  'groups:enablefiles' => 'Activeer groepsbestanden',
  'file:replace' => 'Vervang bestandsinhoud (leeg laten om bestand niet te vervangen)',
  'file:noaccess' => 'Je hebt geen toegang om dit bestand aan te passen',
  'file:cannotload' => 'Er is een fout opgetreden tijdens het laden van het bestand',
  'file:nofile' => 'Je moet een bestand selecteren',
  'file' => 'Bestanden',
  'file:user' => 'Bestanden van %s',
  'file:all' => 'Alle bestanden',
  'file:edit' => 'Bewerk bestand',
  'file:group' => 'Groepsbestanden',
  'file:gallery_list' => 'galerij- of lijstweergave',
  'file:num_files' => 'Aantal bestanden om weer te geven',
  'file:user:gallery' => 'Bekijk galerij: %s',
  'file:upload' => 'Upload een bestand',
  'file:file' => 'Bestand',
  'file:types' => 'Geplaatste bestandstypen',
  'file:type:all' => 'Alle bestanden',
  'file:type:video' => 'Video\'s',
  'file:type:document' => 'Documenten',
  'file:type:audio' => 'Audio',
  'file:type:image' => 'Afbeeldingen',
  'file:type:general' => 'Algemeen',
  'file:user:type:video' => 'Video\'s van %s',
  'file:user:type:document' => 'Documenten van %s',
  'file:user:type:audio' => 'Geluidsbestanden van %s',
  'file:user:type:image' => 'Afbeeldingen van %s',
  'file:user:type:general' => 'Algemene bestanden van %s',
  'file:friends:type:video' => 'Video\'s van je vrienden',
  'file:friends:type:document' => 'Documenten van je vrienden',
  'file:friends:type:audio' => 'Geluidsbestanden van je vrienden',
  'file:friends:type:image' => 'Afbeeldingen van je vrienden',
  'file:friends:type:general' => 'Algemene bestanden van je vrienden',
  'file:delete:confirm' => 'Weet je zeken dat je dit bestand wilt verwijderen?',
  'file:display:number' => 'Aantal bestanden om weer te geven',
  'item:object:file' => 'Bestanden',
  'file:saved' => 'Je bestand is succesvol opgeslagen.',
  'file:deleted' => 'Je bestand is succesvol verwijderd.',
  'file:none' => 'We konden op dit moment geen bestanden vinden.',
  'file:uploadfailed' => 'Sorry, we konden het bestand niet opslaan.',
  'file:deletefailed' => 'Je bestand kon op dit moment niet worden verwijderd.',
);
add_translation("nl", $language);
