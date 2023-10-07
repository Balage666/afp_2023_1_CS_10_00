<?php

// Session indítása
session_start();

// Session törlése
session_unset();
session_destroy();

// Átirányítás a login.php oldalra sikeres kijelentkezés üzenettel
header("Location: login.php?msg=Sikeres+kijelentkezés");

exit();

?>
