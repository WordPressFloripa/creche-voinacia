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
define('AUTH_KEY',         '2 *VFj%LBjma@etDZ/]~]^Ebrw#0kw5oQQEDnY][7O8so(Qm@>TZ;e)Z5K>o+Rq`');
define('SECURE_AUTH_KEY',  'QsWK2mtdI0[i?Hgw&Yu]@65A5`g^S<:)W-R}QCTGp*0p=Fn{|M$z+>_En!qw}OiT');
define('LOGGED_IN_KEY',    '^YboM`A)dCkLVw&c+[Qqo5U#>:9oWgNE)JSS<T 5HsC8rvfE7L[(vS#_)*`[|,ca');
define('NONCE_KEY',        'J1kqZq][ie$DYa-29G%x8jetvs+]h(9{%qrkYzc)!Az:@<iN8k=hko4)Ul?=gKGO');
define('AUTH_SALT',        'kvx%*VNavlpr#Y @!JXdGCCwzKuBkU&|PsUo$~pZ=wmj(Rba-Y*z?g)*}f=@S6NK');
define('SECURE_AUTH_SALT', 'cIXiFB&4xYmxh!4lHv>lGQ-c:#3$w`w&?%[aw3d&E~+6,V.!6m|?>_zmba|i_[[~');
define('LOGGED_IN_SALT',   'xX8K-?f@qawi(K}Z1;FWK]oS_wD`Pb_]0{ifZ*1/y+9(8VaUJn>_{oUN:~T!YvxW');
define('NONCE_SALT',       'A3_{TfLnCn3,.4En?U*.HbB1R~XcHg{I;!EVCc1}@#/PC [n<GZl$h|+G:{>$2>V');

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
