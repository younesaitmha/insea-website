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
  <title>INSEA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
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
          <div class="col-lg-9 d-none d-lg-block" data-aos="fade-right">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Si vous avez des questions?</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> (+212)5 37 77 48 59/60</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> insea@insea.ac.ma</a>
          </div>
          <div class="col-lg-3 text-right" data-aos="fade-left">
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
                <li class="active">
                  <a href="index.php" class="nav-link text-left"> Accueil</a>
                </li>
                <li class="has-children">
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


    <div class="hero-slide owl-carousel site-blocks-cover" data-aos="zoom-in">
      <div class="intro-section" style="background-image: url('images/insea-remise-diplome.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center">
              <h1 data-aos="fade-down-right">INSEA</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1 data-aos="fade-down-left">vous pouvez tout apprendre avec nous!</h1>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5" data-aos="fade-down">
              <span>Pourquoi INSEA est le LEADER?</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border" data-aos="fade-right">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Diplôme d'ingénieur</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Découvrir</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border" data-aos="fade-up">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Tandence du marché du travail</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Découvrir</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border" data-aos="fade-left">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>La meilleur des écoles</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Découvrir</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center" data-aos="fade-up">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Nos Filières</span>
            </h2>
            <p>On a les meilleurs spécialités et les plus demandées au marché du travail.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12" data-aos="fade-up-left">
              <div class="owl-slide-3 owl-carousel">
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="une-filiere.html"><img src="images/dse.jpg" alt="Image" class="img-fluid"></a>
                      <div class="status">New</div>
                      <div class="category"><h3>Data & Software Engineering</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Lorem Ipsum Dolor Sit Amet Consectetur.</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="une-filiere.html" class="btn btn-primary rounded-0 px-4">Découvrir</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="une-filiere.html"><img src="images/ds.jpg" alt="Image" class="img-fluid"></a>
                      <div class="status">New</div>
                      <div class="category"><h3>Data Science</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Lorem Ipsum Dolor Sit Amet Consectetur.</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="une-filiere.html" class="btn btn-primary rounded-0 px-4">Découvrir</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="une-filiere.html"><img src="images/se.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Statistique Économie</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Lorem Ipsum Dolor Sit Amet Consectetur.</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="une-filiere.html" class="btn btn-primary rounded-0 px-4">Découvrir</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="une-filiere.html"><img src="images/sd.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Statistique Démographie</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Lorem Ipsum Dolor Sit Amet Consectetur.</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="une-filiere.html" class="btn btn-primary rounded-0 px-4">Découvrir</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="une-filiere.html"><img src="images/af.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Actuariat Finance</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Lorem Ipsum Dolor Sit Amet Consectetur.</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="une-filiere.html" class="btn btn-primary rounded-0 px-4">Découvrir</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="une-filiere.html"><img src="images/road.jpg" alt="Image" class="img-fluid"></a>
                      <div class="category"><h3>Recherche Operationelle</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>Lorem Ipsum Dolor Sit Amet Consectetur.</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="une-filiere.html" class="btn btn-primary rounded-0 px-4">Découvrir</a></p>
                    </div>
                  </div>

              </div>

          </div>
        </div>



      </div>
    </div>




    <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <h2 class="section-title-underline style-2">
              <span>À propos de notre école</span>
            </h2>
          </div>
          <div class="col-lg-8" data-aos="fade-left">
            <p class="lead">L'INSEA propose une formation qui donne une place égale à la statistique et l'analyse économique, et offre une spécialisation dans les domaines de l'informatique, de la finance et de l'actuariat, de la démographie ainsi que de la recherche opérationnelle. C'est la première école qui a proposé une formation en informatique au niveau national et qui s'est doté du premier ordinateur au royaume, et ce, en 1974.<br>
              Les diplômés de l’INSEA possèdent des compétences qui leur permettent de pratiquer l'analyse et la prévision économique, l’ingénierie des systèmes d’information et l’expertise statistique, mais ils sont aussi capables de développer des modèles sophistiqués pour améliorer l’analyse des marchés, affiner les cibles en marketing, et mesurer les risques dans une variété de domaines.<br>
            Par ailleurs, la formation à l’INSEA ne se limite pas aux aspects techniques et de conception, mais elle s’étend également à la gestion, la communication et la bonne connaissance de l’environnement socio-économique et politique. Les lauréats de l’INSEA, amenés à jouer un rôle stratégique à diverses étapes du processus du développement économique et social, font carrière dans le secteur public, les collectivités locales et le secteur privé : banques, compagnies d'assurances et grandes entreprises nationales et multinationales.<br>
              L'Institut est sous la tutelle du Haut-Commissariat au plan, organe national de la planification économique.</p>
            <p><a href="#">Lire la suite</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->
   <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4" data-aos="fade-down">
            <h2 class="section-title-underline">
              <span>Nos Partenaires</span>
            </h2>
          </div>
        </div>


        <div class="owl-slide owl-carousel" data-aos="fade-up">

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/partenaire/bcp.gif" alt="Image" class="img-fluid img-thumbnail rounded mx-auto d-block">
              <div>
                <h3>Banque Centrale Populaire</h3>
              </div>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/partenaire/ensea-fr.jpg" alt="Image" class="img-fluid img-thumbnail rounded mx-auto d-block">
              <div>
                <h3>Institut Polytéchnique De Paris</h3>
              </div>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/partenaire/enssup.jpg" alt="Image" class="img-fluid img-thumbnail rounded mx-auto d-block">
              <div>
                <h3>Ministère De L'Enseignement Sup</h3>
              </div>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/partenaire/hcp.png" alt="Image" class="img-fluid img-thumbnail rounded mx-auto d-block">
              <div>
                <h3>Haut Commissariat Au Plan</h3>
              </div>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/partenaire/sigma.jpg" alt="Image" class="img-fluid img-thumbnail rounded mx-auto d-block">
              <div>
                <h3>Association Des Lauréats De L'INSEA</h3>
              </div>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/partenaire/ucl.png" alt="Image" class="img-fluid img-thumbnail rounded mx-auto d-block">
              <div>
                <h3>Université Catholique De Louvain</h3>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0" data-aos="fade-right">
            <span class="icon flaticon-mortarboard"></span>
            <h3>Notre Philosophie</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0" data-aos="fade-up">
            <span class="icon flaticon-school-material"></span>
            <h3>Principe académique</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0" data-aos="fade-left">
            <span class="icon flaticon-library"></span>
            <h3>Clé du succès</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
              Dolore, amet reprehenderit.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="news-updates">
      <div class="container">

        <div class="row">
          <div class="col-lg-9">
             <div class="section-heading" data-aos="fade-right">
              <h2 class="text-black">Nouvelles &amp; Mise à jour</h2>
              <a href="#">Lire toutes les actualités</a>
            </div>
            <div class="row">
              <div class="col-lg-6" data-aos="fade-up-right">
                <div class="post-entry-big">
                  <a href="actualite.html" class="img-link"><img src="images/blog_large_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">06 septembre, 2020</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Mise à jour</a>
                    </div>
                    <h3 class="post-heading"><a href="actualite.html">Vie de campus et session d'apprentissage</a></h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="post-entry-big horizontal d-flex mb-4" data-aos="fade-down">
                  <a href="actualite.html" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">06 septembre, 2020</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Mise à jour</a>
                    </div>
                    <h3 class="post-heading"><a href="actualite.html">Vie de campus et session d'apprentissage</a></h3>
                  </div>
                </div>

                <div class="post-entry-big horizontal d-flex mb-4" data-aos="fade-down">
                  <a href="actualite.html" class="img-link mr-4"><img src="images/blog_2.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">06 septembre, 2020</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Mise à jour</a>
                    </div>
                    <h3 class="post-heading"><a href="actualite.html">Vie de campus et session d'apprentissage</a></h3>
                  </div>
                </div>

                <div class="post-entry-big horizontal d-flex mb-4" data-aos="fade-up">
                  <a href="actualite.html" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a href="#">06 septembre, 2020</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Mise à jour</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Vie de campus et session d'apprentissage</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="section-heading" data-aos="fade-left">
              <h2 class="text-black">Campus Videos</h2>
              <a href="#">Voir toutes les vidéos</a>
            </div>
            <a href="https://www.youtube.com/watch?v=Kslr6LaeeGQ&t" class="video-1 mb-4" data-fancybox="" data-ratio="2" data-aos="fade-left">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="images/tedx-insea.JPG" alt="Image" class="img-fluid">
            </a>
            <a href="https://www.youtube.com/watch?v=fa0_UukR8hE" class="video-1 mb-4" data-fancybox="" data-ratio="2" data-aos="fade-up-left">
                <span class="play">
                  <span class="icon-play"></span>
                </span>
                <img src="images/tedx-insea.JPG" alt="Image" class="img-fluid">
              </a>
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
            <p><a href="#">Lire la suite</a></p>
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
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>
