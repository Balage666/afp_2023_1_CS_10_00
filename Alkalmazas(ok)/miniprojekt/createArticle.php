<?php
session_start();

include('database.php');

// Ellenőrzés, hogy a felhasználó be van-e jelentkezve és admin-e
if(!isset($_SESSION['id']) || $_SESSION['permission'] !== 'admin') {
    die("Hozzáférés megtagadva!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Az űrlapból elküldött adatok beolvasása
    $cim = $_POST['cim'];
    $tartalom = $_POST['tartalom'];
    $kategoria = $_POST['kategoria'];
    $szerzo = $_SESSION['id'];  // Feltéve, hogy már bejelentkeztél és elmentetted az id-t a session-be

    $query = "INSERT INTO hirek (cim, tartalom, kategoria, szerzo) VALUES ('$cim', '$tartalom', '$kategoria', '$szerzo')";

    $connection = connect();
    mysqli_query($connection, $query) or die("Hiba az adatbázis lekérdezésben: " . mysqli_error($connection));
    mysqli_close($connection);

    // Visszairányítás a főoldalra, vagy egy "Sikeres hozzáadás" üzenet megjelenítése
    header("Location: index2.php");
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hír létrehozása</title>
</head>
<body>
    <form action="createArticle.php" method="post">
        <label for="cim">Cím:</label>
        <input type="text" id="cim" name="cim" required>
        <br>

        <label for="tartalom">Tartalom:</label>
        <textarea id="tartalom" name="tartalom" required></textarea>
        <br>

        <label for="kategoria">Kategória:</label>
        <select id="kategoria" name="kategoria" required>
            <option value="Sport">Sport</option>
            <option value="Kultúra">Kultúra</option>
            <option value="Technológia">Technológia</option>
            <!-- További kategóriák hozzáadhatók ide -->
        </select>
        <br>

        <input type="submit" value="Hír hozzáadása">
    </form>
</body>
</html>
