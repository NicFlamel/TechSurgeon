<?php
session_start();
define('DIRECT', TRUE);

require_once('/assets/functions.php');

$_SERVER['REMOTE_ADDR'] = getRealIpAddr();
$user                   = new user;

?>