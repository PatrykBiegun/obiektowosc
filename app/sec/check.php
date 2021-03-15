<?php
require_once dirname(__FILE__).'/../../config_credit.php';
//zaczynam sesje
session_start();

//pobieram role ktora jest przypisana do konta przy logowaniu
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeżeli nie ma żadnej roli (user/admin) to jest przekierowywany na stronę z logowaniem
if ( empty($role) ){
	include _ROOT_PATH.'/app/sec/login.php';
	
	exit();
}
