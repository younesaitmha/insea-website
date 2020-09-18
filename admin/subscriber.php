<?php
  if(isset($_POST['email'])){
    $emailSub = $_POST['email'];
    $db = new PDO('sqlite:../database/subscribers.db');
    $stmt = $db->prepare("DELETE FROM subscribers WHERE email=:emailSub");
		$stmt->execute(['emailSub'=>$emailSub]);
  }
  $send = false;
  require '../PHPMailer/PHPMailerAutoload.php';
  if(isset($_POST['newsletter']) && $_POST['newsletter'] != ''){
    $db = new SQLite3('../database/subscribers.db');
    $results = $db->query('SELECT * FROM subscribers');
    $mail = new PHPMailer(true);
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'projet.devweb2020@gmail.com';
    $mail->Password = 'insea2020';
    $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
    );
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('projet.devweb2020@gmail.com');
    while ($row = $results->fetchArray()) {
      //Recipients
      $mail->addAddress($row["email"]);
      $mail->addReplyTo('projet.devweb2020@gmail.com');

      //Content
      $mail->isHTML(true);
      $mail->Subject = $_POST['subject'];
      $mail->Body    = $_POST['newsletter'];

      $mail->send();
    }
  }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace Admin</title>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">


  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    .navbar {
      background-color: #183661 !important;
    }
    .logo {
      margin-top: 0;
      margin-left: 3rem;
      font-size: 40px;
      text-transform: uppercase;
      font-weight: bold;
      background: -webkit-linear-gradient(top left, #54A966, #EAEFEA);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .logo:hover {
      transform: rotateX(40deg);
    }
    .nav-item {
      margin-left: 4rem;
    }
    .nav-link {
      color: white !important;
    }
    .nav-link:hover {
      color: #54A966 !important;
    }
    .active {
      color: #54A966 !important;
      text-transform: uppercase;
      transform: scale(1.1);
    }
    .text {
      font-family: 'Roboto';
      font-size: 22px;
      color: #54A966;
      font-display: auto;
    }
    .deco {
      margin-right: 3rem;
    }
    .dropdown-menu {
      background-color: transparent;
    }
    .main {
      margin-top: 5rem !important;
    }
    .row {
      margin-right: 2rem;
      margin-left: 3rem;
    }
    .table {
      font-family: 'Montserrat', sans-serif;
    }
    .header-tab {
      font-family: 'Montserrat', sans-serif;
      color: #54A966;
      font-size: 2rem;
    }


    .footer {
      padding: 2rem 0;
      background: #183661;
      font-size: 14px;
      color: #fff;
    }

    .footer a:hover {
      color: royalblue;
      text-decoration: none;
    }
    .footer .copyright {
      color: #fff;
      padding-top: 4rem;
      text-align: center;
    }
    @media only screen and (max-width: 767px){
      .footer {
        padding: 0.5rem 0;
      }
      .footer p {
        font-size: 12px;
        padding-top: 0rem;
      }
    }
    @media only screen and (max-width: 767px){
      .row {
        margin: 0;
        padding: 0;
      }
      .image {
        width: 40% !important;
        margin-left: 9rem;
      }
      .header-tab {
      font-size: 1.5rem;
    }
    }
    @media only screen and (max-width: 991px){
      .deco {
        margin-left: 4rem !important;
      }
      .active {
        color: #54A966 !important;
        text-transform: uppercase;
        transform: scale(1.1);
        margin-left: 4.5rem !important;
      }
    }
    @media only screen and (min-width: width 768px) and (max-width: 910px) {
      .prof-ad {
        margin-right: 10rem !important;
        margin-top: 10rem !important;
      }
      .row {
       margin-right: 2rem;
       margin-left: 0rem !important;
      }
    }
  </style>
</head>
<body>
    <header class="site-mobile-menu-header header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="../index.php">INSEA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto justify-content-center">
            <li class="nav-item active">
              <a class="nav-link active" href="espaceAdmin.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gestion des étudants</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gestion du blog
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="subscriber.php">subscribers</a>
                <a class="dropdown-item" href="#">action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="subscriber.php">subscribers</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gestion des profs</a>
            </li>
          </ul>
          <div class="my-2 my-lg-0">
            <button class="btn btn-outline-danger my-2 my-sm-0 deco">Déconnecter</button>
          </div>
        </div>
      </nav>
    </header>


    <main class="main">
      <div class="row">
        <div class="col-md-2 prof-ad">
          <div class="container">
            <img src="../images/person_7.jpg" alt="administrator image" class="img-fluid image img-responsive img-raised rounded-circle">
            <h3 class="text-center text-capitalize text" style="margin-top:2rem;">Abderazzak</h3>
            <hr>
            <div class="clearfix"></div>
            <h3 class="text-center text-capitalize text">hajri</h3>
            <hr>
            <div class="clearfix"></div>
            <h3 class="text-center text-capitalize text">responsable</h3>
            <hr>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-10">
          <header class="table-header header-tab text-uppercase text-center">la liste des des abonnées</header>
          <input class="form-control" id="myInput" type="text" placeholder="Recherchez un email">
          <table class="table table-active table-bordered table-hover table-responsive-sm text-center">
            <thead class="thead-light text-capitalize">
              <tr>
                <th>email</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php
                $db = new SQLite3('../database/subscribers.db');
                $results = $db->query('SELECT * FROM subscribers');
                while ($row = $results->fetchArray()) {
                    echo '<tr><td>';
                    echo $row["email"];
                    echo '</td><td>
                    <form action="" method="POST">
                    <input id="email" name="email" type="hidden" style="visibility: hidden;" value="'.$row["email"].'">
                    <button type="submit" class="btn btn-danger">Supprimer</button></td></tr>
                    </form>';
                };
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="container">
        <form action="" method="post">
          <h1 for="newsletter" class="lead text-center" style="color: #54A966;">Écrire une nouvelle pour les abonnés</h1>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="écrire le titre" require></input>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="newsletter" id="newsletter" min="50" rows="10" placeholder="écrire une newsletter pour nos abonnés" require></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-block form-control">Envoyer</button>
          </div>
          </form>
      </div>
   </main>


    <footer class="footer text-center">
      <div class="copyright">
          <p>
            Copyright © Tous droits réservés | Ce site est réalisé avec <i class="icon-heart" aria-hidden="true" style="color: red;"></i> par <a href="#">YOUNES AIT M'HA</a>
          </p>
      </div>
    </footer>



    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/aos.js"></script>
    <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
</body>
</html>
