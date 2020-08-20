<?php
    session_start();
    if($_SESSION['auth']!=  true)
    {
        header('Location: index.php');
        die();
    }
?>


<h3>Home Page</h3>
<a href="logout.php">Logout</a>