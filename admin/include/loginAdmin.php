<?php

    // Systeme de connexion de l'admin
    session_start();

    if (isset($_SESSION['adminEmail'])) {
    header('Location:../Acceuil.php');
    }

    function valid($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    $serveur = "localhost";
    $dbname = "insea";
    $user = "root";
    $pass = "root";

    if (isset($_POST['submit'])) {

        $email = valid($_POST['email']);
        $password = valid($_POST['password']);

        if ((!empty($email)) && (!empty($password))) {

            try{

            $connexion = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requestUser = $connexion->prepare("SELECT *FROM Admin
                                                 WHERE email = ? AND password = ?");
            $requestUser->execute(array($email, $password));

            if($requestUser->rowCount()>0) {

                $result = $requestUser->fetchAll();
                foreach($result as $row)
                {

                        if($row["mdp"] == $_POST["password"])
                        {
                            $_SESSION['adminID'] = $row['idAdmin'] ;
                            $_SESSION['adminEmail'] = $row['email'];
                            $_SESSION['adminPassword'] = $row['password'];
                            header('location:Admin.php');

                        }
                        else
                        {
                            $errorMessage = "<label>Mot de passe incorrect!</label>";
                        }
                }
            } else {
                $errorMessage = 'Email ou mot de passe est incorrect!';
            }
            }
            catch (PDOException $e) {
                var_dump($e);
            }
        } else {
            $errorMessage = 'Remplir tous les champs!';
        }
    }

?>


<!DOCTYPE html>
<html >
    <head>
        <title>Espace admin - Connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/all.css">
        <link rel="stylesheet" type="text/css" href="../css/navbar.css">
        <link rel="stylesheet" type="text/css" href="../css/connection.css">
    </head>
    <body>
        <div class="nav-container">
            <nav>
                <div class="logo">
                    <img alt="logo insea" src="../images/logo-insea.png" width="60px" height="60px">
                </div>
                <ul>
                    <li><a href="../Acceuil.php">Acceuil</a></li>
                    <li><a href="#">Actualités</a></li>
                </ul>
            </nav>
        </div>
        <div class="connection_form">
            <div class="user-image">
                <img src="../images/user.jpg" alt="avatar">
            </div>
            <div class="title">
                <h3>Connectez-vous</h3>
            </div>
            <?php if (isset($errorMessage2)) { ?><br><p style="color: red;text-align:center;"><?= $errorMessage2 ?></p> <?php } ?>
            <form action="" method="POST">
                <div class="inputs">
                    <i class="fas fa-at"></i>
                    <input name="email" type="email" id="email" placeholder="Entrez votre email" required>
                </div>
                <div class="inputs">
                    <i class="fas fa-lock"></i>
                    <input name="password" type="password" id="password" placeholder="Entrez votre mot de passe" required >
                </div>
                <?php if (isset($errorMessage)) { ?><br><p style="color: red;text-align:center;"><?= $errorMessage ?></p> <?php } ?>
                <input type="submit" name="submit" value="Se connecter">
            </form>
        </div>
    </body>
</html>
