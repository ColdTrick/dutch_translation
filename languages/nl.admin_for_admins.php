<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('admin_for_admins')){
	$dutch = array(
	
	/**
	 * Menu items and titles
	 */
	
	'admin4admins' => 'Admin 4 Admins',
	'admin4admins:title' => 'Admin 4 Admins',
	
	// Intro
	'admin4admins:intro:description' => 'Deze plug-in maakt het mogelijk om Site Administrators toe te voegen en te <b>verwijderen</b>. Om een Site Administrator te verwijderen klik op het icoontje voor de gebruiker in de Lijst van Site Administrators. De initi&euml;le Administrator kan niet worden verwijderd, tevens kun je jezelf niet verwijderen.',
	
	// AddForm
	'admin4admins:addForm' => 'Voeg Site Administrator toe',
	'admin4admins:addForm:intro' => 'Om een Administrator aan de site toe te voegen, geef een bestaande gebruikersnaam op.',
	
	// Add
	'admin4admins:add:success' => 'is succesvol gepromoveerd tot Site Administrator',
	'admin4admins:add:error:unknown' => 'kon niet worden toegevoegd aan de Site Administrators',
	'admin4admins:add:error:already' => 'is reeds een Site Administrator',
	'admin4admins:add:error:invalidusername' => 'Onjuiste gebruikersnaam opgegeven',
	'admin4admins:add:error:nousername' => 'Geen gebruikersnaam opgegeven',
	
	// Delete
	'admin4admins:delete:success' => 'is vanaf nu geen Site Administrator meer',
	'admin4admins:delete:error:remove' => 'Kon niet worden verwijderd uit de Site Administrators',
	'admin4admins:delete:error:input' => 'Onjuiste invoer gegeven',
	
	// List
	'admin4admins:list' => 'Lijst van Site Administrators',
	'admin4admins:list:timeformat' => 'j F Y G:i',
	'admin4admins:list:initialadmin' => 'De initi&euml;le Site Administrator is',
	'admin4admins:list:delete:alt' => 'Verwijder',
	'admin4admins:list:nologin' => 'nog niet aangemeld',
	'admin4admins:list:admin' => 'Administrator',
	'admin4admins:list:lastlogon' => 'Laatst aangemeld',
	'admin4admins:list:since' => 'Admin sinds',
	'admin4admins:list:by' => 'Gepromoveerd door',
	
	// User settings
	'admin4admins:usersetting:show' => 'Laat is Tools menu zien?',
	
	);
	
	add_translation("nl", $dutch);
}
?>