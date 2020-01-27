<?php
session_start();
//Username = user
//psswd = geheim

if (isset($_POST['user_name']) && $_POST['user_name'] != ""
    && isset($_POST['user_password'])) {

    if ($_POST['user_name'] == "user"
        && md5($_POST['user_password']) == "e8636ea013e682faf61f56ce1cb1ab5c") {
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['eingeloggt'] = true;
    } else {
        $_SESSION['eingeloggt'] = false;
    }
}

if (isset($_POST['logout'])){
    session_destroy();
    $_SESSION = array();
}

if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == true) {
    echo "<h1>Hallo " . $_SESSION['user_name'] . "</h1>";
    echo '<form name="" action="" method="POST" enctype="text/html">';
    echo '<p><input type="Submit" name="logout" value="Ausloggen" />';
    echo '</form>';
    echo "<a href=\"index.php\">Zu meiner Muse Seite</a><br><br>";
} else {

    echo '<div class="loginForm">';
    echo "<h3>Bitte loggen Sie sich ein</h3>";
    echo '<form name="" class="login" action="" method="POST" enctype="text/html">';
    echo '<p>Benutzername:<br />';
    echo '<input type="text" name="user_name" value="" size="20" maxlength="50" />';
    echo '<p>Kennwort:<br />';
    echo '<input type="password" name="user_password" value="" size="20" maxlength="50" />';
    echo '<p><input type="Submit" name="login" value="Einloggen" />';
    echo '</form>';
    echo "</div>";

}

?>


<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/fav.ico">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:600&display=swap" rel="stylesheet">
    <title>LOGIN TO MUSE</title>
  </head>
  <body>

  </body>
</html>
