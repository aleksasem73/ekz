<?php 
include_once 'setting.php';
$CONNECT = mysqli_connect(HOST, USER, PASS, DB);
//if ($_POST['enter'] and $_POST['text']) {
//$_POST['text'] = FormChars($_POST['text']);
//mysqli_query($CONNECT, "INSERT INTO `chat`  VALUES ('', '$_POST[text]', '$_SESSION[USER_LOGIN]', NOW())");
//exit(header('location: /chat'));
//}
?>


<!DOCTYPE html>
	  <html>
	  <head>
	  	<meta charset="utf-8" />
	  	<title>Ekz</title>
	  	<meta name="keywords" content="" />
	  	<meta name="description" content="" />
	  	<link href="style.css" rel="stylesheet">
	  </head>

<body>



<?php 
//if ($_POST['enter'] and $_POST['phone']) {


	//$Query = mysqli_query($CONNECT, 'SELECT * FROM `Sub` where `phone` = '$_POST[phone]'');
	//while ($Row = mysqli_fetch_assoc($Query)) echo '<div class="ChatBlock"><span>'.$Row['id'].'</span></div>';
	//mysqli_query($CONNECT, "UPDATE `log`  SET `paid` = 1 WHERE `id` = '$_POST[text]'");
	//mysqli_query($CONNECT, "INSERT INTO `log`  VALUES ('', '$_POST[text]', '$_SESSION[USER_LOGIN]', NOW())");

//}
?>

Заплатил:
<form method="POST">
<textarea class="ChatMessage" name="phone" placeholder="Телефон" required></textarea>
<br><input type="submit" name="enter" value="Оплатил"> 
</form>

<div class="ChatBox">
	Должники:


<form method="POST">
<p>Выберите дату: <input type="date" name="calendar">
<br><input type="submit" name="pokaz" value="Показать">
</form>
<?php
//if ($_POST['pokaz'] and $_POST['calendar']) {
$Query = mysqli_query($CONNECT, 'SELECT `log`.`date`, `Sub`.`name`, `Rate`.`title` FROM `log`,`Sub`,`Rate` 
	where `log`.`id_sub` = `Sub`.`id` AND `log`.`id_rate` = `Rate`.`id`  AND `log`.`paid` = 0');
while ($Row = mysqli_fetch_assoc($Query)) echo '<div class="ChatBlock"><span>'.$Row['date'].' | '.$Row['name'].' | '.$Row['title'].'</span></div>';
//}

//AND  '$_POST[calendar]' = `log`.`date`

?>
</div>
</body>
</html>