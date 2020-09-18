<?php
    $send = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
      if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $emailSub = $_POST['email'];
        $db = new PDO('sqlite:database/subscribers.db');
        $db->exec("INSERT INTO subscribers(email) VALUES ('$emailSub');");
        $send = true;
      }
      else{
        $v = "invalid-form";
      }
    }
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <title>About INSEA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

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

  <link rel="stylesheet" href="css/style.css">



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
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Si vous avez des questions?</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> (+212)5 37 77 48 59/60</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> insea@insea.ac.ma</a>
          </div>
          <div class="col-lg-3 text-right">
            <a href="etudiant/index.php" class="small mr-3"><span class="icon-unlock-alt"></span> Se connecter</a>
            <a href="etudiant/register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> S'inscrire</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <h1 class="logo">INSEA</h1>
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="index.php" class="nav-link text-left"> Accueil</a>
                </li>
                <li class="has-children active">
                  <a href="about.php" class="nav-link text-left"> À Propos de nous</a>
                  <ul class="dropdown">
                    <li><a href="about.php#professors"> Nos Professeurs</a></li>
                    <li><a href="about.php"> Notre École</a></li>
                  </ul>
                </li>
                <li>
                  <a href="admissions.html" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="filieres.html" class="nav-link text-left">Filières</a>
                </li>
                <li>
                  <a href="contact.php" class="nav-link text-left">Contactez-nous!</a>
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


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7" data-aos="fade-left">
              <h2 class="mb-0">À Propos De Nous</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">À Propos de nous</span>
      </div>
    </div>

    <div class="container pt-5 mb-5">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="section-title-underline" data-aos="fade-right">
                  <span>Histoire De L'INSEA Depuis 1961</span>
                </h2>
              </div>
              <div class="col-lg-4" data-aos="fade-down">
                <p>Sous le Haut Patronage du roi Mohammed VI, l’Institut national de statistique et d'économie appliquée (INSEA) célèbre le cinquantième anniversaire de sa création. À cette occasion, l'INSEA a organisé, les 15 et 16 décembre 2011 au siège de l’Institut, une journée de célébration qui a connu la participation de différentes personnalités dont des ministres haut responsables lauréats de l'INSEA et des invités d'honneur dont des ambassadeurs, des directeurs généraux & présidents de plusieurs organismes nationaux et internationaux, alors que la deuxième journée a été consacrée à un séminaire international sous le thème Replacer le rôle de la statistique dans un contexte national et international en mutation.</p>
              </div>
              <div class="col-lg-4" data-aos="fade-left">
                <p>Dans le cadre de la célébration du 50e anniversaire de l'INSEA, Poste Maroc a procédé à l'émission spéciale d'un timbre-poste rendant ainsi hommage à cet institut. Par cette émission Barid Al-Maghrib rend hommage à l'Institut et à ses lauréats et récompense leur contribution à l'édification d'une société du savoir, de l'économie et des technologies dans le Royaume, a affirmé à cette occasion le directeur général de Barid Al-Maghrib.</p>
              </div>
            </div>
          </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4" data-aos="fade-right">
                    <img src="images/but.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 ml-auto align-self-center" data-aos="fade-left">
                    <h2 class="section-title-underline mb-5">
                        <span>Le But De L'INSEA</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                    <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                        <img src="images/insea-remise-diplome.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 mr-auto align-self-center order-2 order-lg-1" data-aos="fade-right">
                        <h2 class="section-title-underline mb-5">
                            <span>Une Formation D'Excellence</span>
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                        <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
                    </div>
                </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard" data-aos="fade-down"></span>
              <h3 data-aos="fade-right">Notre Philosophie</h3>
              <p data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material" data-aos="fade-down"></span>
              <h3 data-aos="fade-up">Principe académique</h3>
              <p data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library" data-aos="fade-down"></span>
              <h3 data-aos="fade-left">Clé du succès</h3>
              <p data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>


    <div id="professors" class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5" data-aos="fade-down">
            <h2 class="section-title-underline mb-5">
              <span>Nos Professeurs</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5" data-aos="fade-right">

            <div class="feature-1 border person text-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Ahmed Skalli</h2>
                <span class="position mb-3 d-block">Web Professor</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5" data-aos="fade-up">
            <div class="feature-1 border person text-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Touhami Abderazzak</h2>
                <span class="position mb-3 d-block">Economy Professor</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5" data-aos="fade-left">
            <div class="feature-1 border person text-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Imade Benallam</h2>
                <span class="position mb-3 d-block">Database Professor</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5" data-aos="fade-right">

            <div class="feature-1 border person text-center">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Adil Kabbaj</h2>
                <span class="position mb-3 d-block">AI Professor</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5" data-aos="fade-up">
            <div class="feature-1 border person text-center">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Rajae Saidi</h2>
                <span class="position mb-3 d-block">Conception Professor</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-5" data-aos="fade-left">
            <div class="feature-1 border person text-center">
                <img src="images/person_6.jpg" alt="Image" class="img-fluid">
              <div class="feature-1-content">
                <h2>Abdessalam Fazouan</h2>
                <span class="position mb-3 d-block">Demograghy Professor</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7" data-aos="fade-right">
            <h2>Abonnez-vous à nos actualités!</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
          </div>
          <div class="col-lg-5" data-aos="fade-left">
            <form action="" class="d-flex" method="POST">
              <input type="email" id="email" name="email" class="rounded form-control mr-2 py-3 <?= $v ?? "" ?>" placeholder="Entrez votre e-mail" tabindex="1">
              <button class="btn btn-primary rounded py-3 px-4" type="submit" tabindex="2">Envoyer</button>
            </form>
            <p class="lead" style="color: #54A966;"><?php if ($send) echo "merci pour l'abonnement" ; ?></p>
          </div>
        </div>
      </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-right">
            <h1 class="logo mb-4">INSEA</h1>
            <p>L'Institut national de statistique et d'économie appliquée (INSEA)
              est l'une des grandes écoles d'ingénieurs marocaines située à Rabat et créée en 1961.
           </p>
            <p><a href="about.html">Lire la suite</a></p>
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>




  <script src="js/main.js"></script>

</body>

</html>
