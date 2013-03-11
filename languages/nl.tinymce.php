<?php

if(elgg_is_active_plugin("tinymce")){
	$language = array (
	  'tinymce:lang_notice' => 'Je site taal is %s maar deze is niet geïnstalleerd voor TinyMCE. Je kunt het <a target="_blank" href="%s">hier</a> verkrijgen en dan kopiëren naar %s. Daarna, <a href="%s">leeg de caches</a>. Zie ook de TinyMCE README voor meer details.',
	  'tinymce:remove' => 'Verwijder editor',
	  'tinymce:add' => 'Toon editor',
	  'tinymce:word_count' => 'Aantal woorden:',
	);
	add_translation("nl", $language);
}
