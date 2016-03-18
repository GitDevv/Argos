<?php
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
	$text = htmlspecialchars(trim($_POST['text']));

    $message = "Имя: $name  \nНомер: $phone  \nСообщения: $text";

    $to = 'my@sferacar.ru';
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n"; 

    $result = mail($to, "Заказ звонка - с АРГОС : $phone", $message, $headers);
?>

 
 