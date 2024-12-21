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
if (isset($_SESSION['authorized'])) {
    echo "Привіт, " . $_SESSION['login'] . "<br>";
    echo "<a href='secret_info.php'>secret info</a><br>";
    echo "<a href='logout.php'>logout</a>";
} else {
    echo "<a href='login.php'>Вхід</a>";
}
?>

</body>

</html>