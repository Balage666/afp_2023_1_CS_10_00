<?php
session_start();

if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['permission'] !== 'admin'){
    header("Location: index2.php");
    exit();
}

include 'database.php';
$connection = connect();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $cim = $_POST['cim'];
    $tartalom = $_POST['tartalom'];
    $kategoria = $_POST['kategoria'];

    $updateQuery = "UPDATE hirek SET cim='$cim', tartalom='$tartalom', kategoria='$kategoria' WHERE id=$id";
    if(mysqli_query($connection, $updateQuery)){
        $_SESSION['message'] = "A hír sikeresen módosítva!";
        header("Location: newsManagement.php");
    } else {
        echo "Hiba: " . mysqli_error($connection);
    }
}


$id = $_GET['id'];
$query = "SELECT id, cim, tartalom, kategoria FROM hirek WHERE id=$id";
$result = mysqli_query($connection, $query);
$hir = mysqli_fetch_assoc($result);

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hír Módosítása</title>
    <link rel="stylesheet" href="stiluslap.css">
</head>
<body>
    <h1>Hír Módosítása</h1>
    <form action="modifyNews.php" method="post">
        <input type="hidden" name="id" required value="<?php echo $hir['id']; ?>">
        <label>Cím: </label>
        <input type="text" name="cim" required value="<?php echo $hir['cim']; ?>">
        <br>
        <label>Tartalom: </label>
        <textarea name="tartalom"><?php echo $hir['tartalom']; ?></textarea>
        <br>
        <label for="kategoria">Kategória:</label>
        <select id="kategoria" name="kategoria" required>
            <option value="Sport" <?php echo ($hir['kategoria'] == 'Sport') ? 'selected' : ''; ?>>Sport</option>
            <option value="Kultúra" <?php echo ($hir['kategoria'] == 'Kultúra') ? 'selected' : ''; ?>>Kultúra</option>
            <option value="Technológia" <?php echo ($hir['kategoria'] == 'Technológia') ? 'selected' : ''; ?>>Technológia</option>
        </select>
        <br>
        <input type="submit" value="Módosítás">
    </form>
    <button class="back-button" onclick="window.location.href='newsManagement.php'">Vissza</button>
</body>
</html>
