<?php
$connection = mysqli_connect('127.0.0.1:3306', 'root', '', 'bumerstore');
if ($connection == false) {
    echo 'Не удалось подключиться к БД<br>';
    echo mysqli_connect_error();
    exit;
}

session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $date_of_birthday = $_POST['date_of_birthday'];

    if ($password === $password_confirm) {

        /*$path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        } */

        $password = md5($password);

        mysqli_query($connection, "INSERT INTO `users` ( `login`, `password`, `name`, `surname`, `email`,`date_of_birthday`) VALUES ('$login', '$password','$name', '$password', '$email', '$date_of_birthday')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        var_dump($connection);
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
