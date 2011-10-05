<?php
	/**
	 * Contact Us
	 * 
	 * @package contact_us
	 * @license The BSD License
	 * @author ICCNET.org
	 * @copyright ICCNET.org 2009
	 * @link http://www.iccnet.org/
	 * @version 1.1.0
	 */
	/*
	 * Dutch Translation 
	 * 
	 * @package dutch_translation
	 * @author ColdTrick IT Solutions
	 * @copyright ColdTrick 2009
	 * @link http://www.coldtrick.com
	 */

if(is_plugin_enabled('contact_us')){
	$dutch = array(
    
        // Title and labels for form and settings
        'contact_us' => "Contact",
        'contact_us:address' => "E-mail adres",
        'contact_us:phone' => "Telefoon",
        'contact_us:emailform' => "E-mail formulier",
        'contact_us:name' => "Naam",
        'contact_us:email' => "E-mail",
        'contact_us:subject' => "Onderwerp",
        'contact_us:message' => "Bericht",
        'contact_us:mailto' => "Stuur e-mail naar",
        'contact_us:send' => "Verstuur",
        'contact_us:subjects' => "Geef onderwerpen (ייn per regel)",
        'contact_us:subject:textbox' => "Toon een leeg tekstveld ipv bovenstaande onderwerpen?",
        'contact_us:default:email' => "Geef e-mail adressen op (ייn per regel, bijv: John Doe:jdoe@domain.tld)",
        'contact_us:successful:message' => "Succesvol bericht",
        'contact_us:menu' => "Moet de Contact pagina in het Tools menu verschijnen?",
        
        // Feedback messages
        'contact_us:invalid:name' => "Het systeem kon de opgegeven naam niet accepteren. Een geldige naam bestaat uit letters, nummers en leestekens. Probeer het nogmaals.",
        'contact_us:invalid:email' => "Het systeem kon het opgegeven e-mail adress niet accepteren. Probeer het nogmaals met een geldig e-mail adres.",
        'contact_us:invalid:message' => "Er moet een bericht zijn ingevult",
        'contact_us:send:unsuccessful' => "Je bericht kon niet worden verstuurt, controlleer of je alle velden had ingevuld.",
        'contact_us:send:successful' => "Je bericht is succesvol verstuurd. We zullen spoedig reageren. Dank voor je bericht.",

	);

	add_translation("nl", $dutch);
}
?>