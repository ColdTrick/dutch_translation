<?php

if (elgg_is_active_plugin("groups")) {
	$language = array (
	  'groups:owned:user' => 'Groepen van %s',
	  'groups:membershiprequests:pending' => 'Beheer lidmaatschap aanvragen (%s)',
	  'groups:invitations:pending' => 'Groepsuitnodigingen (%s)',
	  'groups:my_status' => 'Mijn status',
	  'groups:my_status:group_owner' => 'Jij bent eigenaar van deze groep',
	  'groups:my_status:group_member' => 'Je bent lid van deze groep',
	  'groups:subscribed' => 'Groepsnotificaties aan',
	  'groups:unsubscribed' => 'Groepsnotificaties uit',
	  'groups:owner:warning' => 'Opgelet: als je deze waarde aanpast ben je niet meer de eigenaar van deze groep',
	  'groups:cantcreate' => 'Je mag geen groep aanmaken. Dit is voorbehouden aan beheerders',
	  'discussion:notification:topic:subject' => 'Er is een nieuwe discussie gestart',
	  'discussion:notification:reply:body' => '%s reageerde op de discussie %s in de groep %s

%s

Bekijk en reageer op de discussie
%s',
	  'groups:whocancreate' => 'Wie mag er nieuwe groepen aanmaken?',
	  'groups:notification' => '%s heeft een nieuw discussie-onderwerp geopend op %s:

%s
%s

Bekijk en reageer op de discussie:
%s',
	  'groups:search_in_group' => 'Zoek in deze groep',
	  'groups:acl' => 'Groep: %s',
	  'discussion:none' => 'Geen discussies',
	  'discussion:reply:title' => 'Reactie door %s',
	  'groups:invite:body' => 'Beste %s,
		
%s heeft je uitgenodigd om lid te worden van de \'%s\' groep.

Klik op onderstaande link om je uitnodigingen te bekijken
%s',
	  'groups:add' => 'Maak een nieuwe groep',
	  'groups:members:title' => 'Leden van %s',
	  'groups:members:more' => 'Bekijk alle leden',
	  'groups:permissions:error' => 'Je hebt hier geen toegang toe',
	  'groups:ingroup' => 'in de groep',
	  'groups:featuredon' => '%s is nu een aangeraden groep',
	  'groups:unfeatured' => '%s is verwijderd van de aangeraden groepen',
	  'groups:featured_error' => 'Ongeldige groep.',
	  'groups:invite:title' => 'Nodig vrienden uit in deze groep',
	  'groups:nofriendsatall' => 'Je hebt geen vrienden om uit te nodigen!',
	  'groups:search:title' => 'Zoek naar groepen met de tag \'%s\'',
	  'groups:search:none' => 'Geen overeenkomende groepen gevonden',
	  'groups:activity' => 'Groepsactiviteit',
	  'groups:enableactivity' => 'Schakel groepsactiviteit in',
	  'groups:activity:none' => 'Er is nog geen groepsactiviteit',
	  'groups:more' => 'Meer groepen',
	  'groups:none' => 'Geen groepen',
	  'groups:access:group' => 'Allen voor groepsleden',
	  'groups:closedgroup:request' => 'Wil je lid worden? Klik op de menulink "lidmaatschap aanvragen".',
	  'groups:lastcomment' => 'Laatste reactie %s door %s',
	  'discussion' => 'Discussie',
	  'discussion:add' => 'Nieuwe discussie',
	  'discussion:latest' => 'Laatste discussie',
	  'discussion:group' => 'Groepsdiscussies',
	  'discussion:topic:created' => 'Het discussie-onderwerp is aangemaakt.',
	  'discussion:topic:updated' => 'Het discussie-onderwerp is bijgewerkt.',
	  'discussion:topic:deleted' => 'Het discussie-onderwerp is verwijderd.',
	  'discussion:topic:notfound' => 'Discussie-onderwerp niet gevonden',
	  'discussion:error:notsaved' => 'Fout tijdens het opslaan van dit onderwerp',
	  'discussion:error:missing' => 'Zowel titel als bericht zijn verplichte velden',
	  'discussion:error:permissions' => 'Je hebt geen rechten om deze actie uit te mogen voeren',
	  'discussion:error:notdeleted' => 'Het discussie-onderwerp kon niet worden verwijderd',
	  'discussion:reply:deleted' => 'Reactie op de discussie is verwijderd.',
	  'discussion:reply:error:notdeleted' => 'De reactie op de discussie kon niet worden verwijderd',
	  'reply:this' => 'Reageer hierop',
	  'groups:forum:created' => '%s aangemaakt met %d reacties',
	  'groups:forum:created:single' => '%s aangemaakt met %d reacties',
	  'groups:removeuser' => 'Verwijder uit groep',
	  'groups:cantremove' => 'Kan de gebruiker niet verwijderen uit de groep',
	  'groups:removed' => '%s succesvol verwijderd uit de groep',
	  'groups:updated' => 'Laatste reactie door %s %s',
	  'groups:started' => 'Gestart door %s',
	  'river:create:group:default' => '%s heeft de groep %s gemaakt',
	  'river:join:group:default' => '%s is lid geworden van de groep %s',
	  'river:create:object:groupforumtopic' => '%s begon een nieuwe discussie %s',
	  'river:reply:object:groupforumtopic' => '%s reageerde op de discussie %s',
	  'groups:allowhiddengroups' => 'Wil je privégroepen (onzichtbaar) toestaan?',
	  'group:notfound' => 'Kon de groep niet vinden',
	  'groups:ecml:discussion' => 'Groepsdiscussies',
	  'groups:ecml:groupprofile' => 'Groepsprofielen',
	  'groups:invite:remove:check' => 'Weet je zeker dat je deze uitnodiging wilt verwijderen?',
	  'groups:invitekilled' => 'De uitnodiging is verwijderd',
	  'groups:invitations' => 'Groepsuitnodigingen',
	  'groups:search:tags' => 'tag',
	  'groups:invitations:none' => 'Er zijn geen openstaande uitnodigingen op dit moment',
	  'groups:visibility' => 'Wie kan deze groep zien?',
	  'groups:notmember' => 'Sorry, je bent geen lid van deze groep',
	  'grouptopic:notfound' => 'Het onderwerp kon niet gevonden worden',
	  'grouppost:nopost' => 'Lege post',
	  'groups' => 'Groepen',
	  'groups:owned' => 'Groepen beheren',
	  'groups:yours' => 'Jouw groepen',
	  'groups:user' => '%s\'s groepen',
	  'groups:all' => 'Alle sitegroepen',
	  'groups:edit' => 'Bewerk groep',
	  'groups:delete' => 'Verwijder groep',
	  'groups:membershiprequests' => 'Beheer lidmaatschap aanvragen',
	  'groups:icon' => 'Groep icoon (laat leeg voor huidige)',
	  'groups:name' => 'Groep naam',
	  'groups:username' => 'Korte groepsnaam (voor URLs, alleen alfanumerieke tekens)',
	  'groups:description' => 'Omschrijving',
	  'groups:briefdescription' => 'Korte omschrijving',
	  'groups:interests' => 'Interesses',
	  'groups:website' => 'Website',
	  'groups:members' => 'Groepsleden',
	  'groups:membership' => 'Lidmaatschap',
	  'groups:access' => 'Toegangsrechten',
	  'groups:owner' => 'Eigenaar',
	  'groups:widget:num_display' => 'Aantal groepen om weer te geven',
	  'groups:widget:membership' => 'Groepslidmaatschap',
	  'groups:widgets:description' => 'Laat je groepslidmaatschap zien op je profiel',
	  'groups:noaccess' => 'Geen toegang tot de groep',
	  'groups:cantedit' => 'Je kunt deze groep niet bewerken',
	  'groups:saved' => 'Groep opgeslagen',
	  'groups:featured' => 'Aangeraden groepen',
	  'groups:makeunfeatured' => 'Afraden',
	  'groups:makefeatured' => 'Aanraden',
	  'groups:joinrequest' => 'Verzoek lidmaatschap',
	  'groups:join' => 'Word lid',
	  'groups:leave' => 'Verlaat groep',
	  'groups:invite' => 'Nodig vrienden uit',
	  'groups:inviteto' => 'Nodig vrienden uit voor \'%s\'',
	  'groups:nofriends' => 'Je hebt geen vrienden meer die niet al lid zijn van deze groep.',
	  'groups:viagroups' => 'via groepen',
	  'groups:group' => 'Groep',
	  'groups:notfound' => 'Groep niet gevonden',
	  'groups:notfound:details' => 'De gevraagde groep bestaat niet of je hebt hiertoe geen toegang',
	  'groups:requests:none' => 'Er zijn geen openstaande lidmaatschapsaanvragen op dit moment.',
	  'item:object:groupforumtopic' => 'Forumonderwerpen',
	  'groupforumtopic:new' => 'Nieuw forumbericht',
	  'groups:count' => 'groepen aangemaakt',
	  'groups:open' => 'open groep',
	  'groups:closed' => 'besloten groep',
	  'groups:member' => 'leden',
	  'groups:searchtag' => 'Zoek naar groepen op tag',
	  'groups:access:private' => 'Gesloten - Gebruikers moeten lidmaatschap aanvragen',
	  'groups:access:public' => 'Open - Iedere gebruiker kan lid worden',
	  'groups:closedgroup' => 'Deze groep is besloten. Wil je lid te worden? Klik op de menulink "Verzoek lidmaatschap".',
	  'groups:enableforum' => 'Activeer groepsforum',
	  'groups:yes' => 'ja',
	  'groups:no' => 'nee',
	  'groups:lastupdated' => 'Laatst bijgewerkte %s door %s',
	  'group:replies' => 'Reacties',
	  'groups:forum' => 'Groep forum',
	  'groups:addtopic' => 'Nieuw onderwerp',
	  'groups:forumlatest' => 'Forum laatste',
	  'groups:latestdiscussion' => 'Laatste discussie',
	  'groups:newest' => 'Nieuwste',
	  'groups:popular' => 'Populair',
	  'groupspost:success' => 'Je reactie is succesvol geplaatst',
	  'groups:alldiscussion' => 'Laatste discussie',
	  'groups:edittopic' => 'Bewerk onderwerp',
	  'groups:topicmessage' => 'Onderwerp bericht',
	  'groups:topicstatus' => 'Onderwerp status',
	  'groups:reply' => 'Plaats een reactie',
	  'groups:topic' => 'Onderwerp',
	  'groups:posts' => 'reacties',
	  'groups:lastperson' => 'Laaste persoon',
	  'groups:when' => 'Wanneer',
	  'grouptopic:notcreated' => 'Nog geen onderwerpen aangemaakt.',
	  'groups:topicopen' => 'Open',
	  'groups:topicclosed' => 'Gesloten',
	  'groups:topicresolved' => 'Opgelost',
	  'grouptopic:created' => 'Je onderwerp is aangemaakt.',
	  'groupstopic:deleted' => 'Onderwerp verwijderd',
	  'groups:topicsticky' => 'Sticky',
	  'groups:topicisclosed' => 'Dit onderwerp is gesloten.',
	  'groups:topiccloseddesc' => 'Dit onderwerp is nu gesloten. Er kunnen geen reacties meer geplaatst worden.',
	  'grouptopic:error' => 'Je groepsonderwerp kon niet worden aangemaakt. Probeer het nogmaals of neem contact op met de sitebeheerder.',
	  'groups:forumpost:edited' => 'Je hebt het forumbericht succesvol bewerkt.',
	  'groups:forumpost:error' => 'Er was een probleem tijdens het bewerken van het forumbericht.',
	  'groups:privategroup' => 'Deze groep is besloten. Het lidmaatschap wordt aangevraagd.',
	  'groups:notitle' => 'Groepen moeten een titel hebben',
	  'groups:cantjoin' => 'Kan niet lid worden van de groep',
	  'groups:cantleave' => 'Kon de groep niet verlaten',
	  'groups:addedtogroup' => 'Gebruiker succesvol toegevoegd aan de groep',
	  'groups:joinrequestnotmade' => 'Lidmaatschapsverzoek kon niet worden gemaakt',
	  'groups:joinrequestmade' => 'Lidmaatschapsverzoek succesvol aangemaakt',
	  'groups:joined' => 'Succesvol lid geworden van de groep!',
	  'groups:left' => 'De groep succesvol verlaten',
	  'groups:notowner' => 'Sorry, je bent niet de eigenaar van de groep.',
	  'groups:alreadymember' => 'Je bent reeds lid van deze groep!',
	  'groups:userinvited' => 'Gebruiker is uitgenodigd.',
	  'groups:usernotinvited' => 'Gebruiker kon niet worden uitgenodigd.',
	  'groups:useralreadyinvited' => 'Gebruiker is al uitgenodigd',
	  'groups:joinrequest:remove:check' => 'Weet je zeker dat je dit lidmaatschapsverzoek wilt verwijderen?',
	  'groups:invite:subject' => '%s je bent uitgenodigd om lid te worden van %s!',
	  'groups:welcome:subject' => 'Welkom bij de groep '%s'!',
	  'groups:welcome:body' => 'Beste %s!

Je bent nu lid van de groep \'%s\'! Klik hieronder om te beginnen met posten!

%s',
	  'groups:request:subject' => '%s wil lid worden van %s',
	  'groups:request:body' => 'Beste %s,

%s wil lid worden van de groep \'%s\'. Klik hieronder om zijn/haar profiel te bekijken:

%s

Of klik hieronder om het verzoek direct te accepteren:

%s',
	  'groups:nowidgets' => 'Er zijn geen widgets gedefinieerd voor deze groep.',
	  'groups:widgets:members:title' => 'Groepsleden',
	  'groups:widgets:members:description' => 'Lijst van groepsleden.',
	  'groups:widgets:members:label:displaynum' => 'Toon de groepsleden.',
	  'groups:widgets:members:label:pleaseedit' => 'Stel deze widget AUB in.',
	  'groups:widgets:entities:title' => 'Objecten in de groep',
	  'groups:widgets:entities:description' => 'Toon de objecten van deze groep',
	  'groups:widgets:entities:label:displaynum' => 'Toon de objecten van een groep.',
	  'groups:widgets:entities:label:pleaseedit' => 'Stel deze widget AUB in.',
	  'groups:forumtopic:edited' => 'Forumonderwerp succesvol bewerkt.',
	  'group:deleted' => 'Groep en groepsberichten verwijderd',
	  'group:notdeleted' => 'Groep kon niet worden verwijderd',
	  'grouppost:deleted' => 'Groepsbericht succesvol verwijderd',
	  'grouppost:notdeleted' => 'Groepsbericht kon niet worden verwijderd',
	  'groupstopic:notdeleted' => 'Onderwerp niet verwijderd',
	  'grouptopic:blank' => 'Geen onderwerp',
	  'groups:deletewarning' => 'Weet je zeker dat je deze groep wilt verwijderen? Dit kan niet ongedaan worden gemaakt!',
	  'groups:joinrequestkilled' => 'Lidmaatschapsverzoek verwijderd.',
	);
	add_translation("nl", $language);
}
