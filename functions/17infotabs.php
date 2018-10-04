<?php
/*
 * @author Susi Krummenacher
 * @name Hologram SEO
 * @copyright © 2017 susinspired.ch

 * fetch seo tabs info
 */

include 'config.php';
include 'htmlinfo.php';

/* function db( $sql ) {
// Zur Datenbank verbinden
$verbindung = mysqli_connect( DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
// Charset auf UTF-8 einstellen, damit Sonderzeichen korrekt übernommen werden
mysqli_set_charset( $verbindung, DB_CHARSET );
// SQL-Statement an die DB schicken
$res = mysqli_query( $verbindung, $sql );
// Handelt es sich um ein Insert-Statement? Steht an Position 0
// der Text "INSERT INTO" ? Achtung, Typenvergleich mit ===
if ( stripos( $sql, 'INSERT INTO' ) === 0 ) {
// Rückgabewert ist also die zuletzt erzeugte ID
$res = mysqli_insert_id( $verbindung );
}
// Verbindung schliessen
mysqli_close( $verbindung );
// Zeiger zurückliefern
return $res;
}
$sql = "SELECT * FROM infotabs WHERE infotabs.category = 'seomobile'";
$seoinfo = db( $sql );

while ($carddata = mysqli_fetch_assoc ( $seoinfo )) {
//echo $carddata [ 'name' ];
}; */
