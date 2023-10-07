<?php
session_start();

// Ellenőrizzük, hogy be van-e jelentkezve a felhasználó
if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
    header("Location: login.php");
    exit();
}

// Ha a felhasználó be van jelentkezve, de nem admin jogosultsága van
if($_SESSION['permission'] !== 'admin'){
    header("Location: index2.php");
    exit();
}

// Ellenőrizzük, hogy az 'id' paraméter meg van-e adva
if(!isset($_GET['id']) || empty($_GET['id'])){
    header("Location: newsManagement.php");
    exit();
}

$hirId = $_GET['id'];

// Kapcsolódjunk az adatbázishoz
include 'database.php';
$connection = connect();

$query = "DELETE FROM hirek WHERE id = $hirId";

if(mysqli_query($connection, $query)) {
    $_SESSION['message'] = "A hír sikeresen törölve!";
} else {
    $_SESSION['message'] = "Hiba történt a hír törlése közben!";
}

mysqli_close($connection);

header("Location: newsManagement.php");
exit();
?>
