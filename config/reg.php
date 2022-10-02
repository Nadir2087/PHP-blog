<?php
// require_once 'conect.php';

$connect = mysqli_connect('localhost', 'root', '', 'PHP-blog');

$goods = mysqli_query($connect, "SELECT * FROM `admin`");
$goods = mysqli_fetch_assoc($goods);
// var_dump($goods);


// print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];


if($email == $goods['email'] && $password == $goods['password']){
    header("Location:/");
}else{
    echo 'Вы неправельно ввели почту или пороль!';
    header("Location:/reg.html");

}