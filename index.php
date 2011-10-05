<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
	
	require_once($_SERVER["DOCUMENT_ROOT"] . "/engine/start.php");

	admin_gatekeeper();
	set_context('admin');

	// Set admin user for user block
	set_page_owner($_SESSION['guid']);

	$title = elgg_view_title(elgg_echo('dutch_translation:title'));
	$intro = elgg_view('dutch_translation/intro');
	$list = elgg_view('dutch_translation/list');

	$page_data = $title . $intro . $list;

	// Display main admin menu
	page_draw(elgg_echo('dutch_translation'), elgg_view_layout("two_column_left_sidebar", '', $page_data));

?>
