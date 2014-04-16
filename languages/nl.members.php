<?php

if (!elgg_is_active_plugin("members")) {
	return;
}

$language = array (
  'members:search' => 'Zoek leden',
  'members:title:search' => 'Leden zoekresultaat voor %s',
  'members:total' => 'Totaal aantal leden: %s',
  'members:title:newest' => 'Nieuwste leden',
  'members:title:popular' => 'Meest populaire leden',
  'members:title:online' => 'Online leden',
  'members:list:popular:none' => 'Er zijn geen leden die vrienden hebben.',
  'members:label:online' => 'Online',
);
add_translation("nl", $language);
