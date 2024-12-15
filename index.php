<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

?>
<html>

<head>
    <title>My home page</title>
</head>

<body>

    <h1>My home page</h1>
    <?php
//print_r($_SESSION); // виводимо змінні сесії ?>
    <br><a href="login.php">Вхід</a>
</body>

</html>