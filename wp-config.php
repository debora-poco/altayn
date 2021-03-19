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

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'movatoo' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', 'root' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'ow*N//P?/DWF1P$0TQ017Y& .0oZjF5J_UPYBNEv4+dz/r67%UqH =qg6M7S~f.(' );
define( 'SECURE_AUTH_KEY', '.|Ca_KR+9V_]I&EjYZQt$#_7Oa6`.|m^5f3J(-Q>SPq:=Co`HF1hJ_>JFAn8d6dY' );
define( 'LOGGED_IN_KEY', 'NUE6~+8%_U{l(MbP0?Q4$*_8!^Td>QTT:*}b0CE(09yr=;zZWKFrVp60F[zUBL.1' );
define( 'NONCE_KEY', ')m(U#9+0n38-U~9ZZ{1h.V*W#Qz3ZZMwGtqXI`=WH#O96SFcOOnJX}0:2YLH=c9J' );
define( 'AUTH_SALT', '{5]:$tiz[0*q#5{zx{]lM9<PURuPbOVE$S?s-0VXl)&Gs_l`_4nQuW,w[!`uQ;{G' );
define( 'SECURE_AUTH_SALT', '@tDsapW*?%$w>ZsKn8k?f1V{-iQOazz*821|p%};}5u~P><m.?EE)+rC:;ViFs4:' );
define( 'LOGGED_IN_SALT', 'yb14a)SK0j*^C-`e?_W@F!xIhl]9R.+?Xh_YE2XXZCDcEcvO{SH>VhJq[9]BqX+f' );
define( 'NONCE_SALT', 's#)2efd7^Iws)vd6tu;Hz|_<782)NF{6db@,~IFC&38o~Ln}NeoO)(a q<TICWv8' );

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
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
