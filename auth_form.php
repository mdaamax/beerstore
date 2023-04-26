<?php
require 'functions.php';
$errorMessage = '';

session_start();
if (!empty($_SESSION['user'])){
    header('Location: main.php');
}

if (!empty($_POST['username'])
    && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = login($username, $password);
    if ($result['result']){
        $_SESSION['user']['username'] = $username;
        $_SESSION['user']['id'] = $result['user']['id'];
        header('Location: main.php');
    } else {
        $errorMessage = 'Неправильный логин или пароль';
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
    <input type="submit">
    <div>
        <b style="color: crimson">
            <?=$errorMessage?>
        </b>
    </div>
</form>
<a href="register_form.php">Регистрация</a>