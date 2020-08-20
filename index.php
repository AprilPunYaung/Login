<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == 'mgmg@gmail.com' && $password == 123)
        {
            $_SESSION['auth'] = true;
            header('Location: home.php');
        }else{
            $_SESSION['auth'] = false;
            echo 'Fail';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Email</label>
        <input type="email" name="email" id="">
        <label>Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="login">
    </form>
</body>
</html>