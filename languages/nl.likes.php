<?php

if (elgg_is_active_plugin("likes")) {
	$language = array (
	  'likes:delete:confirm' => 'Weet je zeker dat je deze Like wit verwijderen?',
	  'likes:this' => 'vindt dit leuk',
	  'likes:deleted' => 'Je vindt dit niet meer leuk',
	  'likes:see' => 'Bekijk wie dit leuk vindt',
	  'likes:remove' => 'Niet meer leuk vinden',
	  'likes:notdeleted' => 'Er was een probleem tijdens het niet meer leuk vinden',
	  'likes:likes' => 'Je vindt dit item leuk',
	  'likes:failure' => 'Er was een probleem tijdens het leuk vinden van dit item',
	  'likes:alreadyliked' => 'Je vindt dit item al leuk',
	  'likes:notfound' => 'Het item dat je leuk probeert te vinden kan niet worden gevonden',
	  'likes:likethis' => 'Dit vind ik leuk',
	  'likes:userlikedthis' => '%s vindt dit leuk',
	  'likes:userslikedthis' => '%s vinden dit leuk',
	  'likes:river:annotate' => 'vindt leuk',
	  'river:likes' => 'vindt %s leuk %s',
	  'likes:notifications:subject' => '%s vindt je item "%s" leuk',
	  'likes:notifications:body' => 'Beste %1$s,
%2$s vindt je item "%3$s" op %4$s leuk!

Bekijk je originele item hier:
%5$s
Of bekijk het profiel van %2$s hier:
%6$s

Met vriendelijke groet,
%4$s',
	);
	add_translation("nl", $language);
}
