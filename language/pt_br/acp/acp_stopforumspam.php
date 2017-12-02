<?php
/**
*
* Stop forum Spam extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.7] (https://github.com/phpBBTraducoes)
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
	'SFS_SETTINGS'			=> 'Configurações',
	'SFS_ENABLED'			=> 'Ativar Stop Forum Spam',
	'SFS_ENABLED_EXPLAIN'	=> 'Ative ou desative a extensão. Isso se aplica tanto ao registro do usuário quanto às postagens do visitante.',
	'SFS_THRESHOLD_SCORE'	=> 'Stop Forum Spam limite',
	'SFS_THRESHOLD_SCORE_EXPLAIN'	=> 'A extensão irá verificar contra um limite (por exemplo, o número de vezes que um nome de usuário, e-mail ou endereço IP é encontrado dentro do banco de dados do banco de parada). Você pode inserir qualquer número entre 1 e 99. Quanto menor o número maior a possibilidade de um falso positivo.',
	'SFS_LOG_MESSAGE'		=> 'Registre uma mensagem',
	'SFS_LOG_MESSAGE_EXPLAIN'	=> 'Se configurado como sim as mensagens será registradas no ACP nos logs de administrador ou usuário, indicando a ação feita.',
	'SFS_BAN_IP'			=> 'Banir IP',
	'SFS_BAN_IP_EXPLAIN'	=> 'Se configurado como sim, o IP dos usuários será banido pela configuração de "Comprimento da proibição"',
	'SFS_BAN_REASON'		=> 'Mostrar motivo se for banido',
	'SFS_BAN_REASON_EXPLAIN'	=> 'Se "Banir IP" estiver configurado para sim, você pode optar por exibir uma mensagem para o usuário banido ou não.',
	'SFS_DOWN'				=> 'Permitir se Stop Forum Spam estiver desativado',
	'SFS_DOWN_EXPLAIN'		=> 'O registro/postagem deve ser realizado se o site do Stop Forum Spam estiver desativado',
	'SFS_API_KEY'			=> 'Stop Forum Spam API key',
	'SFS_API_KEY_EXPLAIN'	=> 'Se você deseja enviar spammers para o banco de dados Stop Forum Spam, insira sua chave API de <a target="_new" href="http://www.stopforumspam.com/keys">stop forum spam</a> aqui.  Você deve estar registrado no site do SFS para obter uma chave da API',
	'SFS_NOTIFY'			=> 'Notificação do fórum',
	'SFS_NOTIFY_EXPLAIN'	=> 'Se definido sim e há uma chave de API definida acima, as notificações do fórum também serão ativadas quando uma postagem for reportada para impedir o spam do fórum.',
	'SFS_CLEAR'	=> 'Redefinir posts reportados',
	'SFS_CLEAR_EXPLAIN'	=> 'Redefinirá todos os posts reportados ao stop forum spam',
	// ACP messages
	'SFS_BY_NAME'	=> 'Verificar em comparação ao nome do usuário',
	'SFS_BY_EMAIL'	=> 'Verificar em comparação ao email',
	'SFS_BY_IP'		=> 'Verificar em comparação ao IP',
	'TOO_SMALL_SFS_THRESHOLD'	=> 'O valor limite é muito pequeno.',
	'TOO_LARGE_SFS_THRESHOLD'	=> 'O valor limite é muito grande.',
	'SFS_SETTINGS_ERROR'		=> 'Ocorreu um erro ao salvar suas configurações. Envie o rastreamento posterior com seu relatório de erro.',
	'SFS_SETTINGS_SUCCESS'		=> 'As configurações foram salvas com sucesso.',
	'SFS_REPORTED_CLEARED' => 'Posts reportados ao stop forum spam foram redefinidos',
));
