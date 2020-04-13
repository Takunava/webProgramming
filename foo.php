<?php
include 'functions.php';

$capcha = $_POST['g-recaptcha-response'];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$params = array(
    'secret' => '6LfrYOAUAAAAAJbkQXYz1sKLgGJEUFbgnD7R35Cg', 
    'response' => $capcha,
);
$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($params)
    )
)));

echo $result;

if($result[0] == 'true'){
  
    $connection = mysqli_connect('localhost', 'root', '', 'mysql');

if($connection == false){
    echo '$connection = Нет; ';
    exit();
} /*else {
    echo '$connection = Да; ';
}*/
if(!empty($_POST['firstname'])){
    $firstname = $_POST['firstname'];
} else echo 'error';
    
if(!empty($_POST['lastname'])){
    $lastname = $_POST['lastname'];
}
if(!empty($_POST['username'])){
    $username = $_POST['username'];
}
if(!empty($_POST['email'])){
    $email = $_POST['email'];
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
        if($username == $row[3] || $email == $row[4])
            $userIsExist = true;
        }
    mysqli_free_result($result);
}

if($userIsExist){
    echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/existUser.php">';
} else{

    $sql = "INSERT INTO `usertable`(`firstName`, `lastName`, `userName` , `email`, `password`) VALUES ('$firstname','$lastname', '$username', '$email', '$password')";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        print("Произошла ошибка при выполнении запроса");
    }
    echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/thanks.php">';

}
}else {
   
}

/*
-- Необходимо сделать форму для уже существующего пользователя в системе(тип выдавать что пользователь уже имеентся в системе и предложиться авторизоваться)
-- страничку пользоваетля
-- капчу прикрутить 
-- придумать где заюзать аякс
-- страничку гостя 

*/
?>