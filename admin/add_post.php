<?php 
include "../config.php";

if(
    isset($_POST['title']) && !empty($_POST['title']) &&
    isset($_POST['content']) && !empty($_POST['content'])
);

$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$created_at = date('d-m-Y H:i:s');

$query = "INSERT INTO `posts`(`title`, `content`, `created_at`) VALUES ('$title','$content','[value-4]')";
$result = mysqli_query($conn, $query);

if($result){
    header("Location: index.php");
} else {
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New post</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <form action="admin/add_post.php" method="post">
                <input type="text" id="title">
                <textarea name="Что нового?" id="content"></textarea>
            </form>
        </div>
    </div>
</body>
</html>