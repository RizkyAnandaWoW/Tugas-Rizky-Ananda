<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 5e</title>
</head>
<body>
<div class="login">
<h1>Login</h1>
</div>
<div class="outbox">
<?php
$correctUsername = 'rizky';
$correctPassword = '11';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username === $correctUsername && $password === $correctPassword) {
        header('Location: latihan5e_hasil.php');
        exit;
    } else {
        $error = 'Username atau password salah.';
    }
}
?>

  <form action="" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" required><br><br>

  <label for="password">Password:</label>
  <input type="password" name="password" required><br><br>

  <input type="submit" value="Login">
</form>

<p style="color: red;"><?php echo $error; ?></p>
</div>
</body>
<style>
  .outbox{
        border: 5px solid black;    
            padding: 10px;
            margin: 10px;
            width: 30%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: auto;
        }
  .login{
        text-align: center;
  }
</style>

</html>