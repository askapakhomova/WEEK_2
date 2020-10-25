<?php
/*
 Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
id - уникальный идентификатор, равен номеру эл-та в массиве
name - случайное имя из 5-ти возможных (сами придумайте каких)
age - случайное число от 18 до 45
*/
$names = ['Anna', 'Vasya', 'Petya', 'Jane', 'Robert'];

function task1(array $array_of_users_names, $number_of_users)
{
    $names = $array_of_users_names;
    for ($i = 0; $i < $number_of_users; $i++) {
        $rand_names = $names[array_rand($names, 1)];
        $rand_ages = rand(18, 45);
        $users[$i] = [
            'id' => $i,
            'name' => $rand_names,
            'age' => $rand_ages
        ];
    }
    echo '<pre>';
    print_r($users);
    return $users;

}

function task2(array $array_of_users_names, array $array_of_users)
{
    for ($i = 0; $i < sizeof($array_of_users_names); $i++) {
        $count_of_names[$array_of_users_names[$i]] = array_count_values(array_column($array_of_users, 'name'))[$array_of_users_names[$i]];
        if ($count_of_names[$array_of_users_names[$i]] == false) {
            $count_of_names[$array_of_users_names[$i]] = 0;
        }
    }
    echo "<pre>" . "Количество пользователей с каждым именем в массиве:" . "</pre>";
    print_r($count_of_names);
    return $count_of_names;
}


function task3(array $array_of_users)
{
    $average_age_of_users = 0;
    $array_of_users_age = array_column($array_of_users, 'age');
    foreach ($array_of_users_age as $value_age) {
        $average_age_of_users += $value_age;
    }
    echo "<br>" . "Cредний возраст пользователей: ";
    return floor($average_age_of_users / sizeof($array_of_users_age));
}