<?php
require_once 'db.php';


function register($login, $password, $repeatPassword)
{
    if ($password != $repeatPassword) {
        return false;
    }
    $users = select('SELECT * FROM users WHERE login = :login', ['login' => $login]);
    if (!empty($users)) {
        return false;
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $user_id = insert("INSERT INTO users (login,password) VALUES (:login, :password)", [
        'login' => $login,
        'password' => $hash,
    ]);
    return !empty($user_id);
}

function login($login, $password)
{
    $user = select('SELECT * FROM users WHERE login = :login', ['login' => $login]);
    if (!empty($user)) {
        return [
            'result' => password_verify($password, $user[0]['password']),
            'user' => $user[0]
        ];
    }
    return [
        'result' => false,
        'user' => null
    ];
}

function createTopic($topicTitle, $message, $userId)
{
    $topic_id = insert("INSERT INTO topics (title) VALUES (:title)", [
        'title' => $topicTitle,
    ]);
    $message_id = insert("INSERT INTO messages (text, user_id, topic_id)
                            VALUES (:text, :user_id, :topic_id)",
        [
            'text' => $message,
            'user_id' => $userId,
            'topic_id' => $topic_id,
        ]
    );
    return isset($message_id);
}

function createMessage($message, $userId, $topicId)
{
    $message_id = insert("INSERT INTO messages (text, user_id, topic_id)
                            VALUES (:text, :user_id, :topic_id)",
        [
            'text' => $message,
            'user_id' => $userId,
            'topic_id' => $topicId,
        ]
    );
    return isset($message_id);
}