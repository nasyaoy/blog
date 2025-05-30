<?php
include 'config.php';

// Запрос на выборку данных из ДБ
// ORDER BY - сортировка по указанному полю
// ASC - сортировка по возрастанию (по умолчанию)
$query = "SELECT * FROM posts ORDER BY created_at ASC";
 
// mysqli_query($conn, $query) - при успешном выполнении запроса SELECT получим ссылку 
$result = mysqli_query($conn, $query);


// mysqli_fetch_assoc() - Выбирает одну строку данных из набора результатов и возвращает её в виде ассоциативного массива
// при каждом вызове этой функции - будет возвращать следующую строкув наборе результатов или null, если сторок больше нет
$posts = [];
while($row = mysqli_fetch_assoc($result)) {
    // Добавление каждой выбранной задачи в массив tasks
    $posts[] = $row;
}
// Преобразование массива в формат json и вывод на экран
echo json_encode($posts);
// Закрыть соединение с БД
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="nav">
                <ul class="nav__list">
                    <li class="nav__item"></li>
                    <li class="nav__item"></li>
                </ul>
            </div>
        </header>
        <div class="posts">
                <ul class="posts__list">
                    <li class="post__item">
                        <h2 class="post__title"></h2>
                        <p class="post__content"></p>
                        <a href="post.php">Читать далее</a>
                    </li>
                    <li class="post__item">
                        <h2 class="post__title"></h2>
                        <p class="post__content"></p>
                        <a href="post.php">Читать далее</a>
                    </li>
                    <li class="post__item">
                        <h2 class="post__title"></h2>
                        <p class="post__content"></p>
                        <a href="post.php">Читать далее</a>
                    </li>
                </ul>
            </div>
    </div>
    <script src="script.js"></script>
</body>

</html>