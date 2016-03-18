<?php
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));

    $message = "Имя: $name  \nНомер: $phone ";

    $to = 'my@sferacar.ru';
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n"; 

    $result = mail($to, "Заказ звонка - с АРГОС : $phone", $message, $headers);
?>

 