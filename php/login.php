<?php
session_start();
$pdo = new PDO('mysql:host=127.0.0.1;dbname=youlookgood', 'root', '');

if(isset($_GET['login'])) {
 $email = $_POST['email'];
 $passwort = $_POST['password'];

 $statement = $pdo->prepare("SELECT * FROM tbl_users WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();

 //Überprüfung des Passworts
 if ($user !== false && password_verify($passwort, $user['passwort'])) {
 $_SESSION['userid'] = $user['id'];
 header("Location: geheim.php");
 } else {
 $errorMessage = "E-Mail oder Passwort war ungültig<br>";
 }

}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="../css/form.css" rel="stylesheet">
  </head>
  <body>
  <?php
if(isset($errorMessage)) {
 echo $errorMessage;
}
?>
    <form action="?login=1" method="post" class="form-5 clearfix">
        <p>
            <input type="text" size="40" maxlength="250" id="login" name="email" placeholder="E-Mail">
            <input type="password" size="40" maxlength="250" name="password" id="password" placeholder="Password">
        </p>
        <button type="submit" name="login" value="Login">
        	<i class="icon-arrow-right"></i>
        	<span>Sign in</span>
        </button>
    </form>
    <script src="../js/form.js"></script>
		<style>
		body {
		background-color: pink;
		}
	</style>
  </body>
</html>
