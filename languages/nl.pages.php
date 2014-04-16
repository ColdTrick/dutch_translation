<?php

if (!elgg_is_active_plugin("pages")) {
	return;
}

$language = array (
  'pages:current_revision' => 'Huidige revisie',
  'pages:revert' => 'Terugzetten',
  'pages:notify:summary' => 'Nieuwe pagina genaamd %s',
  'pages:notify:subject' => 'Een nieuwe pagina: %s',
  'pages:notify:body' => '%s heeft een nieuwe pagina toegevoegd: %s

%s

Bekijk en reager op de pagina:
%s',
  'pages:revision:delete:success' => 'De revisie is verwijderd.',
  'pages:revision:delete:failure' => 'De revisie kon niet worden verwijderd.',
  'pages:revision:not_found' => 'Kan deze revisie niet vinden.',
  'pages:parent_guid' => 'Hoofdpagina',
  'pages:new' => 'Een nieuwe pagina',
  'pages:owner' => 'Pagina\'s van %s',
  'pages:friends' => 'Pagina\'s van vrienden',
  'pages:add' => 'Voeg pagina toe',
  'pages:group' => 'Groepspagina\'s',
  'groups:enablepages' => 'Schakel groepspagina\'s in',
  'pages:revision' => 'Revisie',
  'pages:none' => 'Nog geen pagina\'s aangemaakt',
  'river:create:object:page' => '%s maakte de pagina %s',
  'river:create:object:page_top' => '%s maakte de pagina %s',
  'river:update:object:page' => '%s bewerkte de pagina %s',
  'river:update:object:page_top' => '%s bewerkte de pagina %s',
  'river:comment:object:page' => '%s reageerde op de pagina %s',
  'river:comment:object:page_top' => '%s reageerde op de pagina %s',
  'pages:error:no_title' => 'Je moet een titel opgeven voor deze pagina.',
  'pages:revision:subtitle' => 'Revisie aangemaakt %s door %s',
  'pages' => 'Pagina\'s',
  'pages:all' => 'Alle pagina\'s',
  'pages:edit' => 'Bewerk deze pagina',
  'pages:delete' => 'Verwijder deze pagina',
  'pages:history' => 'Paginageschiedenis',
  'pages:view' => 'Bekijk pagina',
  'pages:navigation' => 'Paginanavigatie',
  'item:object:page_top' => 'Hoofdpagina\'s',
  'item:object:page' => 'Pagina\'s',
  'pages:nogroup' => 'Deze groep heeft nog geen pagina\'s',
  'pages:more' => 'Meer pagina\'s',
  'pages:title' => 'Paginatitel',
  'pages:description' => 'Jouw tekst',
  'pages:tags' => 'Tags',
  'pages:access_id' => 'Toegang',
  'pages:write_access_id' => 'Schrijftoegang',
  'pages:noaccess' => 'Geen toegang tot de pagina',
  'pages:cantedit' => 'Je kunt deze pagina niet bewerken',
  'pages:saved' => 'Pagina opgeslagen',
  'pages:notsaved' => 'Pagina kon niet worden opgeslagen',
  'pages:delete:success' => 'Je pagina is succesvol verwijderd.',
  'pages:delete:failure' => 'De pagina kon niet worden verwijderd.',
  'pages:strapline' => 'Laatst bijgewerkt %s door %s',
  'pages:num' => 'Aantal pagina\'s om weer te geven',
  'pages:widget:description' => 'Dit is een lijst met jouw pagina\'s.',
  'pages:label:view' => 'Bekijk pagina',
  'pages:label:edit' => 'Bewerk pagina',
  'pages:label:history' => 'Pagina geschiedenis',
  'pages:sidebar:this' => 'Deze pagina',
  'pages:sidebar:children' => 'Subpagina\'s',
  'pages:sidebar:parent' => 'Hoofdpagina',
  'pages:newchild' => 'Maak een subpagina',
  'pages:backtoparent' => 'Terug naar \'%s\'',
);
add_translation("nl", $language);
