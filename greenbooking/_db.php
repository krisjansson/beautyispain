<?php

$DB_HOST = "artlike.dk.mysql";
$DB_USER = "artlike_dk_greenbooking";
$DB_PASS = "BjarturVolvoSommer69";
$DB_NAME = "artlike_dk_greenbooking";
$DB_PORT = "3306";

//$DB_HOST = "localhost";
//$DB_USER = "root";
//$DB_PASS = "root";
//$DB_NAME = "daypilot";
//$DB_PORT = "3306";



$db = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT );



if ( $db->connect_error ) {

	die( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );

}

$db->set_charset( 'utf8' );

date_default_timezone_set('Europe/Copenhagen');

?>
