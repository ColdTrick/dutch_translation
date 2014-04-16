<?php

if (!elgg_is_active_plugin("site_notifications")) {
	return;
}

$language = array (
  'site_notifications' => 'Site notificaties',
  'site_notifications:topbar' => 'Notificaties',
  'item:object:site_notification' => 'Site notificaties',
  'site_notifications:no_access' => 'Je hebt geen toegang tot deze pagina. Mogelijk moet je eerst aangemeld zijn.',
  'site_notifications:no_delete' => 'Kan niet verwijderen',
  'site_notifications:empty' => 'Geen notificaties',
  'notification:method:site' => 'Site',
);
add_translation("nl", $language);
