<?php

$connection = mysqli_connect('localhost', 'root', '', 'mysql');

if($connection == false){
    echo '$connection = Нет; ';
    exit();
} /*else {
    echo '$connection = Да; ';
}*/


if(!empty($_POST['username'])){
    $username = $_POST['username'];
}
if(!empty($_POST['password'])){
    $password = $_POST['password'];
}

$query ="SELECT * FROM `usertable`";
$result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($connection)); 

$userIsExist = false;
if($result)
{
    while ($row = mysqli_fetch_row($result)) {
        if($username == $row[3] && $password == $row[5])
            $userIsExist = true;
        }
    mysqli_free_result($result);
}

if($userIsExist){
    echo 'успех>';
} else{

    echo 'неправильный логин или пароль';

}




?>