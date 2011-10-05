<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
if(is_plugin_enabled('advanced_statistics')){
	$dutch = array(
	
	/**
	 * Menu items and titles
	 */
	
	'advanced_statistics' => 'Geavanceerde statistieken',
	'advanced_statistics:shorttitle' => 'Adv statistieken',
	'advanced_statistics:title' => 'Geavanceerde statistieken voor Administrators',
	'advanced_statistics:href:top' => 'boven',
	
	// Headers
	'advanced_statistics:headers:basic' => 'Elgg Basis informatie',
	'advanced_statistics:headers:userstats' => 'Gebruikers statistieken',
	'advanced_statistics:headers:plugins' => 'Plugin statistieken',
	'advanced_statistics:headers:plugins:active' => 'Actieve plugins',
	'advanced_statistics:headers:plugins:disabled' => 'Uitgeschakelde plugins',
	'advanced_statistics:headers:plugins:special' => 'Uitgebreide informatie over plugins',
	
	// Intro
	'advanced_statistics:intro:description' => 'Welkom op de <b>Geavanceerde statistieken voor Administrators</b> pagina. Hier kun je meer statistieken van je Elgg site vinden.<br><br>Hieronder staat een kleine index van de pagina.',
	'advanced_statistics:intro:toggle' => 'Alle items met een grijze achtergrond kun je AAN of UIT zetten. Ook zal je muisaanwijzer veranderen als je over zo\'n item gaat.',
	// Basic
	'advanced_statistics:basic:version' => 'Versie',
	'advanced_statistics:basic:build' => 'Release',
	
	// Userstats
	'advanced_statistics:userstats:users' => 'Gebruikers',
	'advanced_statistics:userstats:newest' => 'Nieuwste leden',
	'advanced_statistics:userstats:totalusers' => 'Totaal leden',
	'advanced_statistics:userstats:active' => 'Actieve leden',
	'advanced_statistics:userstats:banned' => 'Geblokkeerde / inactieve leden',
	'advanced_statistics:userstats:onlineusers' => 'Online leden',
	'advanced_statistics:userstats:admins' => 'Administrators',
	'advanced_statistics:userstats:totaladmins' => 'Totaal administrators',
	'advanced_statistics:userstats:onlineadmins' => 'Online administrators',
	
	// Plugins
	'advanced_statistics:plugins:pluginname' => 'Plugin naam',
	'advanced_statistics:plugins:author' => 'Auteur',
	'advanced_statistics:plugins:version' => 'Versie',
	'advanced_statistics:plugins:website' => 'Website',
	'advanced_statistics:plugins:special:donations' => 'Donatie Administratie statistieken',
	'advanced_statistics:plugins:special:donations:active' => 'Actieve donateurs',
	'advanced_statistics:plugins:special:donations:totalDonators' => 'Totaal donateurs',
	'advanced_statistics:plugins:special:donations:totalDonations' => 'Totaal donaties',
	'advanced_statistics:plugins:special:donations:avgDonation' => 'Gemiddelde donatie',
	'advanced_statistics:plugins:special:donations:avgDonationsPerDonator' => 'Gemiddeld donaties / donateur',
	'advanced_statistics:plugins:special:donations:totalDonated' => 'Totaal gedoneerd',
	'advanced_statistics:plugins:special:donations:avgDonationPerDonator' => 'Gemiddelde donatie / donateur',
	'advanced_statistics:plugins:special:blog' => 'Blog statistieken',
	'advanced_statistics:plugins:special:blog:totalBlogs' => 'Totaal blogs',
	'advanced_statistics:plugins:special:blog:totalBloggers' => 'Totaal bloggers',
	'advanced_statistics:plugins:special:blog:avgBlogsPerBlogger' => 'Gemiddeld blogs / blogger',
	'advanced_statistics:plugins:special:blog:avgBlogsPerUser' => 'Gemiddeld blogs / user',
	'advanced_statistics:plugins:special:blog:topBloggers' => 'Top bloggers',
	
	// User settings
	'advanced_statistics:usersetting:show' => 'Laat in Tools menu zien?',
	
	);
	
	add_translation("nl", $dutch);
}
?>