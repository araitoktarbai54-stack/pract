
<?php
session_start();
$user_id = $_SESSION["user_id"] ?? false;
require "vendor/autoload.php";
$bd = new Photos\BD();
$data = $bd->get_all_photos();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php" ?>
    <h2>Галерея</h2>
    <div id="grid">
        <?php foreach($data as $photo): ?>
            <?= (new Photos\Photo($photo["id"], $photo["Фото"], $photo["Текст"]))->get_html() ?>
        <?php endforeach; ?>
    </div>

    <div id="popup_photo">
        <img src="" alt="">
    </div>

    <script src="script.js"></script>
</body>
</html>

