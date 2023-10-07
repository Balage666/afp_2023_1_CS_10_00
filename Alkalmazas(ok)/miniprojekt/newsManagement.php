<?php
// Indítsuk el a session-t
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

// Kapcsolódjunk az adatbázishoz
include 'database.php';
$connection = connect();

// Lekérjük az összes hírt
$query = "SELECT id, cim, tartalom, kategoria FROM hirek";
$result = mysqli_query($connection, $query);

// Zárjuk be az adatbázis kapcsolatot
mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hírek Kezelése</title>
    <link rel="stylesheet" href="stiluslap.css">
</head>
<body>
    <h1>Hírek Kezelése</h1>
    <div>
    <?php if(isset($_SESSION['message'])): ?>
        <p><?php echo $_SESSION['message']; ?></p>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
    <div>
        <?php while($hir = mysqli_fetch_assoc($result)): ?>
            <div class="hir">
                <h2><?php echo $hir['cim']; ?></h2>
                <p><?php echo $hir['tartalom']; ?></p>
                <button onclick="window.location.href='modifyNews.php?id=<?php echo $hir['id']; ?>'">Módosítás</button>
                <button onclick="window.location.href='deleteNews.php?id=<?php echo $hir['id']; ?>'">Törlés</button>
            </div>
        <?php endwhile; ?>
        <button class="back-button" onclick="window.location.href='index2.php'">Vissza</button>
    </div>
</body>
</html>
