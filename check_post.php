<?php

print_r($_POST);
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

// echo "<br>";
// echo $name . "<br>";
// echo $email . "<br>";
// echo $password . "<br>";
// echo $message . "<br>";

if (trim($name) == '') {
    echo "Ви не ввели імʼя!";
} else if (strlen(trim($name)) <= 1) {
    echo "Таких імен не буває!";
} else if (trim($email) == '' || trim($password) == '' || trim($message) == '') {
    echo "Введіть усі дані";
} else {
    // $_POST['password'] = sha1($password);
    // echo "
    // <h1>Усі дані</h1>";
    // foreach ($_POST as $key => $value) {
    //     echo "<p>$value</p>";
    // }
    header('Location: about.php');
    exit;

}