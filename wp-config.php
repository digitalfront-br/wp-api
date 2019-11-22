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
define( 'DB_NAME', 'celulas' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'A}9E[k[GG0n}j*b/rEM~0&7=4mRP2S3j?f{gqQmgJ%sSrNz$RfDe0DV.a<8q5+}h' );
define( 'SECURE_AUTH_KEY',  'L0LD,jl]h~T RLT<9JfYmCDglp:;46;NXWRg.e#yWQn<dzR$0{DJpO-cIp+gZD`c' );
define( 'LOGGED_IN_KEY',    '%K),KoGplORuZ+ctFM1L<51!>1}A9h-%[bb+0I+NtXN!w?pchd-2CdxAm]88k@L:' );
define( 'NONCE_KEY',        '(u_&R,7x,~;nv4-y[=vh+&1deYO+<4PJ(Atr0k`XIi z+8VOQ>QoKP2>trPOF`cx' );
define( 'AUTH_SALT',        '.uZ[pMa!NWfrVF;[t8{M*q6zh>JnH.Tp)Csvlx] O3/1aR.f}UogyKf)#fDBvI.}' );
define( 'SECURE_AUTH_SALT', 'R2zgN7xT#*jPp?N2YT6iCx`%xv56[NP~Iqxaj2-P9#KajweN1y=p<$jWRz8qkCN)' );
define( 'LOGGED_IN_SALT',   '7du3J7Y&%XX1|Ik<D/>#(&~;J#-az1>9N]GMbiBl=2c2WGP_}~;tT 5+.z1E/lAn' );
define( 'NONCE_SALT',       'U@ ?WMh&M5dP^{B }aK+iI3A+OV30sdyg<wv}+4x~a9kw.Vo+q#^pyGC*`L+hA]A' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bc_';

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
