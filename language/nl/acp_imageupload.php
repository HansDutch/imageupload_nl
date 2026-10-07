<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'ACP_IMAGEUPLOAD_SAVED'									=> 'Afbeelding Upload instellingen opgeslagen',
	'ACP_IMAGEUPLOAD_VERSION'								=> 'Versie',
	'ACP_IMAGE_UPLOAD_CONFIGURATION'						=> 'Afbeelding Upload Configuratie',
	'ACP_IMAGEUPLOAD_ENABLE'								=> 'Uploaden van afbeeldingen inschakelen',
	'ACP_IMAGEUPLOAD_ENABLE_EXPLAIN'						=> 'Globale instelling om het uploaden van afbeeldingen in te schakelen.',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE'							=> 'Afbeeldingen op index inschakelen',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE_EXPLAIN'					=> 'Globale aan/uit van afbeeldingen op index voor alle leden.<br />Leden kunnen in UCP instellen of ze geüploade afbeeldingen op index willen zien.',
	'ACP_IMAGEUPLOAD_NUMBER'								=> 'Grootte van upload',
	'ACP_IMAGEUPLOAD_NUMBER_EXPLAIN'						=> 'De grootte van de upload in MB is standaard 2 MB.',
	'ACP_IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'						=> 'De maximale grootte die uw php.ini toestaat is <strong>%1$s %2$s</strong>!',
	'ACP_IMAGEUPLOAD_REALLY_DELETE_IMAGE'					=> 'Afbeelding echt verwijderen?',
	'ACP_IMAGEUPLOAD_TITLE'									=> 'Naam afbeelding',
	'ACP_IMAGEUPLOAD_TITLE_REAL'							=> 'Echte naam afbeelding',
	'ACP_IMAGEUPLOAD_PREVIEW'								=> 'Voorbeeld',
	'ACP_IMAGEUPLOAD_WIDTH_HEIGHT'							=> 'Breedte/hoogte',
	'ACP_IMAGEUPLOAD_FOLDER_SIZE'							=> 'Totale mapgrootte',
	'ACP_IMAGEUPLOAD_USERNAME'								=> 'Geupload door',
	'ACP_IMAGEUPLOAD_SIZE'									=> 'Grootte',
	'ACP_MULTI_IMAGES'		=>	[
		1 => '%s image',
		2 => '%s images',
	],
	'ACP_IMAGEUPLOAD_SORT_USERNAME'							=> 'Gebruikersnaam',
	'ACP_IMAGEUPLOAD_SORT_DATE'								=> 'Datum',
	'ACP_IMAGEUPLOAD_NOT_SELECTED'							=> 'Geen afbeeldingen geselecteerd',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE'							=> 'Inschakelen mChat beelden plaatsen',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE_EXPLAIN'					=> 'Kies ja om geüploade afbeeldingen in de index in te voegen met onclick invoegen.',
	'ACP_IMAGEUPLOAD_POST_ENABLE'							=> 'Schakel de knop voor het uploaden van afbeeldingen in bij het plaatsen van pagina\'s',
	'ACP_IMAGEUPLOAD_POST_ENABLE_EXPLAIN'					=> 'Kies ja om de uploadknop te tonen op bij het plaatsen van pagina\'s.',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE'						=> 'Gebruikersafbeeldingen inschakelen op het bij plaatsen van pagina\'s',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE_EXPLAIN'				=> 'Globaal aan/uit voor afbeeldingen op bij het plaatsen van pagina\'s.',
	'ACP_IMAGEUPLOAD_EXT'									=> 'Toegestane extensies',
	'ACP_IMAGEUPLOAD_EXT_EXPLAIN'							=> 'Toegestane extensies, gescheiden door een komma (voorbeeld: gif,jpeg,jpg,png)',
	'ACP_IMAGE_UPLOAD_LINK_SETTINGS'						=> 'Instellingen voor link naar afbeelding uploaden',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK'					=> 'Directe link-url inschakelen',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK_EXPLAIN'			=> 'Directe url naar afbeelding.',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK'						=> 'URL-tags inschakelen',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK_EXPLAIN'				=> '[url=BESTANDSNAAM]SITE NAAM[/url]',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK'						=> 'IMG-tags inschakelen',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK_EXPLAIN'				=> '[img]BESTANDSNAAM[/img]',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK'					=> 'URL-IMG-tags inschakelen',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK_EXPLAIN'			=> '[url=BESTANDSNAAM][img]BESTANDSNAAM[/img][/url]',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE'							=> 'Meerdere uploads inschakelen',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE_EXPLAIN'					=> 'Globaal aan/uit voor meerdere upload afbeeldingen.',
		'ACP_IMAGEUPLOAD_CENTER_ENABLE'					=> 'Pop-upcentrum inschakelen',
		'ACP_IMAGEUPLOAD_CENTER_ENABLE_EXPLAIN'				=> 'Maakt pop-up op dezelfde pagina mogelijk',
		'ACP_IMAGEUPLOAD_NAV_ENABLE'					=> 'Schakelt het navigatiebalkpictogram in',
		'ACP_IMAGEUPLOAD_NAV_ENABLE_EXPLAIN'				=> 'Schakelt de navigatiebalk in/uit',
		'ACP_IMAGEUPLOAD_MCHAT_ENABLE'					=> 'Schakel de knop voor het uploaden van afbeeldingen in mchat in',
		'ACP_IMAGEUPLOAD_MCHAT_ENABLE_EXPLAIN'				=> 'Schakelt mchats-knop voor het uploaden van afbeeldingen in',
]);
