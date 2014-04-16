<?php

if (!elgg_is_active_plugin("legacy_urls")) {
	return;
}

$language = array (
  'legacy_urls:message' => 'Deze pagina is verplaatst naar %s. Werk je favoriet bij of rapporteer de link die je deze melding bracht.',
  'legacy_urls:instructions' => 'Selecteer de methode voor de afhandeling van verouderde URL\'s',
  'legacy_urls:immediate' => 'Direct doorsturen naar de nieuwe locatie',
  'legacy_urls:immediate_error' => 'Direct doorsturen naar de nieuwe locatie en toon een foutmelding',
  'legacy_urls:landing' => 'Toon een pagina met een link naar de nieuwe locatie',
);
add_translation("nl", $language);
