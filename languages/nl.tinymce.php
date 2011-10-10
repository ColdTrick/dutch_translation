<?php
if(elgg_is_active_plugin("tinymce")){
	$language = array (
	  'tinymce:remove' => 'Verwijder editor',
	  'tinymce:add' => 'Toon editor',
	  'tinymce:word_count' => 'Aantal woorden:',
	);
	add_translation("nl", $language);
}