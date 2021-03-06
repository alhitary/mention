<?php
/**
 *
 * phpBB mentions. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, paul999, https://www.phpbbextensions.io
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary <http://alhitary.net>
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/**
 * As there is no proper way of including this file just when the notification is
 * loaded we need to include it on all pages. Make sure to only include important
 * language items (That are directly needed by the notification system) in this file.
 */
$lang = array_merge($lang, array(
	'MENTION_LENGTH'                => 'الحد الأدنى للطول',
	'MENTION_LENGTH_EXPLAIN'        => 'الحد الأدنى لطول النص قبل ظهور القائمة المنسدلة لأسماء الأعضاء.
	قد ترغب في زيادة هذه القيمة لو لديك منتدى كبير.',
	'MENTION_COLOR'                 => 'اللون',
	'MENTION_COLOR_EXPLAIN'         => 'يتم استخدام هذا اللون بداخل الموضوع لتلوين الإسم المُشار إليه. يمكن استخدام القيمة السداسية فقط.',
	'MENTION_COLOR_INVALID'         => 'اللون الذي حددته (%s) غير صالح. الرجاء تحديد قيمة صالحة (سداسية) للون الذي تريده, بدون العلامة #',
=======
	'MENTION_LENGTH'                => 'Simple mention minimum length',
	'MENTION_LENGTH_EXPLAIN'        => 'The minimum text length before the simple mention dropdown is shown. 
	On larger boards you might want to increase this value.',
	'MENTION_COLOR'                 => 'Simple mention color',
	'MENTION_COLOR_EXPLAIN'         => 'This color is used within the post to define what user is mentioned. Only hex values can be used.',
	'MENTION_COLOR_INVALID'         => 'The selected mention color (%s) is invalid. Please select a valid HEX color, without #',
));
