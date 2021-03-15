

<html lang = pl xml:lang = pl>
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytowy</title>
</head>
<b>
    <?php
  
   // zaczynamy od sprawdzenia czy sesja się rozpoczęła ( sama sesja to chociażby zapisywanie danych w ciasteczkach) 
    include _ROOT_PATH.'/app/sec/check.php';
   // wypisanie roli
    echo 'jesteś zalogowany jako  ';
     echo $role; 
?>
</b>



<form action = "<?php print(_APP_URL); ?> /app/calc_credit.php" method="get">
    <label for = "id_x"> Wysokość Kredytu: </label> <br>
    <input id = "id_x" type = "text" name = "x" value = "<?php if (isset($x)) print($x); ?>" /> <br> <br>
    <label for = "id_y"> Procent: </label> <br>
    <input id = "id_y" type = "text" name = "y" value = "<?php if (isset($y)) print($y); ?>" /> <br> <br>
    <label for = "id_z"> Czas: </label> <br>
    <input id = "id_z" type = "text" name = z value = "<?php if (isset($z)) print($z); ?>" /> <br> <br>
    <input type = "submit" value = "Oblicz" />
    
</form>

<?php
if (isset($messages)) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:400px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #8f8; width:400px;">
<?php echo 'Miesięczna rata: '.$result; ?>
</div>
<?php } ?>
<button><a href="<?php print(_APP_ROOT); ?>/app/sec/logout.php" class="pure-button pure-button-active">Wyloguj</a></button>


  <button><a href="<?php print(_APP_ROOT); ?>/app/sec/secret.php" class="pure-button pure-button-active">pokoj</a></button>  


</html>