<?php
session_start();

include('database.php');

if(!isset($_SESSION['id'])) {
    // Ha a felhasználó nincs bejelentkezve, akkor a login.php-ra irányítsd át
    header("Location: login.php");
    exit;
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Az űrlapból elküldött adatok beolvasása
    $cim = $_POST['cim'];
    $tartalom = $_POST['tartalom'];
    $kategoria = $_POST['kategoria'];
    $szerzo = $_SESSION['id']; 

    $query = "INSERT INTO hirek (cim, tartalom, kategoria, szerzo) VALUES ('$cim', '$tartalom', '$kategoria', '$szerzo')";

    $connection = connect();
    if(mysqli_query($connection, $query)) {
        $_SESSION['message'] = "Sikeres létrehozás!";
        header("Location: index2.php");
        exit;
    } else {
        die("Hiba az adatbázis lekérdezésben: " . mysqli_error($connection));
    }
    mysqli_close($connection);
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hír létrehozása</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form action="createArticle.php" method="post" class="shadow w-450 p-3">

        <div class="mb-3">
		    <label class="form-label" for="cim">Cím</label>
		    <input type="text" class="form-control" name="username" id="cim" name="cim" required>
		</div>

        <div class="mb-3">
		    <label class="form-label" for="tartalom">Tartalom</label>
		    <textarea id="tartalom" name="tartalom" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>

        <div class="mb-3">
            <label class="form-label" for="kategoria">Kategória:</label>
                <select id="kategoria" name="kategoria" required>
                    <option value="Sport">Sport</option>
                    <option value="Kultúra">Kultúra</option>
                    <option value="Technológia">Technológia</option>
                </select>
        </div>

        <input type="submit" value="Hír hozzáadása">
    </form>
</div>
    
</body>
</html>
