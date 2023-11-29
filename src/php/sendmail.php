<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/Exception.php";
    

    $mail = new PHPMailer(true); /* Создаем объект MAIL */
    $mail->CharSet = "UTF-8"; /* Задаем кодировку UTF-8 */
    /* Разрешаем работу с HTML */

    $name = $_POST["name"]; /* Принимаем имя пользователя с формы .. */
    $email = $_POST["email"]; /* Почту */
    $phone = $_POST["phone"]; /* Телефон */
    $message = $_POST["message"]; /* Сообщение с формы */

    $body = $name . ' ' . $email . ' ' . $phone . ' ' . $message;
    $theme = "[Заявка с формы]";

    $mail->addAddress("constantinent@mail.ru");

    $mail->Subject = $theme;
    $mail->Body = $body;

    $mail->send();
?>