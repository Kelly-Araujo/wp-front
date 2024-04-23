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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'banco1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ':P(&U:~q}<_N#Ko9cKY:M|8P8up?Hn-d,1w?V5*Ecc=-wH;v3$UmPkidi_P9I|fT' );
define( 'SECURE_AUTH_KEY',  '6-/nyY-A(<ekCG$9@2[MRa=Sw[St)@)1+SXD0`sZ?j;5 gQnH<(/$CwXo](US0@d' );
define( 'LOGGED_IN_KEY',    'G0S:q:>2SWm6}fs*k*v}Gzh85_3X2c)j[jT#(n3rsrXQPM;V#.xMk|tsUv;|5qKt' );
define( 'NONCE_KEY',        'bK1Af5N98!AG-zq#y6bfR^LDS+E/r^IJT[<)>~_3&H|qT`CD<7k8)oBATp^LH*5[' );
define( 'AUTH_SALT',        'fSLQA%`(dWUvoxaUi#@&<jxG50UQ#9Q*bKw{04h2GZ5B5jRR`X0gvm]J ^P]n~ul' );
define( 'SECURE_AUTH_SALT', ' 7HN>&| )cYs*+K829SkuFN0UI<lgysPstsn8^L_4ggLB4P)CD?Aj-IGq7uK&01*' );
define( 'LOGGED_IN_SALT',   '~EL<NErZMplFUQzEpE=S]A61 |(%pr`tNora&a(XGDT[2&gx16nZ6z _*Qv+kdkq' );
define( 'NONCE_SALT',       'A*bZaSLiUCKuuQ+m$`Br3tR_@QtU}$W+3i8&t)}clRv^O#5zSU@S|#n7gy)|wMst' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
