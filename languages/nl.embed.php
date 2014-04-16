<?php

if (elgg_is_active_plugin("embed")) {
	$language = array (
	  'embed:embed' => 'Embed',
	  'embed:upload' => 'Upload media',
	  'embed:upload_type' => 'Upload type:',
	  'embed:no_upload_content' => 'Geen upload media!',
	  'embed:no_section_content' => 'Geen items gevonden',
	  'embed:no_sections' => 'Geen ondersteunde embed-plugins gevonden. Vraag de site beheerder om een plugin te activeren met embed-ondersteuning.',
	  'embed:instructions' => 'Klik op een bestand om het te integreren in je content.',
	  'embed:media' => 'Integreer media',
	);
	add_translation("nl", $language);
}
