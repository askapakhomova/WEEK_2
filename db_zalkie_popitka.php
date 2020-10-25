<?php
$host = '127.0.0.1';
$mysql = new mysqli($host, 'root','root', 'users', '8889');
if (mysqli_connect_errno()) {
    echo 'Connection error:' . mysqli_connect_error() .'#'. mysqli_connect_error();
    die;
}

$result = $mysql->query("SELECT * FROM user ORDER BY id DESC");
$data = [];
while ($element = $result->fetch_assoc()) {
    $data[] = $element;
}
////$data = $result->fetch_all();
echo 'affected rows:' . $mysql->affected_rows . '<br>';
echo 'result: <pre>' . print_r($data,1) . '</pre>';

$password = md5('wueururu');
$result = $mysql->query("INSERT INTO user (user_name, user_email, user_password) VALUES ('Olga', 'olga@mail.ru', '$password');");
echo 'last insert ID:' . $mysql->insert_id . '<br>';

