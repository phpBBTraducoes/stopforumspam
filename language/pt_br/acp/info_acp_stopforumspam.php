<?php
/**
*
* Stop forum Spam extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.8] (https://github.com/phpBBTraducoes)
* @copyright (c) 2015 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
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
// Some characters for use
// ’ » “ ” …


$lang = array_merge($lang, array(

	// ACP entries
	'ACP_SFS_TITLE'			=> 'Stop Forum Spam',
	'SFS_CONTROL'			=> 'Configurações Stop Forum Spam',
	// ACP message logs
	'LOG_SFS_MESSAGE'		=> '<strong>Stop Forum Spam desencadeou</strong>:<br />Nome de usuário: %1$s<br />IP: %2$s<br />Email: %3$s',
	'LOG_SFS_DOWN'			=> '<strong>Stop Forum Spam estava desativado durante um registro ou uma postagem no fórum</strong>',
	'LOG_SFS_DOWN_USER_ALLOWED' => '<strong>Stop Forum Spam estava desativado.</strong> O usuário seguinte foi permitido no fórum:<br />Nome de usuário: %1$s<br />IP:%2$s<br />Email: %3$s',
	'LOG_SFS_NEED_CURL'		=> 'A extensão Stop Forum Spam precisa de <strong>cURL</strong> para funcionar corretamente. Por favor, fale com o host do seu servidor para obter o CURL instalado e ativo.',
	'LOG_SFS_CONFIG_SAVED'	=> '<strong>Configurações do Stop Forum Spam alteradas</strong>',
	'LOG_SFS_REPORTED'		=> '<strong>O usuário foi reportado ao Stop Forum Spam</strong><br>» %1$s',
	'LOG_SFS_REPORTED_CLEARED'	=> 'Posts reportados ao stop forum spam foram canceladas',
));
