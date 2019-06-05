<?php
session_start();
if ((!isset($_SESSION['nome'])) || isset($_GET['logout'] )) {
    session_destroy();
    unset($_SESSION['nome']);
    header("location: /php/login.html");
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Logado</title>
    </head>
    <body>
        <form action="deslogar.php" method="post">
            <p>
                <input type="submit" value="SAIR" />
            </p>
        </form>
    </body>
</html>