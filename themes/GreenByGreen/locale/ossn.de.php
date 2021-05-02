<?php
$setting = new OssnSite;
$date_format = $setting->getSettings('gbg:date:format');
if($date_format && $date_format == 'exact') {
	$site_timepassed_data = 'site:timepassed:data';
} else {
	$site_timepassed_data = 'site:timepassed:data:default';
}

ossn_register_languages('de', array(
	$site_timepassed_data => '%e %h %G %H:%M|de_DE.UTF-8',
	'copyright' => '&copy; ',
	'theme:greenbygreen:cover:tooltip' => 'Drehe dein Gerät um 90 ° im Uhrzeigersinn und berühre diesen Bereich erneut, um Titelbilder hochzuladen oder neu zu positionieren',
	'theme:greenbygreen:dragging:instruction' => 'Hinweis: Um die besten Ergebnisse zu erzielen, stelle den Browser auf eine Titelbildbreite von 1040 ein - die aktuelle Breite ist: %s',
	'personal' => 'Persönliches',
	'theme:greenbygreen:section:menu:settings' => 'Einstellungen',
	'theme:greenbygreen:section:menu:mygroups' => 'Meine Gruppen',
	'theme:greenbygreen:section:menu:friendsonline'	=> 'Online Freunde',
	'theme:greenbygreen:topbar:menu:togglechatbar' => 'Chat Tab ein/aus <span></span>',
	
	'greenbygreen:settings' => 'GreenByGreen Konfiguration',
	'greenbygreen2:settings' => 'GreenByGreen Konfiguration',
	'greenbygreen3:settings' => 'GreenByGreen Konfiguration',
	'admin:theme:greenbygreen' => 'GreenByGreen Konfiguration',
	
	'theme:greenbygreen:settings:tab1' => 'Logos',
	'theme:greenbygreen:settings:tab2' => 'Farben',
	'theme:greenbygreen:settings:tab3' => 'Sonstiges',

	'theme:greenbygreen:settings:tab2:css:instructions' =>
"		GreenByGreen verwendet drei individuelle CSS-Dateien, um deine Startseite, den inneren Teil deiner Site im 'Hellmodus',
		und den inneren Teil deiner Site im 'Dunkelmodus' zu kolorieren. Zur Kontrolle werden alle standardmäßig verwendeten Farben des Hell- und Dunkelmodus
		in den beiden Spalten ganz rechts aufgelistet. Wie du siehst, unterscheiden sich der Hell- und Dunkelmodus standardmäßig nur in den Sektionen
		SEITE und ABSCHNITTE, während STARTSEITE, KOPFZEILE und MENÜ im Hell- und Dunkelmodus dieselben Farben verwenden. Aber natürlich steht dir frei,
		auch sie individuell zu gestalten.
		<br />
		Da der CSS-Editor immer nur einen vollständigen Farbsatz speichern kann, der entweder auf der Startseite, beim Hellmodus oder beim Dunkelmodus Anwendung findet,
		ist es sinnvoll, zuerst die Startseite vollständig anzupassen, dann den Hellmodus, und zum Schluss den Dunkelmodus.
		<br />
		Die erforderlichen Schritte zum Anpassen am Beispiel der Startseite sind:
		<br />
		<ul>
		<li>klicke in der Spalte 'eigene Farbe' auf die Farbe(n), die du ändern möchtest</li>
		<li>verwende den Schieberegler, um die Farbe deiner Wahl zu erhalten, oder gib das hexadezimale Äquivalent manuell ein</li>
		<li>wähle den Bereich, dem du diese Farben zuweisen möchten (in diesem Fall 'Startseite')</li>
		<li>klicke den 'Speichern' Knopf</li>
		</ul>
		Die Konfigurations-Seite wird dann neu geladen und du kannst sofort das Ergebnis deiner Änderungen in der linken Vorschau-Spalte ansehen.
		Wenn du mit der Startseite zufrieden und fertig bist, wiederhole die gleichen Schritte für den inneren Teile der Site im hellen und/oder dunklen Modus.
",
	'theme:greenbygreen:settings:tab2:css:frontpage:iframe:header' => 'Vorschau der Startseite',
	'theme:greenbygreen:settings:tab2:css:light_mode:iframe:header' => 'Vorschau des Hellmodus',
	'theme:greenbygreen:settings:tab2:css:dark_mode:iframe:header' => 'Vorschau des Dunkelmodus',
	'theme:greenbygreen:settings:tab2:css:sections:label' => 'Wähle nun den Bereich deiner Site aus, dem du diese Farben zuweisen möchtest',
	'theme:greenbygreen:settings:tab2:css:frontpage' => 'Startseite',
	'theme:greenbygreen:settings:tab2:css:light_mode' => 'Innere Site im Hellmodus',
	'theme:greenbygreen:settings:tab2:css:dark_mode' => 'Innere Site im Dunkelmodus',
	'theme:greenbygreen:settings:tab2:css:colortables:label' => 'Derzeit verwendete Farbtabellen',	
	
	'theme:greenbygreen:settings:tab3:extra:newsfeed:link' => '&nbsp;Füge einen <b><i class="fa fa-bullhorn"></i> Neuigkeiten</b> -Eintrag zum <b>Links</b> Submenü der linken Menüleiste hinzu',
	'theme:greenbygreen:settings:tab3:date:format:elapsed' => 'Zeitstempel als verstrichene Zeit anzeigen (z. B. <i> vor 25 Minuten </i>)',
	'theme:greenbygreen:settings:tab3:date:format:exact' => 'Zeitstempel als genaue Zeit anzeigen (z. B. <i> 13 Feb 2021 16:33 </i>)',
	
	'theme:greenbygreen:account:settings:colors:tab' => 'Farben',
	'theme:greenbygreen:account:settings:colors:label' => 'Wähle deinen bevorzugten Site-Farbmodus',
	'theme:greenbygreen:account:settings:colors:mode:gbg_light_mode' => 'hell',
	'theme:greenbygreen:account:settings:colors:mode:gbg_dark_mode' => 'dunkel',
	
	'theme:greenbygreen:account:settings:delete:account:tab' => 'Konto löschen',
	'theme:greenbygreen:account:settings:delete:account:label' => "
	 Vorsicht: Beim Löschen deines Benutzer-Kontos werden<br><br>
	 <ul>
	 <li>all deine persönlichen Daten irreversibel gelöscht</li>
	 <li>ebenso wie alle Beziehungen zu anderen Mitgliedern</li>
	 <li>und alles, was du jemals gepostet hast</li>
	 </ul>
	 Dieser Vorgang kann nicht rückgängig gemacht werden.",
	'theme:greenbygreen:account:settings:delete:account:button' => 'Konto löschen',
	'theme:greenbygreen:account:delete:error' => 'Dein Konto konnte nicht gelöscht werden - bitte kontaktiere den Administrator', 
	
	'theme:greenbygreen:frontpage:settings' => 'Einstellungen für die Start-Seite',
	'theme:greenbygreen:instruction:1' => 'Option 1: Ersetzen des aktuellen Logos durch ein neues',
	'theme:greenbygreen:logo:site' => 'Logo Bild',
	'theme:greenbygreen:instruction:2' => "Option 2: Ersetzen des aktuellen Logos durch Text (wenn kein Bild hochgeladen wird)",
	'theme:greenbygreen:logo:text:text' => 'Logo Text',
	'theme:greenbygreen:logo:text:color' => 'Logo Farbe',
	'theme:greenbygreen:logo:text:size' => 'Logo Größe',
	'theme:greenbygreen:instruction:3' => "Option 3: Ersetzen der Standard-Begrüßungsnachricht durch eine andere. Wähle '<b>none</b>', um sie vollständig auszublenden",
	'theme:greenbygreen:greeting:text' => 'Begrüßungsnachricht',
	'theme:greenbygreen:backend:settings' => 'Einstellungen für die Administrator-Seite',
	'theme:greenbygreen:instruction:4' => 'Option 1: Ersetzen des aktuellen Logos der Administrationsseite durch ein neues',
	'theme:greenbygreen:logo:admin' => 'Logo Bild der Administrationsseite',
	'theme:greenbygreen:logo:large' => 'Logo Datei zu groß',
	
	'theme:greenbygreen:usertype:admin' => 'Admin',
	'theme:greenbygreen:usertype:moderator' => 'Moderator',
	'theme:greenbygreen:usertype:verified' => 'verifiziert',
	'theme:greenbygreen:usertype:banned' => 'gebannt',
	
	'theme:greenbygreen:component:compatibility:error' => '<b>%s</b> kann nicht aktiviert werden solange <b>GreenByGreen</b> aktiviert ist',

	// colorizing
	'gbg:section' => 'Sektion',
	'gbg:custom' => "eigene Farbe",
	'gbg:default:lightmode' => 'Standard hell',
	'gbg:default:darkmode' => 'Standard dunkel',

	'gbg:section:frontpage' => 'STARTSEITE',
	'gbg:frontpage_bg_lcolor' => 'Hintergrund %soben links%s',
	'gbg:frontpage_bg_dcolor' => 'Hintergrund %sunten rechts%s',
	'gbg:frontpage_fg_color' => 'Vordergrund',

	'gbg:section:topbar' => 'KOPFZEILE',
	'gbg:topbar_bg_lcolor' => 'Hintergrund %soben links%s',
	'gbg:topbar_bg_dcolor' => 'Hintergrund %sunten rechts%s',
	'gbg:topbar_fg_color' => 'Vordergrund',
	'gbg:topbar_hv_color' => 'aktive Links',
	
	'gbg:section:sidebar' => 'MENÜ',
	'gbg:sidebar_bg_color' => 'Hintergrund',
	'gbg:sidebar_fg_mcolor' => 'Vordergrund %sHaupteintäge%s',
	'gbg:sidebar_hv_mcolor' => 'aktiver Vordergrund %sHaupteinträge%s',
	'gbg:sidebar_fg_scolor' => 'Vordergrund %sUntereinträge%s',
	'gbg:sidebar_hv_scolor' => 'aktiver Vordergrund %sUntereinträge%s',
	'gbg:sidebar_bb_color' => 'Trennlinien',
	
	'gbg:section:page' => 'SEITE',
	'gbg:page_bg_color' => 'Hintergrund',
	'gbg:page_fg_color' => 'Vordergrund',
	'gbg:section_bg_color' => 'Spalten',
	'gbg:link_fg_color' => 'Links',
	'gbg:link_hv_color' => 'aktive Links',
	'gbg:input_bg_color' => 'Eingabe Hintergrund',
	
	'gbg:section:widget' => 'ABSCHNITTE',
	'gbg:widget_head_bg_color' => 'Hintergrund %sÜberschriften%s',
	'gbg:widget_body_bg_color' => 'Hintergrund %sInhalte%s',
	
	'menubuilder:submenu:personal' => 'Persönliches',

));
