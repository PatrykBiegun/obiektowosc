<?php
require_once dirname(__FILE__).'/../config_credit.php';


require_once _ROOT_PATH.'/libs/Smarty.class.php';
//biorę parametry do obliczania

function getParams(&$form){
	$form['amount'] = isset($_REQUEST ['amount']) ? $_REQUEST['amount'] : null;
	$form['years'] = isset($_REQUEST ['years']) ? $_REQUEST['years'] : null;
	$form['percentages'] = isset($_REQUEST ['percentages']) ? $_REQUEST['percentages'] : null;
}


// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku


function validate(&$form,&$messages){
	if ( ! (isset($form['amount']) && isset($form['years']) && isset($form['percentages']))) {
		return false;
	}

	
	

if ( $form['amount'] == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $form['years'] == "") {
	$messages [] = 'Nie podano liczby lat';
}
if ( $form['percentages'] == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (count( $messages ) != 0) return false; 
	
	// sprawdzenie, czy są liczbami całkowitymi
	if (! is_numeric( $form['amount'] )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $form['years'] )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $form['years'] )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
	
	if (count($messages) != 0) {
		return false;
	}else{
		return true;
	}


}

// 3. wykonaj zadanie jeśli wszystko w porządku


function process(&$form,&$messages,&$result){
	global $role;
	
	$form['amount'] = intval($form['amount']);
	$form['years'] = intval($form['years']);
	$form['percentages'] = floatval($form['percentages']);
	
	//wykonanie operacji
	
	$result = ($form['amount']/($form['years']*12)) + ($form['amount']/($form['years']*12) * ($form['percentages']/100));
	
}

$form = null;
$result = null;
$messages = array();


getParams($form);
if(validate($form,$messages)){
	process($form,$messages,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);


$smarty->display(_ROOT_PATH.'/app/credit_view.tpl');


