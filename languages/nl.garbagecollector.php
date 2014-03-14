<?php

if (elgg_is_active_plugin("garbagecollector")) {
	$dutch = array(
	
		/**
		* Menu items and titles
		*/

		'garbagecollector:period' => 'Hoe vaak moet de Elgg garbage collector draaien?',

		'garbagecollector:weekly' => 'Eens per week',
		'garbagecollector:monthly' => 'Eens per maand',
		'garbagecollector:yearly' => 'Eens per jaar',

		'garbagecollector' => "GARBAGE COLLECTOR\n",
		'garbagecollector:done' => "KLAAR\n",
		'garbagecollector:optimize' => "Optimaliseren %s ",

		'garbagecollector:error' => "FOUT",
		'garbagecollector:ok' => "OK",

		'garbagecollector:gc:metastrings' => 'Opruimen van niet gelinkte metastrings: ',
	
	);
	
	add_translation("nl", $dutch);
}
