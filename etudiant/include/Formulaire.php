<?php

     function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    require "PHPMailer/PHPMailerAutoload.php";

    if(isset($_POST["Envoyer"])){

        $maxSize=4000 ;

        $nom = valid_donnees($_POST['nom']);
        $prenom = valid_donnees($_POST['prenom']);
        $matricule = valid_donnees($_POST['matricule']);
        $niveau = valid_donnees($_POST['niveau']);
        $email = valid_donnees($_POST['email']);

        $date_naissance = $_POST['date_naissance'];
        $date_inscription = date('Y-m-d H:i:s');
        $sexe = $_POST['sexe'];
        $cycle = $_POST['cycle'];
        $filiere = $_POST['filiere'];

        function password_generate($chars)
        {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($data), 0, $chars);
        } ;

        $mdp=password_generate(12) ;

        $photo_name=$_FILES['photo']['name'];
        $photo_size=$_FILES['photo']['size'];

        $cin_name=$_FILES['cin']['name'];
        $cin_size=$_FILES['photo']['size'];

        $bac_name=$_FILES['bac']['name'];
        $bac_size=$_FILES['photo']['size'];

        $attestation_name=$_FILES['attestation']['name'];
        $attestation_size=$_FILES['attestation']['size'];


        $attestation_tmp_name=$_FILES['attestation']['tmp_name'];
        $cin_tmp_name=$_FILES['cin']['tmp_name'];
        $photo_tmp_name=$_FILES['photo']['tmp_name'];
        $bac_tmp_name=$_FILES['bac']['tmp_name'];

        $attestation_destination="database/".$filiere."/"."Attestations/".$attestation_name ;
        $cin_destination="database/".$filiere."/"."CIN/".$cin_name ;
        $bac_destination="database/".$filiere."/"."Copies_bac/".$bac_name ;
        $photo_destination="database/".$filiere."/"."Photos/".$photo_name ;


        move_uploaded_file($attestation_tmp_name,$attestation_destination);
        move_uploaded_file($cin_tmp_name,$cin_destination);
        move_uploaded_file($photo_tmp_name,$bac_destination);
        move_uploaded_file($bac_tmp_name, $photo_destination);

    }


    $serveur = "localhost";
    $dbname = "insea";
    $user = "root";
    $pass = "root";
    if (!empty($prenom) && !empty($nom) && !empty($niveau) && !empty($matricule) && filter_var($email, FILTER_VALIDATE_EMAIL)){

        try{
            //On se connecte à la Base de données
            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	        $etudiant = $dbco->prepare('SELECT * FROM Etudiant WHERE email = ?') ;
            $etudiant->execute(array($email)) ;
            if($etudiant->rowCount()>0){
                $errorMessage = 'Une inscription a déjà été effectuée avec cette adresse email !';
            }
            else
            {
                $activation_code = password_generate(10);

                $sql = $dbco->prepare("SELECT idFiliere FROM Filiere WHERE nom= :nom ");
                $sql->bindParam(':nom', $filiere) ;
                $sql->execute() ;
                $idFiliere = $sql->fetch();
                $id = (int)$idFiliere[0];

                //Insertion des données du formulaire
                $etudiant= $dbco->prepare("INSERT INTO Etudiant(email,matricule,niveau,password,nom,prenom,sexe,dateInscription,dateNaissance,copieCIN,photo,bac,attestationReussite , FK_idFiliere,active_code, email_status, lastLogin)
                    VALUES( :email, :matricule, :niveau, :password, :nom, :prenom, :sexe, :dateInscription, :dateNaissance, :copieCIN, :photo, :bac, :attestationReussite , :FK_idFiliere , :active_code, :email_status, :lastLogin)");

                $email_status = 'not verified';
                $etudiant->bindParam(':email',$email);
                $etudiant->bindParam(':password',$mdp);
                $etudiant->bindParam(':nom',$nom);
                $etudiant->bindParam(':prenom',$prenom);
                $etudiant->bindParam(':sexe',$sexe);
                $etudiant->bindParam(':matricule',$matricule);
                $etudiant->bindParam(':niveau',$niveau);
                $etudiant->bindParam(':dateNaissance',$date_naissance);
                $etudiant->bindParam(':dateInscription',$date_inscription);
                $etudiant->bindParam(':copieCIN',$cin_destination);
                $etudiant->bindParam(':photo',$photo_destination);
                $etudiant->bindParam(':attestationReussite',$attestation_destination);
                $etudiant->bindParam(':bac',$bac_destination);
                $etudiant->bindParam(':FK_idFiliere',$id);
                $etudiant->bindParam(':active_code',$activation_code);
                $etudiant->bindParam(':email_status' , $email_status);
                $dt = date('Y-m-d H:i:s');
                $etudiant->bindParam(':lastLogin' , $dt);
                $etudiant->execute();

                $sql2 = $dbco->prepare("SELECT* FROM Etudiant WHERE email= :etudiant_email ");
                $sql2->bindParam(':etudiant_email', $email);
                $sql2->execute() ;
                $result = $sql2->fetch();


                if(isset($result)){
                $mdp = $result['etudiant_mdp'] ;
                function smtpmailer($to, $from, $from_name, $subject, $body){

                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;


                $mail->Username = 'insea.no.replay@gmail.com';
                $mail->Password = 'AdminInsea2020';

                $mail->IsHTML(true);
                $mail->From="insea.no.replay@gmail.com";
                $mail->FromName=$from_name;
                $mail->Sender=$from;
                $mail->AddReplyTo($from, $from_name);
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($to);

                if(!$mail->Send()){
                    $error ="Une erreur s'est produite lors de l'envoie du mail !";
                    return $error;
                }
                else {
                    $error = "Email envoyé avec succès !";
                    return $error;
                }
                }

                $to   = $email ;
                $from = 'insea.no.replay@gmail.com';
                $name = "no-replay it's a robot of verification";
                $subj = 'Verfication de l\'inscription';
                $base_url = "http://localhost:8888/younes/";
                $msg = 'Bonjour '.$prenom.',vous venez d\'effectuer une inscription sur le site de l\'INSEA ,vous pouvez désormais accéder a votre espace membre en saisissant le mot de passe suivant '.$mdp.' , ce mot de passe ne sera valide qu\'après la verification de votre compte .Veuillez ouvrir ce lien pour valider votre inscription '.$base_url."email_verification.php?activation_code=".$activation_code  ;
                $error=smtpmailer($to, $from, $name ,$subj, $msg);

                }
                $errorMessage2="vous devez consulter votre email afin de valider l'inscription !" ;
            }
            }

            catch(PDOException $e){
                die(print_r($e->getMessage()));
            }

    }

    $experation_date = date('2020-09-15 00:00:00');
    $experation_date = strtotime($experation_date);

    $current_date = date('Y-m-d H:i:s') ;
    $current_date = strtotime($current_date);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription scolaire</title>
</head>
<body>
    <div class="nav-container">
        <nav>
            <div class="logo">
                <img alt="logo insea" src="img/logo.png" width="60px" height="60px">
            </div>
            <ul>
                <li><a href="Acceuil.php">Acceuil</a></li>
                <li><a href="#">Actualités</a></li>
                <li><a href="Formulaire.php">S'inscrire</a></li>
                <li><a href="connection.php">Se connecter</a></li>
            </ul>
        </nav>
    </div>
    <div class="formulaire">

        <form action="" method="POST" enctype="multipart/form-data">
            <h3>INSCRIPTION</h3>
            <?php if (isset($errorMessage)) { ?><br><p style="color: red;text-align: center ;"><?= $errorMessage ?></p> <?php } ?>
                <?php if (isset($errorMessage2)) { ?><br><p style="color: red;text-align: center ;"><?= $errorMessage2 ?></p> <?php } ?>
            <?php if(!($current_date > $experation_date)): ?>
            <div class="container">
                <div class="form-item float">
                    <input type="text" id="nom" name="nom" required  maxlength="30">
                    <label for="nom">Nom</label>
                </div>
                <div class="form-item float">
                    <input type="text" id="prenom" name="prenom" required  maxlength="30" >
                    <label for="prenom">Prénom</label>
                </div>
                <div class="form-item float">
                    <input type="text" required maxlength="20" name="matricule" id="matricule"  maxlength="15">
                    <label for="matricule">Matricule</label>
                </div>
                <div class="form-item float">
                    <input type="text" id="niveau" name="niveau"  required maxlength="30">
                    <label for="niveau">Niveau</label>
                </div>
                <div class="form-item float">
                    <input class="date"  type="date"  id="date-naissance"  name="date_naissance" required>
                    <label for="date-naissance">Date de naissance</label>
                </div>
                <div class="form-item float">
                    <input class="email"  type="email" id="email" name="email" required  maxlength="30">
                    <label for="email">Email</label>
                </div>
                <div class="form-item C100">
                    <div class="sous-form-item">
                        <label  class="radio" for="femme"><input name="sexe" id="femme" value="femme" type="radio">&nbsp;&nbsp; &nbsp;<i class="fas fa-female"></i> &nbsp; Femme</label>
                        <label  class="radio" for="homme"><input name="sexe" id="homme" value="homme" type="radio">&nbsp;&nbsp; &nbsp;<i class="fas fa-male"></i> &nbsp; Homme</label>
                    </div>
                </div>
                <div class="form-item">
                    <select name="cycle" id="cycle">
                        <option disabled selected>Cycle</option>
                        <option value="ing">Ingénieur</option>
                        <option value="master">Master</option>
                        <option value="doctorat">Doctorat</option>
                    </select>
                </div>
                <div class="form-item ">
                    <select id="filiere" name="filiere" >
                            <option disabled selected>Filière</option>
                            <option value="Statistique - Economie appliquée">Statistique - Economie appliquée</option>
                            <option value="Statistique - Démographie">Statistique - Démographie</option>
                            <option value="Recherche Opérationnelle et Aide à la Décision">Recherche Opérationnelle et Aide à la Décision</option>
                            <option value="Actuariat - Finance">Actuariat - Finance</option>
                            <option value="Data and Software Engineering">Data and Software Engineering</option>
                            <option value="Data Science" >Data Science</option>
                            <option value="Systèmes d’Information et Systèmes Intelligents" >Systèmes d’Information et Systèmes Intelligents</option>
                            <option value="formation doctorale" >Formation Doctorale</option>
                    </select>
                </div>
                <div class="form-item files">
                            <label for="photo"><i class="fas fa-portrait"></i> &nbsp; Insérez votre photo</label>
                            <input type="file" id="photo" name="photo" required accept="image/*,.pdf" capture>
                </div>
                <div class="form-item files">
                            <label for="cin"><i class="fas fa-id-card"></i> &nbsp; Copie de la CIN</label>
                            <input type="file" id="cin" name="cin" required accept="image/*,.pdf" capture>
                </div>
                <div class="form-item files">
                            <label for="bac"><i class="fas fa-download"></i> &nbsp; Copie du baccalauréat</label>
                            <input type="file"  id="bac" name="bac" required accept="image/*,.pdf" capture>
                </div>
                <div class="form-item files">
                            <label for="attestation"><i class="fas fa-download"></i> &nbsp; Attestation de réussite</label>
                            <input type="file" id="attestation" name="attestation" required accept="image/*,.pdf" capture>
                </div>
                <input type="submit" name="Envoyer" value="Envoyer">
                <span class="X" draggable="true">&times;</span>
            </div>
            <?php else : ?><div style="color:red;text-align : center; margin-top:50px;">
                            <?= "Le delai d'inscription a expiré"; ?>
                            </div>
            <?php endif; ?>
        </form>

    </div>


</body>
</html>
