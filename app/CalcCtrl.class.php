<?php
require_once $conf->root_path.'/libs/Smarty.class.php';
require_once $conf->root_path.'/app/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
        private $messages;   
	private $form;   
	private $result;

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->messages = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

public function getParams(){
	$this->form->amount =  isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
	$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
	$this->form->percentages = isset($_REQUEST ['percentages']) ? $_REQUEST ['percentages'] : null;
}

public function validate(){
	if ( ! (isset($this->form->amount) && isset($this->form->years) && isset($this->form->percentages))) {
		return false;
	}

if ( $this->form->amount == "") {
	$this->messages->addError('Nie podano kwoty');
}
if ( $this->form->years == "") {
	$this->messages->addError('Nie podano liczby lat');
}
if ( $this->form->percentages == "") {
	$this->messages->addError('Nie podano oprocentowania');
}

if (! $this->messages->isError()) {
	
	// sprawdzenie, czy są liczbami całkowitymi
	if (! is_numeric( $this->form->amount )) {
		$this->messages->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}
	
	if (! is_numeric( $this->form->years )) {
		$this->messages->addError('Druga wartość nie jest liczbą całkowitą');
	}
	
	if (! is_numeric( $this->form->percentages )) {
		$this->messages->addError('Trzecia wartość nie jest liczbą całkowitą');
	}     
}
       

return ! $this->messages->isError();
}

// 3. wykonaj zadanie jeśli wszystko w porządku


public function process(){
	global $role;
	
        $this->getparams();
        if ($this->validate()) {
        
	$this->form->amount = intval($this->form->amount);
	$this->form->years = intval($this->form->years);
	$this->form->percentages = floatval($this->form->percentages);
	$this->messages->addInfo('Parametry poprawne.');
	//wykonanie operacji
	
	$this->result->result = ($this->form->amount/($this->form->years*12)) + ($this->form->amount/($this->form->years*12) * ($this->form->percentages/100));
        
        
        }
      $this->generateView();  
}





public function generateView(){
		global $conf;
		
		$smarty = new Smarty(); 
		$smarty->assign('conf',$conf);
		
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('result',$this->result);
		
		$smarty->display($conf->root_path.'/app/credit_view.tpl');
	}
}
?>

