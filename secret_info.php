<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start(); // створюємо нову сесію або відновлюємо поточну
}
if (!isset($_SESSION['authorized'])) // перевіряємо правильність авторизації
{
    header("Location: login.php");
}

// якщо помилка, то перенаправляємо на сторінку авторизації
?>
<html>

<head>
    <title>Secret info</title>
</head>

<body>
    <h1>Secret info</h1>
    <?php
print_r($_SESSION); // виводимо змінні сесії ?>
    <br><a href="index.php">На главную</a>

</body>

</html>