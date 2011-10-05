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
	
	$complete = get_language_completeness('nl');
	$text = sprintf(elgg_echo("dutch_translation:intro:text"), $complete);
?>
<div class="contentWrapper">
	<h2><?php echo elgg_echo("dutch_translation:intro:header"); ?></h2>
	<?php echo $text; ?>
</div>