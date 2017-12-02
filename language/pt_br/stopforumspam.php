<?php
/**
*
* Stop forum Spam extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.7] (https://github.com/phpBBTraducoes)
* @copyright (c) 2015 Rich McGirr (RMcGirr83)
* @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, array(
	'NO_POST_SELECTED'	=> 'Você deve selecionar pelo menos uma postagem para executar esta ação.',
	'NO_SOUP_FOR_YOU'	=> 'Nenhuma sopa para você! Parece que você foi marcado como um spammer.<br /> Se você acha que essa decisão foi tomada por engano %sentre em contato com o administrador do fórum%s.',
	'NO_SOUP_FOR_YOU_NO_CONTACT'	=> 'Nenhuma sopa para você! Parece que você foi marcado como spammer.',
	'SFS_IP_STOPPED'	=> '<a target="_new" title="Verifique IP em StopForumSpam.com (abre em uma nova janela)" href="http://www.stopforumspam.com/ipcheck/%1$s">%1$s</a>',
	'SFS_USERNAME_STOPPED'	=> '<a target="_new" title="Verifique o nome de usuário em StopForumSpam.com (abre em uma nova janela)" href="http://www.stopforumspam.com/search/?q=%1$s">%1$s</a>',
	'SFS_EMAIL_STOPPED'	=> '<a target="_new" title="Verifique o e-mail em StopForumSpam.com (abre em uma nova janela)" href="http://www.stopforumspam.com/search/?q=%1$s">%1$s</a>',
	'SFS_ERROR_MESSAGE'	=> 'Infelizmente, não podemos processar seu pedido agora devido a problemas com uma parte externa. Você pode tentar novamente mais tarde.',
	'SFS_POSTING'	=> 'Nenhum e-mail, tentou fazer uma postagem',
	'SFS_BANNED'	=> 'Encontrado no banco de dados do Stop Forum Spam',
	'SFS_REPORTED'	=> 'O post já foi reportado',
	'REPORT_TO_SFS'	=> 'Reporte ao Stop Forum Spam',
	'SFS_SUCCESS_MESSAGE'	=> 'O usuário foi reportado com sucesso no banco de dados do stop forum',
	'SFS_WAS_REPORTED'	=> 'O post foi reportado para Stop Forum Spam',
	'SFS_NEED_CURL'	=> 'A extensão requer CURL que não parece estar instalado',
	'LOG_SFS_REPORTED' => '<strong>O usuário foi reportado ao Stop Forum Spam</strong><br>» %1$s',
));
