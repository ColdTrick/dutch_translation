<?php
	/**
	 * Omni Inviter -- Offers multiple, extendable ways of inviting new users
	 * 
	 * @package Omni Inviter
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Brett Profitt <brett.profitt@gmail.com>
	 */
if(is_plugin_enabled("omni_inviter")){
	$dutch = array(
		'oi:method:friend:description' => 'Nodig vrienden uit met standaard e-mail.',
		'oi:method:friend:invite_who' => 'Vrienden op basis van hun e-mail adres.'
	);
	
	add_translation("nl", $dutch);
}
?>