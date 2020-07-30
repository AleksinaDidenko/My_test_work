<?php
// Параметры для подключения
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'users'; // Имя БД
$db_table = "users"; // Имя Таблицы БД

//Данные, полученные с формы
$email = trim($_REQUEST['email']);
$user_name = trim($_REQUEST['name']);
$password = trim($_REQUEST['password']);


// Подключение к базе данных
$db_connect = new mysqli($db_host, $db_user, $db_password, $db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if (!$db_connect) {
    echo "Ошибка: Невозможно установить соединение с MySQL.";
    echo "Код ошибки errno: " . mysqli_connect_errno();
    echo "Текст ошибки error: " . mysqli_connect_error();
    exit;
}
//Если ошибки соединения нет, то проверяем условие
//Если установленно значение инпутов, то выполняем запрос на добавление данных в БД
if (isset($email) && isset($user_name) && isset($password)) {

    $new_add_to_DB = $db_connect->query("INSERT INTO " . $db_table . " (`id`, `email`, `user_name`, `pasword`) VALUES ('{$email}', '{$user_name}', '{$password}');");

    if ($new_add_to_DB == true) {
        echo "Информация занесена в базу данных";
    } else {
        echo "Информация не занесена в базу данных";
    }
}
