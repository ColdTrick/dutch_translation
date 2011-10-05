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
	
	$missing = array();
	$duplicate = array();
	$nonEnglish = array();
	
	foreach ($CONFIG->translations['en'] as $k => $v){
		if (!isset($CONFIG->translations['nl'][$k])){
			$missing[] = $k;
		} elseif($CONFIG->translations['nl'][$k] == $CONFIG->translations['en'][$k]){
			$duplicate[] = $k;
		}
	}
	
	foreach ($CONFIG->translations['nl'] as $k => $v){
		if (!isset($CONFIG->translations['en'][$k])){
			$nonEnglish[] = $k;
		}
	}
	
	$missingList = "";
	$duplicateList = "";
	$nonEnglishList = "";
	
	if (count($missing)){
		foreach($missing as $k => $v){
			$missingList .= $k . ": " . $v . "<br/>";
		}
	} else {
		$missingList = elgg_echo("dutch_translation:list:nomissing");
	}
	
	if (count($duplicate)){
		foreach($duplicate as $k => $v){
			$duplicateList .= $k . ": " . $v . " => " . elgg_echo($v) . "<br/>";
		}
	} else {
		$duplicateList = elgg_echo("dutch_translation:list:noduplicate");
	}
	
	if (count($nonEnglish)){
		foreach($nonEnglish as $k => $v){
			$nonEnglishList .= $k . ": " . $v . "<br/>";
		}
	} else {
		$nonEnglishList = elgg_echo("dutch_translation:list:nononenglish");
	}

?>
<div class="contentWrapper">
	<h2><?php echo elgg_echo("dutch_translation:list:header"); ?></h2>
	<div><?php echo elgg_echo("dutch_translation:list:description"); ?>
	</div>
	<div onClick="$('#missingTranslation').toggle();">
		<h3><?php echo sprintf(elgg_echo("dutch_translation:list:missing"), count($missing)); ?></h3>
	</div>
	<div id="missingTranslation">
		<?php echo $missingList; ?>
	</div>
	<div onClick="$('#dubplicateTranslation').toggle();">
		<h3><?php echo sprintf(elgg_echo("dutch_translation:list:duplicate"), count($duplicate)); ?></h3>
	</div>
	<div id="dubplicateTranslation" style="display:none;">
		<?php echo $duplicateList; ?>
	</div>
	<div onClick="$('#nonEnglishTranslation').toggle();">
		<h3><?php echo sprintf(elgg_echo("dutch_translation:list:nonenglish"), count($nonEnglish)); ?></h3>
	</div>
	<div id="nonEnglishTranslation" style="display:none;">
		<?php echo $nonEnglishList; ?>
	</div>
</div>