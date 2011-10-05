<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('defaultwidgets')){
	$dutch = array (

		/**
		* Nice name for the entity (shown in admin panel)
		*/
		'item:object:moddefaultwidgets' => 'DefaultWidgets instellingen',

		/**
		* Menu items
		*/
		'defaultwidgets:menu:profile' => 'Standaard Profiel Widgets',
		'defaultwidgets:menu:dashboard' => 'Standaard dashboard Widgets',

		'defaultwidgets:admin:error' => 'Fout: Je bent niet aangemeld als een administrator',
		'defaultwidgets:admin:notfound' => 'Fout: Pagina niet gevonden',
		'defaultwidgets:admin:loginfailure' => 'Waarschuwing: Je bent niet aangemeld als een administrator',

		'defaultwidgets:update:success' => 'Je Widget instellingen zijn succesvol opgeslagen',
		'defaultwidgets:update:failed' => 'Fout: instellingen zijn niet opgeslagen',
		'defaultwidgets:update:noparams' => 'Fout: onjuiste formulier parameters',

		'defaultwidgets:profile:title' => 'Stel de standaard Widgets in voor nieuwe gebruikers op de Profiel pagina',
		'defaultwidgets:dashboard:title' => 'Stel de standaard Widgets is voor nieuwe gebruikers op de dashboard pagina',
	);

	add_translation("nl", $dutch);
}
?>