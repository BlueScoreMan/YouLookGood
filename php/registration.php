<?php 
session_start();
$pdo = new PDO('mysql:host=127.0.0.1;dbname=youlookgood', 'root', '');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Register</title>
		<link href="../css/form.css" rel="stylesheet">
    </head>

    <body>

        <?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

if(isset($_GET['register'])) {
 $error = false;
 $email = $_POST['email'];
 $passwort = $_POST['passwort'];
 $passwort2 = $_POST['passwort2'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo 'Please enter a correct email<br>';
 $error = true;
 } 
 if(strlen($passwort) == 0) {
 echo 'Please enter a password<br>';
 $error = true;
 }
 if($passwort != $passwort2) {
 echo 'The passwords do not match<br>';
 $error = true;
 }

 if(empty($firstname)) {
   echo "Names are required";
   $error = true;
} 

 if(empty($lastname)) {
    echo "Names are required";
	$error = true;
  }

 //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
 if(!$error) { 
 $statement = $pdo->prepare("SELECT * FROM tbl_users WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();

 if($user !== false) {
 echo 'This email is already taken<br>';
 $error = true;
 } 
}

 //Keine Fehler, wir können den Nutzer registrieren
 if(!$error) { 
 $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

 $statement = $pdo->prepare("INSERT INTO tbl_users (email, passwort, vorname, nachname) VALUES (:email, :passwort, :firstname, :lastname)");
 $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'firstname' => $firstname, 'lastname' => $lastname));

 if($result) { 
 echo 'You were successfully registerd. <a href="login.php">Zum Login</a>';
 $showFormular = false;
 } else {
 echo 'Your data could not be saved.<br>';
 }
 }
}

if($showFormular) {
?>

            <form action="?register=1" method="post" class="form-5 clearfix">
                <br>
                <input type="text" size="40" maxlength="250" id="login" name="firstname" placeholder="Firstname">
                <br>
                <br>

                <br>
                <input type="text" size="40" maxlength="250" id="login" name="lastname" placeholder="Lastname">
                <br>
                <br>

                <br>
                <input type="text" size="40" maxlength="250" id="login" name="email" placeholder="E-Mail">
                <br>
                <br> 
                <br>
                <input type="password" size="40" maxlength="250" id="password" name="passwort" placeholder="Password">
                <br>
                <br>
                <input type="password" size="40" maxlength="250" id="password" name="passwort2" placeholder="Password check">
                <br>
                <br>

        <button type="submit" name="login" value="Register">
        	<i class="icon-arrow-right"></i>
        	<span>Register</span>
        </button>
            </form>

            <?php
} //Ende von if($showFormular)
?>

	<style> 
		body {
		background-color: pink;
		}
	</style>
    </body>

    </html>