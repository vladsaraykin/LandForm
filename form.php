<?php
/**
 * Created by PhpStorm.
 * User: vlada
 * Date: 13.11.2018
 * Time: 16:11
 */
include_once "config.php";
header('Content-Type: text/html; charset=utf-8');

$user_name = $_POST['user_name'];
checkValue($user_name, 'name');

$user_email = $_POST['user_email'];
checkValue($user_email, 'user_email');

$msg = $_POST['msg'];
checkValue($msg, 'msg');

$subject = $_POST['subject'];
checkValue($subject, 'subject');

$start_date_time = $_POST['datetime'];
checkValue($start_date_time, 'datetime');

$finish_date_time = date('Y/m/d H:i:s', time());

if(mail($user_email, "Вам пришло письмо с сайта $url",
    "Имя поситителя: $user_name
            \n Предмет: $subject
            \n Сообщение: $msg
            \n Время начала заполнения анкеты: $start_date_time
            \n Время отправки соощения на сервере: $finish_date_time")){
    echo 'Письмо отправлено';
}
// Cоздание подключения к базе данных
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));

//Записываем в БД
$query_insert = 'INSERT INTO messages (user_name, user_email, subject, msg, start_date_time, finish_date_time) VALUES ("' . $user_name . '", "'
    . $user_email . '", "'
    . $subject . '", "'
    . $msg . '", "'
    . $start_date_time .'", "'
    . $finish_date_time
    . '")';

mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link));

///Вывод из БД
//$query_select = 'SELECT * FROM messages';
//$result = mysqli_query($link, $query_select) or die('Ошибка' . mysqli_error($link));
//while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//    echo $row["id"] . ' ' . $row["user_name"] . ' ' . $row["user_email"] . ' ' . $row["subject"] . ' '  . $row["msg"] . ' ' . $row["finish_date_time"] . ' <br />';
//}
mysqli_free_result($result);

// Закрыть подключения к базе данных
mysqli_close($link);

function checkValue($value, $type)
{
    if(!isset($value)){
        echo "Вы не заполнили поле типа $type";
        }
}
