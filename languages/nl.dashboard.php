<?php
if(elgg_is_active_plugin("dashboard")){
	$language = array (
	  'dashboard:widget:group:title' => 'Groep activiteit',
	  'dashboard:widget:group:desc' => 'Bekijk de activiteit van een van je groepen',
	  'dashboard:widget:group:select' => 'Selecteer een groep',
	  'dashboard:widget:group:noactivity' => 'Er is geen activiteit in deze group',
	  'dashboard:widget:group:noselect' => 'Bewerk deze widget om een groep te selecteren',
	);
	add_translation("nl", $language);
}