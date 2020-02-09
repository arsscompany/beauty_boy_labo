<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'weblog_content' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':h[eYp(2}gN,t@0m9ka.{+Oe9PbQ-:qxTU0}]#3T!v.pd0.`A{C8w:wDV[1_?(X5' );
define( 'SECURE_AUTH_KEY',  '2|3;J,Ub.ThYvVD&eL1tmMV0gvvv%dSP`CZ7~8^e!Cl_Y3#Vt-7XT6cm}hEWZ`(I' );
define( 'LOGGED_IN_KEY',    'Je]yC-6b1UTt7Z%P(T;p1I5mB3!M].kuIcU8#3=*5a#5sWh 7]-k^X}O>w6~`)[(' );
define( 'NONCE_KEY',        '/|aGnn!gsy$)6oXkk/r6bGo,4qcO |G;Sq?oVfHo4H<*+QTeof$an!` !m.|5/ir' );
define( 'AUTH_SALT',        '1[fr~YS<L=Z9)nU@}V[-;KmPvZ1aPvbB`YU#tc^UXPPo>nDE4mLy#?TpcA4HuJgC' );
define( 'SECURE_AUTH_SALT', 'HwXZeR*U)JRae>b RX3HLYRAMpw|>&}KZ}mIN+2$>_DXjw7[R4hlKf*Vc1iJiHS]' );
define( 'LOGGED_IN_SALT',   '_~!&YiHN?WtOb%<.Ghe2G?H%ldE{dJi|DIwdpTI =tfK8-X9Ff+@eVdSV4_ld2)Q' );
define( 'NONCE_SALT',       '98(=x)9eq$fNON=MT3#XFB|DS1RG>k)>*fUiI9pd[$5k-WIszqw-4XgTdoSA=^pi' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
