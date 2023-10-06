<?php
include 'database.php';

$connection = connect();
$query = "SELECT cim, tartalom, kategoria FROM hirek";
$result = mysqli_query($connection, $query);

$hirek = [];

while($row = mysqli_fetch_assoc($result)) {
    $hirek[] = $row;
}

echo json_encode($hirek);

mysqli_close($connection);
?>
