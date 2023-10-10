<?php
session_start();

if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

include 'database.php';
$connection = connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $article_id = $_POST['article_id'];
    $user_id = $_SESSION['id'];
    $comment_text = $_POST['comment_text'];

    $query = "INSERT INTO comments (article_id, user_id, comment_text) VALUES (?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("iis", $article_id, $user_id, $comment_text);

    if ($stmt->execute()) {
        $_SESSION['message'] = "A komment sikeresen hozzáadva!";
    } else {
        $_SESSION['message'] = "Hiba történt a komment hozzáadása közben!";
    }

    $stmt->close();
}

mysqli_close($connection);
header("Location: article.php?id=$article_id");
exit();
?>
