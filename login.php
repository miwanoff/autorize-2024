<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

// створюємо нову сесію або відновлюємо поточну
if (!isset($_GET['go'])) {
    echo "<form action='login.php'>
    Login: <input type='text' name='login'>
    Password: <input type='password' name='passwd'>
    <input type='submit' name='go' value='Go'>
</form>";
} else {
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
// реєструємо змінні login та passwd як глобальні змінні для цієї сесії
    if ($_GET['login'] == "pit" && $_GET['passwd'] == "123") {
        $_SESSION['authorized'] = 1;
        header("Location: secret_info.php");
// перенаправляємо на сторінку secret_info.php
    } else {
        $_SESSION['err'] = 1;
        unset($_SESSION['authorized']);
        header("Location: login.php");
    }
}