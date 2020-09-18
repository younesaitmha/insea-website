<?php

    try{
        $serveur = "localhost";
        $dbname = "insea";
        $user = "root";
        $pass = "root";

    $connexion = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_GET['etudiant_id'];
    $sql = 'DELETE FROM Etudiant WHERE idEtudiant=:etudiant_id';
    $statement = $connexion->prepare($sql);
    if ($statement->execute([':etudiant_id' => $id])) {
    header("Location:Admin.php");
    }

    }

    catch (PDOException $e) {
        var_dump($e);
    }
?>
