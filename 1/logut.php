
<?php
session_start();
session_unset(); //Usuwa wszystkie zmienne w tablicy SESSION ale nie usuwa sesji!
session_destroy();
setcookie('PHPSESSIONID','', time() - 3600,'/');
header("Location: login.php");
exit();