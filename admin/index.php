<?php

    // Systeme de connexion de l'admin
    session_start();

    if (isset($_SESSION['adminEmail'])) {
      header('Location:Acceuil.php');
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
            $requestUser = $connexion->prepare("SELECT * FROM Admin WHERE email = ? AND password = ?");
            $requestUser->execute(array($email, $password));

            if($requestUser->rowCount()>0) {

                $result = $requestUser->fetchAll();
                foreach($result as $row)
                {
                        if($row["password"] == $_POST["password"])
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
<html lang="fr">

<head>
  <title>Login Admin INSEA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link href="../css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

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


  <link rel="stylesheet" href="../css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> si vous avez des questions?</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> (+212)5 37 77 48 59/60</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> insea@insea.ac.ma</a>
          </div>
          <div class="col-lg-3 text-right">
            <a href="index.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Espace Admin</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="../index.php" class="d-block">
              <h1 class="logo">INSEA</h1>
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="../index.php" class="nav-link text-left">Accueil</a>
                </li>
                <li class="has-children">
                  <a href="../about.php" class="nav-link text-left">À propos de nous</a>
                  <ul class="dropdown">
                    <li><a href="../about.php#professors">Nos Professeurs</a></li>
                    <li><a href="../about.php">Notre École</a></li>
                  </ul>
                </li>
                <li>
                  <a href="../admissions.html" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="../filieres.html" class="nav-link text-left">Filières</a>
                </li>
                <li>
                    <a href="../contact.php" class="nav-link text-left">Contactez-nous!</a>
                  </li>
              </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="https://www.facebook.com/rabat.insea"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="https://www.linkedin.com/company/insea/"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>

        </div>
      </div>

    </header>


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('../images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7" data-aos="fade-down">
              <h2 class="mb-0">Se Connecter À L'Espace Admin</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Se Connecter</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                      <?php if (isset($errorMessage2)) { ?><br><p style="color: red;text-align:center;"><?= $errorMessage2 ?></p> <?php } ?>
                      <form action="" method="POST"></form>
                        <div class="col-md-12 form-group" data-aos="fade-right">
                            <span class="icon-contact_mail"> <label for="email">E-mail</label></span>
                            <input name="email" type="email" id="email" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group" data-aos="fade-left">
                            <span class="icon-key"> <label for="pword">Password</label></span>
                            <input name="password" type="password" id="password" required class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="form-check" data-aos="fade-right">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck">
                      <label class="form-check-label" for="dropdownCheck">Remember me</label>
                    </div>
                    <div class="row">
                        <div class="col-12" data-aos="fade-up">
                            <?php if (isset($errorMessage)) { ?><br><p style="color: red;text-align:center;"><?= $errorMessage ?></p> <?php } ?>
                            <button type="submit" name="submit" value="Se connecter" class="btn btn-primary btn-lg px-5">Se connecter</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h1 class="logo mb-4" data-aos="fade-right">INSEA</h1>
            <p data-aos="fade-right">L'Institut national de statistique et d'économie appliquée (INSEA)
               est l'une des grandes écoles d'ingénieurs marocaines située à Rabat et créée en 1961.
            </p>
            <p data-aos="fade-right"><a href="about.html">Lire la suite</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading" data-aos="fade-down"><span>Notre Campus</span></h3>
            <ul class="list-unstyled" data-aos="fade-up">
                <li><a href="#">Universitaires</a></li>
                <li><a href="#">Actualités</a></li>
                <li><a href="#">La vie au campus</a></li>
                <li><a href="#">Notre leadership</a></li>
                <li><a href="#">Carrières</a></li>
                <li><a href="#">Ressources humaines</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading" data-aos="fade-down"><span>Nos Filières</span></h3>
              <ul class="list-unstyled" data-aos="fade-up">
                  <li><a href="#">Data & Software Engineering</a></li>
                  <li><a href="#">Data Science</a></li>
                  <li><a href="#">Statistique Économie</a></li>
                  <li><a href="#">Statistique Démographie</a></li>
                  <li><a href="#">Actuariat Finance</a></li>
                  <li><a href="#">Recherche Operationelle</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading" data-aos="fade-down"><span>Contact</span></h3>
              <ul class="list-unstyled" data-aos="fade-up">
                  <li><a href="#">Centre d'aide</a></li>
                  <li><a href="#">Notre communauté</a></li>
                  <li><a href="#">Laboratoire de recherche</a></li>
                  <li><a href="#">Les histoires de réussite des diplômés</a></li>
                  <li><a href="#">Nos partenaires</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright" data-aos="fade-up">
                <p>
                  Copyright © Tous droits réservés | Ce site est réalisé avec <i class="icon-heart" aria-hidden="true" style="color: red;"></i> par YOUNES AIT M'HA
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/jquery.mb.YTPlayer.min.js"></script>
  <script src="../js/main.js"></script>

</body>

</html>
