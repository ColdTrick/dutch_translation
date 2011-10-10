<?php
if(elgg_is_active_plugin("diagnostics")){
	$language = array (
	  'admin:develop_utilities:diagnostics' => 'Systeem diagnose',
	  'diagnostics:report' => 'Diagnose rapport',
	  'diagnostics:unittester:warning' => 'WAARSCHUWING: Deze testen kunnen debugging objecten achterlaten in de database. <br>NIET GEBRUIKEN OP PRODUCTIE SITES!',
	  'diagnostics:download' => 'Download',
	  'diagnostics:header' => '========================================================================
Elgg Diagnostic Report
Generated %s by %s
========================================================================',
  'diagnostics:report:basic' => 'Elgg Release %s, version %s

------------------------------------------------------------------------',
  'diagnostics:report:php' => 'PHP info:
%s
------------------------------------------------------------------------',
  'diagnostics:report:plugins' => 'Installed plugins and details:

%s
------------------------------------------------------------------------',
  'diagnostics:report:md5' => 'Installed files and checksums:
	
%s
------------------------------------------------------------------------',
  'diagnostics:report:globals' => 'Global variables:
	
%s
------------------------------------------------------------------------',
	  'diagnostics' => 'Systeem diagnose',
	  'diagnostics:unittester' => 'Unit Testen',
	  'diagnostics:description' => 'Het volgende diagnostische rapport is nuttig voor de diagnose van problemen met Elgg, en moet worden bijgevoegd aan een bug report die je indient.',
	  'diagnostics:unittester:description' => 'Unit testen controleren de Elgg Core op gebroken of buggy API\'s',
	  'diagnostics:unittester:debug' => 'De site moet in debug mode staan om Unit testen uit te kunnen voeren',
	  'diagnostics:test:executetest' => 'Test uitvoeren',
	  'diagnostics:test:executeall' => 'Alle testen uitvoeren',
	  'diagnostics:unittester:notests' => 'Sorry, op dit moment zijn er geen Unit testen geïnstalleerd.',
	  'diagnostics:unittester:testnotfound' => 'Sorry, het rapport kon niet worden gegenereerd omdat de test niet gevonden kon worden',
	  'diagnostics:unittester:testresult:nottestclass' => 'FOUT - Resultaat is geen test class',
	  'diagnostics:unittester:testresult:fail' => 'FOUT',
	  'diagnostics:unittester:testresult:success' => 'SUCCES',
	  'diagnostics:unittest:example' => 'Voorbeeld Unit test, alleen beschikbaar in debug mode.',
	  'diagnostics:unittester:report' => 'Test rapport voor %s',
	);
	add_translation("nl", $language);
}