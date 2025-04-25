
<?php
session_start();

if(!isset($_SESSION['user'])){
  header("Location: login.php");
  exit();
}

// if (condition) {
//   # code...
// }

  ?>
  <!DOCTYPE html>
  <html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel użytkownika</title>
  </head>
  <body>
    <h2>Witaj, <?= htmlspecialchars($_SESSION['user']); ?> !</h2>
    <a href="logut.php">Wyloguj się</a>
  </body>
  </html>