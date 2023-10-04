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
<nav class="navigacio">
    <?php if(!isset($_SESSION['id']) || empty($_SESSION['id'])): ?>
        <a href="index.php?page=1" hidden>Bejelentkezés</a>
        <a href="index.php?page=2" hidden>Regisztráció</a>
    <?php else: ?>
  
        <?php if($_SESSION['permission'] == "admin"): ?>
       
        <?php else: ?>
            
        <?php endif; ?>

        
    <?php endif; ?>
</nav>

<div class="main">

</div>
</body>
</html>
