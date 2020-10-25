<?php
include "../scr/functions.php";



$users = task1($names, 3);

file_put_contents('users.json', json_encode($users));

$json_data = file_get_contents('users.json');
$decode_json_data = json_decode($json_data,1);

task2($names, $users);

 print_r(task3($users));



//echo $json_decoder = task5($users);
//echo '</pre>';
//echo '<pre>';
//print_r(task6($json_decoder));





