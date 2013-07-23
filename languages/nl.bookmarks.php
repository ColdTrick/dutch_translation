<?php

if(elgg_is_active_plugin("bookmarks")){
	$language = array (
	  'bookmarks:notification' => '%s heeft een nieuwe snelkoppeling toegevoegd:

%s - %s
%s

Bekijk en reageer op de nieuwe snelkoppeling:
%s',
	  'bookmarks:edit' => 'Bewerk favoriet',
	  'bookmarks:owner' => '%s\'s favorieten',
	  'bookmarks:none' => 'Geen favorieten',
	  'river:create:object:bookmarks' => '%s maakte %s aan als favoriet',
	  'river:comment:object:bookmarks' => '%s reageerde op een favoriet %s',
	  'bookmarks:river:annotate' => 'een reactie op deze favoriet',
	  'bookmarks:nogroup' => 'Deze groep heeft nog geen favorieten',
	  'bookmarks:no_title' => 'Geen titel',
	  'bookmarks:save:invalid' => 'Het adres van de favoriet is ongeldig en kon niet worden opgeslagen.',
	  'bookmarks:morebookmarks' => 'Meer favorieten',
	  'bookmarks:this:group' => 'Favoriet in %s',
	  'bookmarks:bookmarklet:group' => 'Verkrijg groeps bookmarklet',
	  'bookmarks:group' => 'Groeps favorieten',
	  'bookmarks:enablebookmarks' => 'Schakel groeps favorieten in',
	  'bookmarks' => 'Favorieten',
	  'bookmarks:add' => 'Favoriet toevoegen',
	  'bookmarks:friends' => 'Favorieten van vrienden',
	  'bookmarks:everyone' => 'Alle Site favorieten',
	  'bookmarks:this' => 'Voeg favoriet toe',
	  'bookmarks:bookmarklet' => 'Browser plugin',
	  'bookmarks:inbox' => 'Favorieten inbox',
	  'bookmarks:more' => 'Meer favorieten',
	  'bookmarks:with' => 'Deel met',
	  'bookmarks:new' => 'Een nieuwe favoriet',
	  'bookmarks:address' => 'Adres van de favoriet',
	  'bookmarks:delete:confirm' => 'Weet je zeker dat je deze favoriet wilt verwijderen?',
	  'bookmarks:numbertodisplay' => 'Aantal favorieten om weer te geven',
	  'bookmarks:shared' => 'Favoriet',
	  'bookmarks:visit' => 'Ga naar de pagina',
	  'bookmarks:recent' => 'Recente favorieten',
	  'bookmarks:river:item' => 'een favoriet',
	  'item:object:bookmarks' => 'Favorieten',
	  'bookmarks:widget:description' => 'Deze widget is ontworpen voor je Dashboard en laat je de laatste favorieten in de Inbox zien.',
	  'bookmarks:bookmarklet:description' => 'De favorieten Browser plugin maakt het mogelijk om iedere willekeurige pagina te delen met je vrienden, of om gewoon voor jezelf om te onthouden. Om het te gebruiken sleep je de Browser plugin naar je Links balk van je browser: ',
	  'bookmarks:bookmarklet:descriptionie' => 'Als je Internet Explorer gebruikt moet je met de rechter muisknop op de Browser plugin klikken en dan kiezen voor \'toevoegen aan favorieten\' en dan de Links balk.',
	  'bookmarks:bookmarklet:description:conclusion' => 'Je kunt dan iedere pagina die je bezoekt markeren door op de link te klikken.',
	  'bookmarks:save:success' => 'Je favoriet is succesvol opgeslagen.',
	  'bookmarks:delete:success' => 'Je favoriet is succesvol verwijderd.',
	  'bookmarks:save:failed' => 'Je favoriet kon niet worden opgeslagen. Probeer het nogmaals.',
	  'bookmarks:delete:failed' => 'Je favoriet kon niet worden verwijderd. Probeer het nogmaals.',
	);
	add_translation("nl", $language);
}
