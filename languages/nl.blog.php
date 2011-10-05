<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2010
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('blog')){
	$language = array (
	  'blog:enableblog' => 'Groeps blog inschakelen',
	  'blog:group' => 'Groeps blog',
	  'blog' => 'Blog',
	  'blogs' => 'Blogs',
	  'blog:user' => '%s\'s blog',
	  'blog:user:friends' => '%s\'s vrienden blog',
	  'blog:your' => 'Jouw blog',
	  'blog:posttitle' => '%s\'s blog: %s',
	  'blog:friends' => 'Vrienden blogs',
	  'blog:yourfriends' => 'Je vrienden laatste blogs',
	  'blog:everyone' => 'Alle site blogs',
	  'blog:newpost' => 'Nieuw blog bericht',
	  'blog:via' => 'via blog',
	  'blog:read' => 'Lees blog',
	  'blog:addpost' => 'Nieuw blogbericht',
	  'blog:editpost' => 'Bewerk blogbericht',
	  'blog:text' => 'Blog tekst',
	  'blog:strapline' => '%s',
	  'item:object:blog' => 'Blogberichten',
	  'blog:never' => 'nooit',
	  'blog:preview' => 'Voorbeeld',
	  'blog:draft:save' => 'Bewaar concept',
	  'blog:draft:saved' => 'Concept laatst opgeslagen',
	  'blog:comments:allow' => 'Sta reacties toe',
	  'blog:preview:description' => 'Dit is een onbewaard voorbeeld van je blog bericht.',
	  'blog:preview:description:link' => 'Om verder te gaan met bewerken of om je bericht op te slaan, klik hier.',
	  'blog:river:created' => '%s schreef',
	  'blog:river:updated' => '%s bewerkte',
	  'blog:river:posted' => '%s plaatste',
	  'blog:river:create' => 'een nieuwe blogbericht.',
	  'blog:river:update' => 'een blogbericht.',
	  'blog:river:annotate' => 'een reactie op een blogbericht.',
	  'blog:posted' => 'Je blogbericht is succesvol geplaatst.',
	  'blog:deleted' => 'Je blogbericht is succesvol verwijderd.',
	  'blog:error' => 'Er is een fout opgetreden, probeer het nogmaals.',
	  'blog:save:failure' => 'Je blogbericht kon niet worden opgeslagen. Probeer het nogmaals.',
	  'blog:blank' => 'Sorry, je moet zowel een titel als een tekst invullen voordat je een bericht kunt opslaan.',
	  'blog:notfound' => 'Sorry, konden het opgegeven blogbericht niet vinden.',
	  'blog:notdeleted' => 'Sorry, we konden het blogbericht niet verwijderen.',
	);
	add_translation("nl", $language);
}
?>