<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'usr_p570885_2' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'p570885d1' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define( 'DB_PASSWORD', 'C40#.wjooamzpt' );

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define( 'DB_HOST', 'db1380.mydbserver.com' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H)sa;/8imYYDv.DlS#R^@s$y3Rf|u?+ZhXyx|<Y?}yPd^4>G tCpN90[70590|$W' );
define( 'SECURE_AUTH_KEY',  ':G+qgN7aq4Sei#wt)+Xzh,5(H-ar83Z1DoQmRTv<C4n{v#rq:PE^@2>1uz?BbQSv' );
define( 'LOGGED_IN_KEY',    'Y:O%bo~=^F/S`*z/IwNK3YcHhTHtA-1VC18|W98)[YLLO|d?O#ys210*9o=Hn8vt' );
define( 'NONCE_KEY',        'Y{0p$_3bR7G+AJ%h.P%+3`qa 6SF6oTz{q:[jKp4NmUOgam={!f1/W$>8m8)4j&D' );
define( 'AUTH_SALT',        'KL^+`+xWu@@,QoCAW:2k(gj<d[eqP?1x0H34A<pe&0PN4e)i.C0FJ_q(Ii3L~r7m' );
define( 'SECURE_AUTH_SALT', 'uOT9Nr~^l2ht35J#Xyq!(Pq(d,}n{(}uVsATj-CDn*Whzv:WZ:K([YwO<FA3fbT[' );
define( 'LOGGED_IN_SALT',   'x+A5?:<5T$%4g!C2}Gva>Yh2b^snEy[o[(m@j50I=7r0VKG[^yIbiwv|QXtD_70|' );
define( 'NONCE_SALT',       '*@60]R==L4&B7$7vMGA^+?`<M*_{Ug1B$meX*)^>AWiPE5lQ)hY0M;M>ohdmA;*C' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'charlotte_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
