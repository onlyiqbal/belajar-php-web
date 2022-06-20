<?php
session_start();

if ($_SESSION['login'] == true) {
     header('Location: /session/member.php');
     exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
     if ($_POST['username'] == "iqbal" && $_POST['password'] == 'iqbal') {
          // sukses
          $_SESSION['login'] = true;
          $_SESSION['username'] = 'iqbal';
          header('Location: /session/member.php');
          exit();
     } else {
          // gagal
          $error = "Login Gagal";
     }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <?php if ($error != "") { ?>
          <h2><?php echo $error; ?></h2>
     <?php } ?>
     <h1>Login</h1>
     <form action="/session/login.php" method="post">
          <label for="">username :
               <input type="text" name="username">
          </label>
          <br>
          <br>
          <label for="">password :
               <input type="text" name="password">
          </label>
          <br>
          <input type="submit" value="login">
     </form>
</body>

</html>