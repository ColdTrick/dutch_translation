<?php
if(elgg_is_active_plugin("profile")){
	$language = array (
	  'profile' => 'Profiel',
	  'profile:notfound' => 'Sorry. Het opgegeven profiel kon niet gevonden worden.',
	);
	add_translation("nl", $language);
}