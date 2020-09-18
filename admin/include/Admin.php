<?php

    session_start();


     try{
        $serveur = "localhost";
        $dbname = "insea";
        $user = "root";
        $pass = "root";

        $connexion = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $connexion->prepare('SELECT * FROM Etudiant');
        $statement->execute();
        $etudiants =  $statement->fetchAll(PDO::FETCH_OBJ);
        $sql=$connexion->prepare('SELECT * FROM Filiere');
        $sql->execute();
        $filieres=$sql->fetchAll(PDO::FETCH_OBJ);

        }
        catch (PDOException $e) {
            var_dump($e);
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Espace Admin</title>
</head>
<body>
        <div class="nav-container">
                <nav>
                    <div class="logo">
                        <img alt="logo insea" src="../img/logo.png" width="60px" height="60px">
                    </div>
                    <ul>
                        <li><a href="../index.php">Acceuil</a></li>
                        <li><a href="#">Actualités</a></li>
                        <?php if (isset($_SESSION['adminEmail'])) { ?><li><a href="logout.php">Se déconnecter</a></li><?php  } ?>
                    </ul>
                </nav>
            </div>
        <?php if (isset($_SESSION['adminEmail'])) { ?>
        <h2>Gestion des données du formulaire .</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Matricule</th>
                    <th>niveau</th>
                    <th>Date de naissance</th>
                    <th>Email</th>
                    <th>ID-Filière</th>
                    <th>Photo</th>
                    <th>CIN</th>
                    <th>Attestation</th>
                    <th>BAC</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($etudiants as $etudiant): ?>
                <tr>
                    <td><?= $etudiant->etudiant_id; ?></td>
                    <td><?= $etudiant->nom; ?></td>
                    <td><?= $etudiant->prenom; ?></td>
                    <td><?= $etudiant->matricule; ?></td>
                    <td><?= $etudiant->niveau; ?></td>
                    <td><?= $etudiant->date_Naissance; ?></td>
                    <td><?= $etudiant->etudiant_email; ?></td>
                    <td><?= $etudiant->idFiliere; ?></td>
                    <td><?= '<img src='.$etudiant->photo.'>'; ?></td>
                    <td><?= '<img src='.$etudiant->CIN.'>'; ?></td>
                    <td><?= '<img src='.$etudiant->attestation.'>'; ?></td>
                    <td><?= '<img src='.$etudiant->bac.'>'; ?></td>
                    <td>
                    <a class="edit" href="modifierEtudiant.php?etudiant_id=<?= $etudiant->etudiant_id ?>">Modifier</a>
                    <a class="delete" onclick="return confirm('Etes-vous sure de vouloir effectuez la suppression')" href="supprimerEtudiant.php?etudiant_id=<?= $etudiant->etudiant_id ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <h2>Gestion des filières .</h2>
        <table>
            <thead>
                <tr>
                    <th>ID-Filière</th>
                    <th>Nom</th>
                    <th>Cycle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($filieres as $filiere): ?>
                    <tr>
                       <td><?= $filiere->idFiliere; ?></td>
                       <td><?= $filiere->nom; ?></td>
                       <td><?= $filiere->cycle; ?></td>
                       <td><a class="edit" href="modifierFiliere.php?idFiliere=<?= $filiere->idFiliere ?>" >Modifier</a>
                    </tr>
                <?php endforeach; ?>
          </tbody>
          <tfoot>
                <tr><td><a class="add" href="AjouterFiliere.php">Ajouter</a></td></tr>
          <tfoot>
          </table>
          <?php  } ?>

</body>
</html>
