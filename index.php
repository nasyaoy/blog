<?php
include 'db.php';
// SQL-запрос для выборки всех фото, отсортированных по ID (новые сначала)
$query = "SELECT * FROM photos ORDER BY id DESC";
// Выполнение запроса
$result = mysqli_query($connection, $query);
// Создание пустого массива для хранения данных
$photos = array();
// Преобразование результата в ассоциативный массив
while ($row = mysqli_fetch_assoc($result)) {
    $photos[] = $row; // Добавление строки в массив
}
// Преобразование массива в JSON и вывод
echo json_encode($photos);
// закрытие соединения
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="admin/add_post.php" class="new_post">
                                <img src="sm_5afbe35fd36cc.jpg" alt="New post" width="25px">
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="admin/login.php" class="log">Войти</a>
                        </li>
                        <li class="nav__item">
                            <input type="text" name="search" placeholder="Найти" class="search">
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <div class="container">
            <div class="posts">
                <ul class="posts__list">
                    <li class="post__item">
                        <h2 class="post__title">FHFGFJ</h2>
                        <p class="post__content">sjhAKSHDAKshdasjkd</p>
                        <a href="post.php">Читать далее</a>
                    </li>
                    <li class="post__item">
                        <h2 class="post__title">asjkdhajkdh</h2>
                        <p class="post__content">sadhiwhqduiwhduoiqswqd</p>
                        <a href="post.php">Читать далее</a>
                    </li>
                    <li class="post__item">
                        <h2 class="post__title">wdqwdqwdqw</h2>
                        <p class="post__content">wdqwfrqwefrgethet</p>
                        <a href="post.php">Читать далее</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>