<?php

if (!elgg_is_active_plugin("ckeditor")) {
	return;
}

$language = array (
  'ckeditor:html' => 'Bewerk HTML',
  'ckeditor:visual' => 'Visuele editor',
);
add_translation("nl", $language);
