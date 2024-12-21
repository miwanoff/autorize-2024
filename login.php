<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

// створюємо нову сесію або відновлюємо поточну
if (!isset($_GET['go']) && !isset($_SESSION['authorized'])) {
    echo "<form action='login.php'>
    Login: <input type='text' name='login'>
    Password: <input type='password' name='passwd'>
    <input type='submit' name='go' value='Go'>
</form>";   
}
if(isset($_GET['err'])){
    echo "Неправильне введення, спробуйте ще раз!<br>";
}
if (isset($_GET['go'])) {
    // if (isset($_SESSION['err']) && ($_SESSION['err'] == 1)) {
    //     echo "Неправильне введення, спробуйте ще раз!<br>";
    // }
//    else {
// реєструємо змінні login та passwd як глобальні змінні для цієї сесії
    if ($_GET['login'] == "pit" && $_GET['passwd'] == "123") {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
        $_SESSION['err'] = 0;
        $_SESSION['authorized'] = 1;
        // header("Location: secret_info.php");
// перенаправляємо на сторінку secret_info.php
        // echo "Привіт" . $_SESSION['login'] . "<br>";
        // echo "<a href='secret_info.php'>secret info</a>";
        // echo "<a href='logout.php'>logout</a>";
    } else {
        $_SESSION['err'] = 1;
        unset($_SESSION['authorized']);
        header("Location: login.php?err={$_SESSION['err']}");

    }
    //   }
}
if (isset($_SESSION['authorized'])) {
    echo "Привіт, " . $_SESSION['login'] . "<br>";
    echo "<a href='secret_info.php'>secret info</a><br>";
    echo "<a href='logout.php'>logout</a>";
}