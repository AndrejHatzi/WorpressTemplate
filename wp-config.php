<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');
// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'lunarweb' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F-e4t-}0JpVgNIZx$8/k(V6l&s|KTP*V;[?%c C24s4:nn[g?H<}39iM)*Zbj;Q+' );
define( 'SECURE_AUTH_KEY',  'A oQV6M:IB8c}1LJDYn})f}ewFc2heAH3Tpo%#:XWy}kza~%R!(FgY9OUTan[>)L' );
define( 'LOGGED_IN_KEY',    'fx8[^1&T=?P.8Bx1?Q.6@MMsLo}d(TeIu0+zy1b[Ev/X;1RkfAAivwnUfKSi>Vlf' );
define( 'NONCE_KEY',        '[ow)6n87O WCcnlsLmNCH[7Y1MIJ>x6~et}.NIJ,0`DZq*}q:f9|Tb }&w];evE5' );
define( 'AUTH_SALT',        'FGKW  5?&93j1zdKNbQ$bk<}j>V^ag8(Wc<MiCDzeS@ji]@_Dbh$L)daMkSn*m5h' );
define( 'SECURE_AUTH_SALT', 'zY2T?Y4NR7S~L%_Ba}+@JoYwUfB#3r+p]1@G;O/y#%np@?2CQZ@;CzEs<0ZEz>_X' );
define( 'LOGGED_IN_SALT',   '.Qi@LwD6*g[wMq@(|9n.,:kD@d_zw#luaYU,~F{1Ee$5zKcj.1o?@|M*]V+s]5LL' );
define( 'NONCE_SALT',       'vOQ5?JMnN/E!j.2VH(mQY!Gb*+G}&m(kbr{ANK*|K9)Q[T^RI@t:0 2~ ~z-i<,8' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');

