<?php
require 'functions.php';

session_start();
if (!empty($_SESSION['user'])){
    header('Location: main.php');
}

$error = '';
if (!empty($_POST['username'])
    && !empty($_POST['password'])
    && !empty($_POST['repeat_password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeat_password'];
    if (register($username, $password, $repeatPassword)){
        header('Location: auth_form.php');
    } else {
        $error = 'Ошибка при регистрации';
    }
}
?>

<form method="post">
    <label> имя </label>
    <input type="text" name="username">
    <br>
    <label> пароль </label>
    <input type="password" name="password">
    <br>
    <label> повторение пароля </label>
    <input type="password" name="repeat_password">
    <br>
    <div style="color: crimson"><?=$error?></div>
    <input type="submit">
</form>
<a href="auth_form.php">Авторизация</a>