<?php
if(elgg_is_active_plugin("members")){
	$language = array (
	  'members:label:online' => 'Online',
	  'members:title:searchname' => 'Gebruikers zoeken op %s',
	  'members:title:searchtag' => 'Gebruiker met de tag %s',
	  'members:label:newest' => 'Nieuwste',
	  'members:label:popular' => 'Populair',
	  'members:searchtag' => 'Gebruikers zoeken op tag',
	  'members:searchname' => 'Gebruikers zoeken op naam',
	);
	add_translation("nl", $language);
}