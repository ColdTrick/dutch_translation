<?php
	$english = array(
		// Main title
		'dutch_translation' => "Dutch Translation",
		'dutch_translation:title' => "Dutch Translation",
		'dutch_translation:shorttitle' => "NL Translation",
		
		// Settings
		'dutch_translation:showadminpages' => "Show (debug) admin pages",		
		
		// views
		'dutch_translation:intro:header' => "Introduction",
		'dutch_translation:intro:text' => "The Dutch translation is %s&#37; complete",
		'dutch_translation:list:header' => "List of keys",
		'dutch_translation:list:description' => "Here you will find a list of translations keys that are eighter missing, duplicate or no longer in the (active) English translation",
		'dutch_translation:list:missing' => "Missing (%s)",
		'dutch_translation:list:nomissing' => "No missing items found!",
		'dutch_translation:list:duplicate' => "Duplicate (%s)",
		'dutch_translation:list:noduplicate' => "No duplicate entries found!",
		'dutch_translation:list:nonenglish' => "Non English (%s)",
		'dutch_translation:list:nononenglish' => "No non English found!",
		
	);
	
	add_translation("en", $english);
?>