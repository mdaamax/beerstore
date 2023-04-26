<?php
require 'functions.php';

session_start();
if (empty($_SESSION['user'])){
    header('Location: auth_form.php');
}

$error = '';
if (!empty($_POST['title'])
    && !empty($_POST['textMessage'])) {
    $title = $_POST['title'];
    $textMessage = $_POST['textMessage'];
    if (createTopic($title, $textMessage, $_SESSION['user']['id'])){
        header('Location: main.php');
    } else {
        $error = 'Ошибка при создании темы';
    }
}
?>

<form method="post">
    <label> Заголовок темы </label>
    <input type="text" name="title">
    <br>
    <label> Описание: </label>
    <textarea name="textMessage"></textarea>
    <br>
    <input type="submit">
</form>
