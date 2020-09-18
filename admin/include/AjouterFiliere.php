<?php
if (isset ($_POST['nom'])  && isset($_POST['cycle']) ) {
    $nom = $_POST['nom'];
    $cycle = $_POST['cycle'];
    try{
        $serveur = "localhost";
        $dbname = "insea";
        $user = "root";
        $pass = "";
        
        $connexion = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = 'INSERT INTO Filiere (nom, cycle) VALUES(:nom, :cycle)';
        $statement = $connexion->prepare($sql);
        if ($statement->execute([':nom' => $nom, ':cycle' => $cycle])) {
            $message = 'La nouvelle filière a été insérée !';
        }
    }
    catch (PDOException $e) {
        var_dump($e);
    }    


}


 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/create.css">
    <title>Ajout de filières</title>
</head>
<body>
  
    
      <h2>Créer une filière </h2>
    <div class="form">
      <?php if(!empty($message)): ?>
        <div style="color:red;text-align:center;">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div>
          <label for="form">Nom de la filière :</label>
          <input type="text" name="nom" id="nom" required>
        </div>
        <div >
          <label for="cycle">Cycle :</label>
          <input type="text" name="cycle" id="cycle" required>
        </div>
        <div>
          <input type="submit" name="submit" value="Créer une filière">
        </div>
      </form>
    </div>
</body>
</html>