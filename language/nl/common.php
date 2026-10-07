<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'IMAGEUPLOAD_UPLOAD'						=> 'Img-upload',
	'IMAGEUPLOAD_UPLOAD_SECTION'				=> 'Afbeelding uploaden sectie',
	'IMAGEUPLOAD_UPLOAD_MESSAGE'				=> 'Upload hier je afbeelding. (Let op: deze map wordt leeggemaakt en alle uploads worden gelogd)',
	'IMAGEUPLOAD_NOT_ENABELD'					=> 'Afbeelding uploaden is niet ingeschakeld',
	'IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'				=> 'De maximale grootte van het bestand is <strong>%1$s %2$s</strong>! Vanwege de uploadtijd die u mogelijk nodig heeft, kan deze waarde lager zijn!',
	'IMAGEUPLOAD_NO_FILENAME'					=> 'Je moet een bestand invoeren dat bij je upload hoort!',
	'IMAGEUPLOAD_CURRENT_VERSION'				=> 'Versie',
	'IMAGEUPLOAD_NEW_FILENAME'					=> 'Bestandsnaam',
	'IMAGEUPLOAD_SUCCEEDED'						=> 'Uploaden is gelukt!',
	'IMAGEUPLOAD_DIRECT_LINK'					=> 'Directe link',
	'IMAGEUPLOAD_URL_LINK'						=> 'URL',
	'IMAGEUPLOAD_IMG_LINK'						=> 'IMG',
	'IMAGEUPLOAD_URLIMG_LINK'					=> 'URL-IMG',
	'IMAGEUPLOAD_BY'							=> 'Afbeelding uploaden door',
	'IMAGEUPLOAD_COPY'							=> 'kopiëren',
	'IMAGEUPLOAD_UPLOADED_IMAGES'				=> 'Je geüploade afbeeldingen',
	'IMAGEUPLOAD_POSTINGPAGE'					=> 'Hier vindt u uw geüploade afbeeldingen, klik op de afbeelding om een voorbeeld te bekijken.',
	'IMAGEUPLOAD_INDEXPAGE'						=> 'Hier vindt u uw geüploade afbeeldingen, klik op de afbeelding om een voorbeeld te bekijken, gewoon slepen en neerzetten.',
	'IMAGEUPLOAD_INDEXPAGE_CHAT'				=> 'Hier vindt u uw geüploade afbeeldingen, klik op afbeelding om een voorbeeld te bekijken, sleep en plaats of klik op de titelknop om direct in mChat te posten.',
	'IMAGEUPLOAD_UPC_INDEX'						=> 'Bekijk uw geüploade afbeeldingen op de indexpagina',
	'IMAGEUPLOAD_COLLAPSIBLE_CATEGORIES_TITLE'			=> [
		0 => 'Upload afbeelding verbergen',
		1 => 'Upload afbeelding weergeven',
	],
	'IMAGEUPLOAD_UCP_DELETE_IMAGES'				=> 'Verwijder afbeelding',
	'IMAGEUPLOAD_UCP_DELETED_IMAGES'			=> 'Verwijderde afbeelding',
	'IMAGEUPLOAD_PAGE_RETURN'					=> 'Terugkeren naar geüploade afbeeldingen',
	'IMAGEUPLOAD_DIRECTORY_FAIL'				=> 'Fout: map <strong>%s</strong> is niet beschrijfbaar!',
	'IMAGEUPLOAD_IMAGES_PAGINATION'		=>	[
		1 => '%s afbeelding',
		2 => '%s afbeeldingen',
	],
	'IMAGEUPLOAD_INSERT_IMAGE'					=> 'Voeg afbeelding in',
	'IMAGEUPLOAD_INSERT_MCHAT_IMAGE'			=> 'Afbeelding invoegen in mChat',
	'IMAGEUPLOAD_MULTI_UPLOAD_EXPLAIN' 			=> 'Sectie voor het uploaden van meerdere afbeeldingen.<br>Images uploaded will be added automatic to your uploaded images.<br>Images bigger then maximum size allows are not uploaded.<br>Multi uploaded images will not give a link or preview.',
	'IMAGEUPLOAD_MULTI_UPLOAD_DRAG' 			=> 'Sleep uw bestanden hierheen',
	'IMAGEUPLOAD_MULTI_UPLOAD_BROWSE' 			=> 'Of blader',
	'IMAGEUPLOAD_CLOSED'						=> 'Sluit',
]);
