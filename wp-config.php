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
define( 'DB_NAME', 'Blog' );

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
define( 'AUTH_KEY',         'CC)>T^B7B]x<zz3Uj<D0]8vn[F>H~{9L~-_WI*<c8hen?$5N/U3=]2jNJpb;@H_v' );
define( 'SECURE_AUTH_KEY',  'F3oJrdm*`-6hU9=8uG1R`3O[t&6Z*RuufAO6,NG1-@2y/|x#ZtXI`mocJ%MbVDN<' );
define( 'LOGGED_IN_KEY',    '>tbn-M~[xk.`fao{)xN&Xcg;Y)639]nTw~[y8wd8d1bHl$/JfykQ&=r5kO<QkqTL' );
define( 'NONCE_KEY',        'yZM&07Z15H<j{V9IrP&tTksAsDexWp ~]EmEYU^cs8HGS5.;!uangL#9UJ<l~F!G' );
define( 'AUTH_SALT',        'Va924nVFw!{k!=j~bNCIW*MBNUz PsN`:YR~xun+}p4y&0hLkn>7@VODl n$1`5.' );
define( 'SECURE_AUTH_SALT', '*1u%,TKTD]gKxVD=T@O0&g7R{yo}14]rFGC5I@1+P2a ZmY4c|D~Fg}Psl,(iz76' );
define( 'LOGGED_IN_SALT',   '{mC?ucS#<SAH-HMwROc`x$~D{Fd@V(V>tZeFjW2|{}Wm-TI~GrqapZQf1mq~=Z#j' );
define( 'NONCE_SALT',       'sgYXHic.A8a`oj0MM4E&!:$vJ_nM2YgJ&<<`,dWt{FE8cNE3]HiwwNrw!8m8<7cI' );

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
