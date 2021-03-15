<!DOCTYPE HTML>
<head>
	<meta charset="utf-8" />
	<title>Kalkulator Kredytowy</title>
</head>
<body>
    
<div>
<form action="<?php print(_APP_ROOT); ?>/app/sec/login.php" method="post" class="pure-form pure-form-stacked">
    <h3>Logowanie</h3>
	<fieldset>
		<label for="id_login">login:  </label>
		<input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" />
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	

<?php
//wyświetla tutaj wiadomości z błędami, jeżeli takie wystąpiły, ładuje je tutaj jako "klucz"
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
</div>
    
</body>
</html>