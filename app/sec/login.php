<?php
require_once dirname(__FILE__).'/../../config_credit.php';

// pobieram parametry 
function getParamsLogin(&$form){
	$form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

// teraz sprawdzam ich pisownie i poprawność jeżeli nie to ładuje odpowienie komunikaty i wyrzucam w wiadomościach 
function validateLogin(&$form,&$messages){
	// tutaj patrzę czy w ogóle są tutaj jakieś wiadomości
	if ( ! (isset($form['login']) && isset($form['pass']))) {
		//zapobiega to wchodzeniu na stronę przez link w przeglądarce
		return false;
	}

	
	if ( $form['login'] == "") {
		$messages [] = 'brak loginu';
	}
	if ( $form['pass'] == "") {
		$messages [] = 'brak hasła';
	}

	//nie ma sensu walidować dalej, gdy brak parametrów
	if (count($messages) > 0) {
        return false;
    }

         // bezpośrednie sprawdzenie, czy dane logowania są poprawne
	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}

//tutaj inicjowanie są role i wiadomości, czyli to co niejako wywołujemy we wcześniejszych kartach
$form = array();
$messages = array();

// tutaj funckja wyzej, bierzemy parametry
getParamsLogin($form);

// i sprawdzamy czy pasują do wymagań aby się zalogować, nie łączymy się z żadną bazą danych ponieważ robimy to bez pośrednio w funkcji
if (!validateLogin($form,$messages)) {
	
	include _ROOT_PATH.'/app/sec/login_view.php';
       
} else { 
	
	
	//tutaj trafiamy na stronę główną
	header("Location: "._APP_URL);
	
	
	
}