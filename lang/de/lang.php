<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Andreas Zieske <zieske@eaf-bund.de>
 * @author F. Mueller-Donath <j.felix@mueller-donath.de>
 * @author Florian Lamml <info@florian-lamml.de>
 */
$lang['encoding']              = 'utf-8';
$lang['direction']             = 'ltr';
$lang['view']                  = 'Ins Open-Document-Format exportieren';
$lang['export_odt_button']     = 'ODT exportieren';
$lang['export_odt_pdf_button'] = 'ODT=>PDF exportieren';
$lang['tpl_not_found']         = 'FEHLER: Die ODT Vorlage "%s" konnte im Vorlagenverzeichnis "%s" nicht gefunden werden. Der Export wurde abgebrochen.';
$lang['toc_title']             = 'Inhaltsverzeichnis';
$lang['chapter_title']         = 'Kapitelinhalt';
$lang['toc_msg']               = 'Ein Inhaltsverzeichnis wird an dieser Stelle eingefügt.';
$lang['chapter_msg']           = 'Ein Kapitelverzeichnis wird an dieser Stelle eingefügt.';
$lang['update_toc_msg']        = 'Bitte vergessen Sie nicht, das Inhaltsverzeichnis nach dem Export zu aktualisieren.';
$lang['update_chapter_msg']    = 'Bitte vergessen Sie nicht, das Kapitelverzeichnis nach dem Export zu aktualisieren.';
$lang['needtitle']             = 'Bitte Titel angeben!';
$lang['needns']                = 'Bitte geben Sie einen vorhandenen Namensraum an.';
$lang['empty']                 = 'Sie haben noch keine Seiten ausgewählt.';
$lang['forbidden']             = 'Sie haben keine Berechtigungen für folgende Seiten: %s.<br/><br/>Benutzen Sie die Option "Verbotene Seiten überspringen" um ein Buch nur mit den verfügbaren Seiten zu erstellen.';
$lang['conversion_failed_msg'] = '====== Bei der Konvertierung des ODT-Dokuments ist ein Fehler aufgetreten: ======

Ausgeführte Kommando-Zeile:

<code>%command%</code>

Fehlerwert: %errorcode%

Fehlerausgabe:

<code>%errormessage%</code>

[[%pageid%|Zurück zur vorherigen Seite]]';
$lang['init_failed_msg']       = '====== Ein Fehler ist bei der Initialisierung des ODT-Dokuments aufgetreten: ======

Ist Ihre DokuWiki-Version kompatibel zum ODT-Plugin?

Seit Release 2017-02-11 benötigt das ODT-Plugin DokuWiki-Release “Detritus” oder neuer!
Für detailierte Informationen lesen Sie bitte den [[https://www.dokuwiki.org/plugin:odt#requirements|Abschnitt "Requirements"]] auf der ODT-Plugin Seite auf DokuWiki.org.

(Ihr DokuWiki-Release ist %DWVERSION%)';
