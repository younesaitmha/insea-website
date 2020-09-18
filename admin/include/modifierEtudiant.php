<?php
   
    try{
    $serveur = "localhost";
    $dbname = "insea";
    $user = "root";
    $pass = "";
    
    $connexion = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
       
        $id=$_GET['etudiant_id'];
        $sql = 'SELECT * FROM Etudiant WHERE etudiant_id=:etudiant_id';
        $statement = $connexion->prepare($sql);
        $statement->execute([':etudiant_id' => $id ]);
        $etudiant = $statement->fetch(PDO::FETCH_OBJ);
        if (isset ($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['matricule']) && isset($_POST['niveau']) && isset($_POST['etudiant_email']) && isset($_POST['date_naissance']) && isset($_POST['photo']) && isset($_POST['CIN']) && isset($_POST['attestation'])&& isset($_POST['bac']) && isset($_POST['idFiliere']) ) {
        $nom= $_POST['nom'];
        $prenom = $_POST['prenom'] ;
        $niveau = $_POST['niveau'] ;
        $matricule = $_POST['matricule'] ;
        $date_naissance = $_POST['date_naissance'] ;
        $idFiliere = $_POST['idFiliere'] ;
        $etudiant_email = $_POST['etudiant_email'] ;
        $photo = $_POST['photo'] ;
        $bac = $_POST['bac'] ;
        $CIN = $_POST['CIN'] ;
        $attestation = $_POST['attestation'] ;
        $sql = 'UPDATE Etudiant SET etudiant_email=:etudiant_email , nom = :nom, prenom = :prenom , niveau= :niveau ,matricule=:matricule , date_Naissance =:date_Naissance , photo=:photo , CIN = :CIN ,attestation= :attestation , bac=:bac , idFiliere= :idFiliere WHERE etudiant_id=:etudiant_id';
        $statement = $connexion->prepare($sql);
        if ($statement->execute([':etudiant_id' => $id, ':nom' => $nom,  ':prenom' => $prenom,  ':niveau' => $niveau,  ':matricule' => $matricule,  ':date_Naissance' => $date_naissance,  ':photo' => $photo, ':CIN' => $CIN , ':attestation' => $attestation , ':bac' => $bac , ':idFiliere' => $idFiliere])) {
            header("Location:Administrateur.php");
        }
        }
    
    }
    catch (PDOException $e) {
        var_dump($e);
    }        



 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css"  href="../css/general2.css"> 
        <style>
             *{
                margin: 0;
                padding: 0;

                }
                body{
                background: url('../images/background.jpg');
                background-repeat: no-repeat;
                background-size: cover;

                }
                h2{
                text-align: center;
                margin: auto;
                color: red;
                font-size: 2rem;
                font-weight: bold;
                margin-top: 10%;
                margin-bottom: 40px;
                }

                .form{

                width: 80%;
                margin: auto;
                padding: 30px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;


                }
                form div {

                width: 45%;
                margin: 20px;
                margin :auto; 
                /*height: 70px;*/
                flex-grow: 1;
                font-size: 1.2rem;
                }
                .form div label , input{
                margin-top: 10px;
                width: 100%;
                height: 35px;
                outline: none;
                border: none;
                border-radius: 5px;
                margin-bottom : 15px;

                }
                input[type=submit]{
                height: 35px;
                background-color: lightseagreen;
                color: sandybrown;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1.3rem;
                } 
        </style>
    </head>    
    <body>
        <div >
            <h2>Modifier les données de l'étudiant :</h2>
            <div >
           
            <form method="post">
                <div>
                    <label for="nom">Nom</label>
                    <input value="<?= $etudiant->nom; ?>" type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="prenom">Prenom</label>
                    <input value="<?= $etudiant->prenom; ?>" type="text" name="prenom" id="prenom">
                </div>
                <div>
                    <label for="matricule">Matricule</label>
                    <input value="<?= $etudiant->matricule; ?>" type="text" name="matricule" id="matricule">
                </div>
                <div>
                    <label for="niveau">Niveau</label>
                    <input value="<?= $etudiant->niveau; ?>" type="text" name="niveau" id="niveau">
                </div>
                <div>
                    <label for="date_naissance">Date de naissance</label>
                    <input value="<?= $etudiant->date_naissance; ?>" type="date" name="date_naissance" id="date_naissance">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input value="<?= $etudiant->etudiant_email; ?>" type="text" name="etudiant_email" id="email">
                </div>
                <div>
                    <label for="idFiliere">ID-Filière</label>
                    <input type="text" value="<?= $etudiant->idFiliere; ?>" name="idFiliere" id="idFiliere">
                </div>
                <div>
                    <label for="photo">Photo</label>
                    <input type="text" value="<?= $etudiant->photo; ?>" name="photo" id="photo">
                </div>
                <div>
                    <label for="cin">CIN</label>
                    <input type="text" value="<?= $etudiant->CIN; ?>" name="cin" id="cin">
                </div>
                <div>
                    <label for="attestation">Attestation</label>
                    <input type="text" value="<?= $etudiant->attestation; ?>" name="attestation" id="attestation">
                </div>
                <div>
                    <label for="bac">Bac</label>
                    <input type="text" value="<?= $etudiant->bac; ?>" name="Bac" id="Bac">
                </div>
                <div>
                    <input type='submit' name="submit" value="Modifier">
                </div>
            </form>
            </div>
        </div>
        </div>
    </body>    
</html>