<?php
    session_start();
error_reporting(0);
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">

        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">

        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

        <label>Имя</label>
        <input type="text" name="name" placeholder="Введите свое полное имя">

        <label>Фамилия</label>
        <input type="text" name="surname" placeholder="Введите свою фамлию">

        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">

        <label>Дата рождения</label>
        <input type="date_of_birthday" name="date_of_birthday" placeholder="Введите дату рождения">



        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>