<?php

if (!elgg_is_active_plugin("web_services")) {
	return;
}

$language = array (
  'APIException:ApiResultUnknown' => 'API resultaat is van een onbekend type. Dit zou nooit moeten gebeuren.',
  'APIException:MissingParameterInMethod' => 'Ontbrekende parameter %s in methode %s',
  'APIException:ParameterNotArray' => '%s is geen array.',
  'APIException:UnrecognisedTypeCast' => 'Onherkenbaar type in cast %s voor variabele \'%s\' in method \'%s\'',
  'APIException:InvalidParameter' => 'Ongeldige parameter gevonden voor \'%s\' in methode \'%s\'.',
  'APIException:FunctionParseError' => '%s(%s) heeft een parsing error.',
  'APIException:FunctionNoReturn' => '%s(%s) levert geen waarde op.',
  'APIException:APIAuthenticationFailed' => 'Methode aanroep kwam niet door de API authenticatie',
  'APIException:UserAuthenticationFailed' => 'Methode aanroep kwam niet door de gebruiker authenticatie',
  'APIException:MethodCallNotImplemented' => 'Methode aanroep \'%s\' is niet geïmplementeerd.',
  'APIException:FunctionDoesNotExist' => 'Functie voor methode \'%s\' is niet aanroepbaar',
  'APIException:AlgorithmNotSupported' => 'Algoritme \'%s\' is niet ondersteunt of is uitgeschakeld.',
  'APIException:NotGetOrPost' => 'Verzoek methode moet GET of POST zijn',
  'APIException:MissingAPIKey' => 'Ontbrekende API key',
  'APIException:BadAPIKey' => 'Foute API key',
  'APIException:MissingHmac' => 'Ontbrekende X-Elgg-hmac header',
  'APIException:MissingHmacAlgo' => 'Ontbrekende X-Elgg-hmac-algo header',
  'APIException:MissingTime' => 'Ontbrekende X-Elgg-time header',
  'APIException:MissingNonce' => 'Ontbrekende X-Elgg-nonce header',
  'APIException:TemporalDrift' => 'X-Elgg-time is te ver in het verleden of de toekomst. Epoch mislukt.',
  'APIException:NoQueryString' => 'Geen data in de query string',
  'APIException:MissingPOSTHash' => 'Ontbrekende X-Elgg-posthash header',
  'APIException:MissingPOSTAlgo' => 'Ontbrekende X-Elgg-posthash_algo header',
  'APIException:MissingContentType' => 'Ontbrekende content type voor POST data',
  'SecurityException:APIAccessDenied' => 'Helaas is API toegang niet toegestaan door de beheerder.',
  'SecurityException:NoAuthMethods' => 'Er zijn geen authenticatie methodes gevonden die dit API verzoek konden authenticeren.',
  'SecurityException:authenticationfailed' => 'Gebruiker kon niet worden geauthenticeerd',
  'InvalidParameterException:APIMethodOrFunctionNotSet' => 'Methode of functie is niet beschikbaar in expose_method()',
  'InvalidParameterException:APIParametersArrayStructure' => 'Parameters array structuur is incorrect voor het publiceren van method \'%s\'',
  'InvalidParameterException:UnrecognisedHttpMethod' => 'Onherkenbare http methode %s voor api methode \'%s\'',
  'SecurityException:AuthTokenExpired' => 'Authenticatie token ontbreekt, is ongeldig of is verlopen.',
  'SecurityException:InvalidPostHash' => 'POST data hash is ongeldig - Verwacht %s maar kreeg %s.',
  'SecurityException:DupePacket' => 'Packet signature alreeds gezien.',
  'SecurityException:InvalidAPIKey' => 'Ongeldige of ontbrekende API key.',
  'NotImplementedException:CallMethodNotImplemented' => 'Aanroep van methode \'%s\' is op dit moment niet ondersteunt.',
  'CallException:InvalidCallMethod' => '%s moet worden aangeroepen door \'%s\' te gebruiken',
  'system.api.list' => 'Toont een lijst met alle beschikbare API aanroepen beschikbaar in het systeem.',
  'auth.gettoken' => 'Deze API aanroep zorgt ervoor dat een gebruiker een token kan verkrijgen waarmee de gebruiker zich kan authenticeren bij toekomstige API aanroepen. Geef het door in de parameter auth_token.',
);
add_translation("nl", $language);
