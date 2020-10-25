<?php
/*  $user = $mysql->query("UPDATE user SET user_order = user_order+1;");
} */


/*
Спасибо, ваш заказ будет доставлен по адресу: “тут адрес клиента”
Номер вашего заказа: #ID
Это ваш n-й заказ!*/

try {
    $pdo = new PDO("mysql:host=localhost;dbname=users",'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
    die;
}
$id = $_GET['id'] ?? 0;
$street = $_GET['street'] ?? '';
$home = $_GET['home'] ?? 0;
$part = $_GET['part'] ?? '';
$appt = $_GET['appt'] ?? 0;
$floor = $_GET['floor'] ?? 0;
$email = $_GET['email'] ?? '';


if ($email) {
    $email_user = $pdo->query("SELECT email FROM users WHERE email = '$email'");
    $user = $email_user->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>' . print_r($user, 1) . '</pre>';
    $order = $pdo->query("UPDATE users SET order_user = order_user + 1");
    $order = $pdo->query("SELECT order_user FROM user");
    $userq = $order->fetch();
    echo print_r($userq);


    $messege = $pdo->query("SELECT street, home, part, appt, floor FROM user WHERE email = '$email'");
    $data = [];
    while ($element = $messege->fetch()) {
        $data[] = $element;
    }
    echo 'result: <pre>' . print_r($data,1) . '</pre>';
}


