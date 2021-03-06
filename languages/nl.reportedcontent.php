<?php

if (elgg_is_active_plugin("reportedcontent")) {
	$language = array (
	  'admin:administer_utilities:reportedcontent' => 'Gemelde inhoud',
	  'reportedcontent:this:tooltip' => 'Meld dit aan de beheerder',
	  'reportedcontent:delete' => 'Verwijder de melding',
	  'reportedcontent:archive' => 'Archiveer de melding',
	  'reportedcontent:objecttitle' => 'Pagina titel',
	  'reportedcontent:objecturl' => 'Pagina url',
	  'reportedcontent:instructions' => 'De melding zal worden verstuurd aan de beheerders van deze site ter controle.',
	  'reportedcontent:numbertodisplay' => 'Aantal meldingen om weer te geven',
	  'reportedcontent:widget:description' => 'Toon gemelde inhoud',
	  'reportedcontent:user' => 'Rapporteer gebruiker',
	  'item:object:reported_content' => 'Gemelde items',
	  'reportedcontent' => 'Gemelde inhoud',
	  'reportedcontent:this' => 'Meld dit',
	  'reportedcontent:none' => 'Er is geen gemelde inhoud',
	  'reportedcontent:report' => 'Meld aan beheerder',
	  'reportedcontent:title' => 'Pagina titel',
	  'reportedcontent:deleted' => 'De gemelde inhoud is verwijderd',
	  'reportedcontent:notdeleted' => 'We konden de gemelde inhoud niet verwijderen',
	  'reportedcontent:areyousure' => 'Weet je zeker dat je dit wilt verwijderen?',
	  'reportedcontent:archived' => 'De melding is gearchiveerd',
	  'reportedcontent:visit' => 'Bekijk gemelde inhoud',
	  'reportedcontent:by' => 'Gemeld door',
	  'reportedcontent:reason' => 'Reden van melding',
	  'reportedcontent:description' => 'Waarom meld je dit?',
	  'reportedcontent:address' => 'Locatie van het item',
	  'reportedcontent:success' => 'Je melding is verstuurd naar de Site Administrator',
	  'reportedcontent:failing' => 'Je melding kon niet worden verzonden',
	  'reportedcontent:moreinfo' => 'Meer informatie',
	  'reportedcontent:failed' => 'Sorry, de poging om deze inhoud te melden is mislukt.',
	  'reportedcontent:notarchived' => 'Het was niet mogelijk om deze melding te archiveren',
	);
	add_translation("nl", $language);
}
