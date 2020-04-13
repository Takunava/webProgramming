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
$infoAboutUser;
if($result)
{
    while ($row = mysqli_fetch_row($result)) {
        if($username == $row[3] && $password == $row[5]){
            $userIsExist = true;
            setcookie("userName", $row[2]);
            setcookie("userLastName", $row[1]);
            setcookie("userMail", $row[4]);
            setcookie("userNickname", $row[3]);
        }
    }
    mysqli_free_result($result);
}

if($userIsExist){
    echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/userPage.php">';
} else{

    echo '<META http-equiv="refresh" content="0.2;URL=http://lab1/errorPage.html">';

}

?>



