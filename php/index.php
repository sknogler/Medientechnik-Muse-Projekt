<?php
session_cache_limiter(15);
session_start();

if (isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == true) {
    echo "<a id='logout' position='relative' height='2vh' width='5vw' margin='2vw' href=\"login.php\">Ausloggen</a>";
} else {
    header("HTTP/1.1 403 Forbidden");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MUSE</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../img/fav.ico">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:600&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="header">
      <h1>MUSE</h1>
      <a id="impressumTitle" href="../html/impressum.html"><h2>Was ist Muse?</h2></a>
    </div>

    <a id="addProject_link" href="../php/add_project.php"><div id="addProject"></div></a>
    <div id="projekt1" class="projects"><a href="../html/projekt1.html"><h3>Projekt1</h3></a></div>
    <div id="projekt2" class="projects"><a href="../html/projekt2.html"><h3>Projekt2</h3></a></div>
    <div id="projekt3" class="projects"><a href="../html/projekt3.html"><h3>Projekt3</h3></a></div>
    <div id="projekt4" class="projects"><a href="../html/projekt4.html"><h3>Projekt4</h3></a></div>
    <div id="projekt5" class="projects"><a href="../html/projekt5.html"><h3>Projekt5</h3></a></div>
    <div id="projekt6" class="projects"><a href="../html/projekt6.html"><h3>Projekt6</h3></a></div>

  </body>
</html>
