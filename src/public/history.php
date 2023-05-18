<?php

$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
    'mysql:host=mysql; dbname=contactform; charset=utf8',
    $dbUserName,
    $dbPassword
);

$sql = 'SELECT * FROM contacts';
$statement = $pdo->prepare($sql);
$statement->execute();
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($contacts) === 0) {
    echo '送信履歴なし';
}

// echo '<pre>';
// var_dump($contacts);
// echo '<pre>';
?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>sample</title>
    </head>
    <body>
        <h2>送信履歴</h2>
    <?php foreach ($contacts as $contact) {

        $title = $contact['title'];
        $content = $contact['content'];
        ?>
    <div class="data-container">
        <h2><?php echo $title; ?></h2>
        <p><?php echo $content; ?></p>
    </div>
    <?php
    } ?>

    <a href="index.php">戻る</a>

    <style>
        .data-container {
            border-bottom : 1px solid black; 
            margin-bottom: 20px;
        }
    </style>
    </body>
</html>