<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

<?php 
session_start();

if(!isset($_SESSION['id']) || empty($_SESSION['id'])):
    header("Location: login.php");
    exit();
endif;
?>

<nav class="navigacio">
    <?php if(!isset($_SESSION['id']) || empty($_SESSION['id'])): ?>
        <a href="index.php?page=1">Bejelentkezés</a>
        <a href="index.php?page=2">Regisztráció</a>
    <?php else: ?>
        <?php if($_SESSION['permission'] == "admin"): ?>
            <a href="createArticle.php">Cikk létrehozása</a>
        <?php endif; ?>
        <a href="logout.php">Kijelentkezés</a>
    <?php endif; ?>
</nav>

<div class="main">

</div>
</body>
</html>
