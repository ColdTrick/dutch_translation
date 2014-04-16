<?php

if (!elgg_is_active_plugin("blog")) {
	return;
}

$language = array (
  'blog:title:user_blogs' => 'Blogs van %s',
  'blog:error:cannot_auto_save' => 'Kan blog niet automatisch opslaan.',
  'blog:notify:summary' => 'Nieuw blog genaamd %s',
  'blog:notify:subject' => 'Nieuwe blog: %s',
  'blog:notify:body' => '%s publiceerde een nieuwe blog: %s

%s

Bekijk en reageer op de blog:
%s',
  'blog:archives' => 'Archieven',
  'blog:group' => 'Groep blog',
  'blog:enableblog' => 'Groep blog inschakelen',
  'blog:blogs' => 'Blogs',
  'blog:revisions' => 'Revisies',
  'blog:blog' => 'Blog',
  'blog:title:all_blogs' => 'Alle site blogs',
  'blog:title:friends' => 'Blogs van vrienden',
  'blog:write' => 'Schrijf een blog',
  'blog:add' => 'Voeg een blog toe',
  'blog:edit' => 'Bewerk blog',
  'blog:excerpt' => 'Uittreksel',
  'blog:body' => 'Bericht',
  'blog:save_status' => 'Laatst opgeslagen:',
  'blog:revision' => 'Revisie',
  'blog:auto_saved_revision' => 'Revisie automatisch opgeslagen',
  'blog:message:saved' => 'Blog opgeslagen',
  'blog:error:cannot_save' => 'Blog kon niet worden opgeslagen.',
  'blog:error:cannot_write_to_container' => 'Onvoldoende rechten om de blog op te slaan in de groep.',
  'blog:error:post_not_found' => 'Deze blog is verwijderd, ongeldig, of je hebt onvoldoende rechten om het te mogen zien.',
  'blog:messages:warning:draft' => 'Er is een niet opgeslagen concept voor deze blog!',
  'blog:edit_revision_notice' => '(Oude versie)',
  'blog:message:deleted_post' => 'Blog verwijderd.',
  'blog:error:cannot_delete_post' => 'Kan blog niet verwijderen.',
  'blog:none' => 'Geen blogs',
  'blog:error:missing:title' => 'Geef een blog titel op!',
  'blog:error:missing:description' => 'Geef een bericht op bij je blog!',
  'blog:error:cannot_edit_post' => 'Deze blog bestaat niet of je hebt onvoldoende rechten om deze te mogen bewerken.',
  'blog:error:revision_not_found' => 'Kan deze revisie niet vinden.',
  'river:create:object:blog' => '%s publiceerde een blog %s',
  'river:comment:object:blog' => '%s reageerde op de blog %s',
  'blog:noblogs' => 'Geen blogs',
  'item:object:blog' => 'Blog berichten',
  'blog:widget:description' => 'Deze widget toont je laatste blog berichten',
  'blog:moreblogs' => 'Meer blog berichten',
  'blog:numbertodisplay' => 'Aantal blog berichten om te tonen',
  'blog' => 'Blog',
);
add_translation("nl", $language);
