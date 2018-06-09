<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'voinacia');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a#L-eBDVswH(~Wy}V{q])^o;=>kW28jFl&CjQ(dCRz=],~_B) z6agz<e7:zW{ps');
define('SECURE_AUTH_KEY',  '?+Is#fVCoLMI,Qr%E]qRO8$#j5i7Q]ep;Rs`*I!&F16nweT!TWm=.7XR<Q5<w2kk');
define('LOGGED_IN_KEY',    '#oUpiBMfN@PJxd3>6%y,I/L[r[=yJZ_>7PRy!:o:bT>K~8g$Fm%3LpUP{8r$.|qI');
define('NONCE_KEY',        'HnBy_j*quI pNgH!ZF^auF-8PCKYER2)?qx&0s&Ld$yM*?%.5gWDyYB2%.8?]c9U');
define('AUTH_SALT',        '+hrr]?VFF:_g{4Nd|bShVp.0?&1c8m<&#fscp>!Zk##}!H=?Sy 43tPZPfG[zK$)');
define('SECURE_AUTH_SALT', 'b,=|~8ci*AF>/^(`<F2,:}u5I;UHUmIfd#UbbWL^&f_<v}9C9QPb>}8{a-,F0;I_');
define('LOGGED_IN_SALT',   'n:utsoz.jFG4?t7B7KnfF<XMQC1Li2t:%b5SLVvb/E`nY0i;D2nd32F, dNVuFc?');
define('NONCE_SALT',       '?$LMUOzH|5m;uRhtXTrXIWVK*?rFK.CI}6;yErM5e.&nb*40OfyW`HDch;tkIig]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'vo_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

