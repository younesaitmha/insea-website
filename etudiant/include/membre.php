<?php
session_start();

$serveur = "localhost";
$dbname = "insea";
$user = "root";
$pass = "root";

if (isset($_POST['submit'])) {

    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['password'];
    $confirmNewPassword = $_POST['confirm_password'];

    if ($_SESSION['userPassword'] == $oldPassword) {
        if ($newPassword == $confirmNewPassword) {

            try{

            $connexion = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $request = $connexion->prepare("UPDATE Etudiant SET password = ? WHERE email = ?");
            $request->execute([
                $newPassword,
                $_SESSION['userEmail']
            ]);
            }
            catch(PDOException $e){
                    die(print_r($e->getMessage()));

            }
            $succesMessage = 'Le mot de passe est maintenant modifié !';
            header('refresh:3;url=membre.php');

        } else {
            $errorMessage = 'Les mots de passes ne sont pas identiques!';
        }
    } else {
        $errorMessage = 'Le mot de passe est incorrect !';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/membre.css">
    <title>Bienvenu !</title>
</head>
<body>
    <div class="nav-container">
        <nav>
            <div class="logo">
                <img alt="logo insea" src="images/logo.png" width="60px" height="60px">
            </div>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="#">Actualités</a></li>
                <?php if (isset($_SESSION['userEmail'])) { ?><li><a href="logout.php">Se déconnecter</a></li><?php  } ?>
            </ul>
        </nav>
    </div>
    <?php if (isset($_SESSION['userEmail'])) { ?>
        <div class="panel_membre">
            <div class="bonjour" >
                <p>Bonjour ,<?= $_SESSION['userFirstName'] ?> <?=  $_SESSION['userLastName'] ?>!</p>
            </div>
            <h3>Vous pouvez modifier votre mot de passe :</h3>
            <form method="post" action="">
                <input type="password" name="old_password" placeholder="Ancien Mot de passe">
                <input type="password" name="password" placeholder="Nouveau Mot de passe">
                <input type="password" name="confirm_password" placeholder="Confirmation Mot de passe">
                <?php if (isset($errorMessage)) { ?> <p style="color: red;"><?= $errorMessage ?></p> <?php } ?>
                <?php if (isset($succesMessage)) { ?> <p style="color: green;"><?= $succesMessage ?></p> <?php } ?>
                <input type="submit" name="submit" value="Valider">
            </form>
        </div>
    <?php  } ?>

</body>
</html>
