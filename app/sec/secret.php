<?php
require_once dirname(__FILE__).'/../../config_credit.php';
// tutaj sprawdzam czy logujący się jest adminem
include _ROOT_PATH.'/app/sec/check.php';
if($role=="user"){
    echo " TO NIE JEST STRONA DLA CIEBIE!";}

    else echo 'witaj Panie adminie';
?>


<head>
	<meta charset="utf-8" />
	<title>Kalkulator Kredytowy</title>
 
</head>
<body>

<div>
	<a href="<?php print(_APP_ROOT); ?>/index.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="<?php print(_APP_ROOT); ?>/app/sec/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>


</body>
</html>