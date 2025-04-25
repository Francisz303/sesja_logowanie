
<?php
  session_start();


  if(isset($_SESSION['user'])){
    header("Location: dashboard.php");
    exit();
  }


  $error = null;
  $username = 'admin';
  $password = '123';



  if($_SERVER['REQUEST_METHOD']== 'POST'){
    if($_POST['username'] == $username && $_POST['password'] == $password){
      $_SESSION['user'] = $username;
      header("Location: dashboard.php");
      exit();

    }
    else{
      $error = 'Nieprawidłowe dane logowania';
    }
  }

  ?>
  <!DOCTYPE html>
  <html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
  </head>
  <body>
    <h2>Zaloguj się</h2>
    <?php if($error): ?>
    <p style="color:red"><?= htmlspecialchars($error) ?></p>
    <?php endif;?>
    <form action="login.php" method="post">
      <label>Login: <input type="text" name="username" required></label><br><br>
      <label>Hasło: <input type="password" name="password" required></label><br><br>
      <button type="submit">Zaloguj się</button>
    </form>
  </body>
  </html>