<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hírportál</title>
    <link rel="stylesheet" href="stiluslap.css">
</head>
<body>
    <header>
        <h1>Hírportál</h1>
    </header>
    <!-- Integráció: navbar.php -->
    <?php include('navbar.php'); ?>
    <nav>
        <ul>
            <li><a href="#">Főoldal</a></li>
            <li><a href="#" id="osszesHirLink">Összes Hír</a></li>
            <li><a href="#" id="sportLink">Sport</a></li>
            <li><a href="#" id="kulturaLink">Kultúra</a></li>
            <li><a href="#" id="technologiaLink">Technológia</a></li>
        </ul>
    </nav>
    <section>
        <!-- A JavaScript által generált hírek itt jelennek meg -->
    </section>
    <footer>
        <p>&copy; 2023 Hírportál</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
