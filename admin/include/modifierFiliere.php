<?php

    try{
    $serveur = "localhost";
    $dbname = "insea";
    $user = "root";
    $pass = "root";

    $connexion = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $id=$_GET['idFiliere'];
        $sql = 'SELECT * FROM Filiere WHERE idFiliere=:idFiliere';
        $statement = $connexion->prepare($sql);
        $statement->execute([':idFiliere' => $id ]);
        $filiere = $statement->fetch(PDO::FETCH_OBJ);
        if (isset ($_POST['nom'])  && isset($_POST['cycle'])) {
        $nom= $_POST['nom'];
        $cycle = $_POST['cycle'];
        $sql = 'UPDATE Filiere SET nom = :nom, cycle=:cycle WHERE idFiliere=:idFiliere';
        $statement = $connexion->prepare($sql);
        if ($statement->execute([':nom' => $nom, ':cycle' => $cycle, ':idFiliere' => $id])) {
            header("Location:Admin.php");
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
        <link type="text/css" href="../css/general2.css" >
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
            <h2>Modifier la filière :</h2>
            <div >
            <?php if(!empty($message)): ?>
                <div style="color:red; text-align:center ;">
                <?= $message; ?>
                </div>
            <?php endif; ?>
            <form method="post">
                <div>
                    <label for="nom">Name</label>
                    <input value="<?= $filiere->nom; ?>" type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="cycle">Email</label>
                    <input type="cycle" value="<?= $filiere->cycle; ?>" name="cycle" id="cycle">
                </div>
                <div>
                    <input type="submit" value="Modifier la filière">
                </div>
            </form>
            </div>
        </div>
        </div>
    </body>
</html>
