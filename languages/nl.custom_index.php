<?php

if (elgg_is_active_plugin("custom_index")) {
	$language = array (
	  'custom:bookmarks' => 'Laatste favorieten',
	  'custom:groups' => 'Laatste groepen',
	  'custom:files' => 'Laatste bestanden',
	  'custom:blogs' => 'Laatste blogberichten',
	  'custom:members' => 'Nieuwste leden',
	);
	add_translation("nl", $language);
}
