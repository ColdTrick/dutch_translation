<?php
if(elgg_is_active_plugin("tagcloud")){
	$language = array (
	  'tagcloud:widget:title' => 'Tag cloud',
	  'tagcloud:widget:description' => 'Tag cloud',
	  'tagcloud:widget:numtags' => 'Aantal tags om weer te geven',
	);
	add_translation("nl", $language);
}