<?php
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
	$message = htmlspecialchars(trim($_POST['message']));

    $message = "Имя: $name  \nНомер: $email  \nСообщения: $message";

    $to = 'argosdm@yandex.ru';
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n"; 

    $result = mail($to, "Заказ звонка - с АРГОС : $phone", $message, $headers);
?>