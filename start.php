<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
	global $CONFIG;
	
	/**
	 * Initialise and set up the menus.
	 */
	function dutch_translation_init(){
		global $CONFIG;
		
		if (isadminloggedin()){
			if(get_plugin_setting('showadminpages', 'dutch_translation') == 'yes'){
				add_menu(elgg_echo("dutch_translation:shorttitle"), $CONFIG->wwwroot . "pg/dutch_translation/");
			}
		}
		
		// Register a page handler, so we can have nice URLs
		register_page_handler('dutch_translation','dutch_translation_page_handler');
		
	}
	
	function dutch_translation_page_handler($page){
		global $CONFIG;
		
		// only interested in one page for now
		include($CONFIG->pluginspath . "dutch_translation/index.php"); 
	}
	
	/**
	 * Adding to the admin menu
	 */
	function dutch_translation_pagesetup(){
		if (get_context() == 'admin' && isadminloggedin()){
			if(get_plugin_setting('showadminpages', 'dutch_translation') == 'yes'){
				global $CONFIG;
				add_submenu_item(elgg_echo('dutch_translation:shorttitle'), $CONFIG->wwwroot . 'pg/dutch_translation/');
			}
		} 
	}
	
	register_elgg_event_handler('init', 'system', 'dutch_translation_init');
	register_elgg_event_handler('pagesetup', 'system', 'dutch_translation_pagesetup');
	
	register_translations($CONFIG->pluginspath . "dutch_translation/languages/", true);
?>