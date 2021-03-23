<?php
//Skrypt uruchamiający akcję wykonania obliczeń kalkulatora
// - należy zwrócić uwagę jak znacząco jego rola uległa zmianie
//   po wstawieniu funkcjonalności do klasy kontrolera

require_once dirname(__FILE__).'/../config_credit.php';

//załaduj kontroler
require_once $conf->root_path.'/app/CalcCtrl.class.php';


$ctrl = new CalcCtrl();
$ctrl->process();
