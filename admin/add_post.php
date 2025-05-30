<?php
include "../config.php";

if (
    isset($_POST['title']) && !empty($_POST['title']) &&
    isset($_POST['content']) && !empty($_POST['content'])
) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $created_at = date('d-m-Y H:i:s');
    $query = "INSERT INTO `posts`(`title`, `content`, `created_at`) VALUES ('$title','$content','$created_at')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../index.php");
    } else {
        echo mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New post</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <form method="POST" action="add_post.php" class="form">
                <input type="text" id="title" class="field" name="title">
                <textarea id="content" class="field" name="content"></textarea>
                <button type="submit" class="btn">Опубликовать</button>
            </form>
        </div>
    </div>
</body>

</html>