<?php
	/**
	 * API Admin language pack.
	 * 
	 * @package ElggAPIAdmin
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */
	 
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('apiadmin')){
	$dutch = array(
	
		/**
		 * Menu items and titles
		 */

		'apiadmin' => 'API Administratie',


		'apiadmin:keyrevoked' => 'API Key ingetrokken',
		'apiadmin:keynotrevoked' => 'API Key kon niet worden ingetrokken',
		'apiadmin:generated' => 'API Key succesvol gegenereerd',

		'apiadmin:yourref' => 'Jouw referentie',
		'apiadmin:generate' => 'Genereer een nieuw keypaar',

		'apiadmin:noreference' => 'Je moet een referentie opgeven voor je nieuwe key.',
		'apiadmin:generationfail' => 'Er was een probleem tijdens het genereren van een nieuw keypaar',
		'apiadmin:generated' => 'Nieuw API keypaar succesvol gegenereerd',

		'apiadmin:revoke' => 'Key intrekken',
		'apiadmin:public' => 'Publiek',
		'apiadmin:private' => 'Priv&eacute;',


		'item:object:api_key' => 'API Keys',
	);
	
	add_translation("nl", $dutch);
}
?>