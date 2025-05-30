<?php
session_start();

if ($_SESSION["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "123") {
        $_SESSION["admin"] == true;
        header("Location: add_post.php");
        exit;
    } else {
        echo "Неверный логин или пароль";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form method="POST" action="admin/login.php">
        <input type="text" name="username" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit" class="btn">Войти</button>
    </form>
</body>

</html>