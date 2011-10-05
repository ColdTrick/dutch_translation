<?php
	/**
	* Dutch translation.
	* 
	* @package dutch_translation
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	*/
?>
<p>
	<?php echo elgg_echo('dutch_translation:showadminpages'); ?>
	
	<select name="params[showadminpages]">
		<option value="yes" <?php if ($vars['entity']->showadminpages == 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:yes'); ?></option>
		<option value="no" <?php if ($vars['entity']->showadminpages != 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:no'); ?></option>
	</select>
	
</p>
