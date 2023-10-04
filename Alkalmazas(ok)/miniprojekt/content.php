<?php
    if(isset($_GET['page']) && !empty($_GET['page'])) {
        switch($_GET['page']) {
            case 1:
                require_once('login.php');
                break;
            case 2:
                require_once('register.php');
                break;
    }
    else {
        header("Location: index.php?page=1");
    }
}
?> 