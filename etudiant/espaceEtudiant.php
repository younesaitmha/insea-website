<!DOCTYPE html>
<html lang="fr">
<head>
<title>Espace Étudiant</title>
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
  <link rel="stylesheet" href="../css/cssEtudiant.css">

</head>
<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand logo" href="../index.php">INSEA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="icon-account_circle"></i> Profile
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons"></i> link
              </a>
              <a href="javascript:void(0)" class="dropdown-item">
                <i class="material-icons"></i> link
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="icon-sign-out"></i> Déconnecter
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image:url('../images/insea-remise-diplome.jpg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="../images/person_2.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Younes Ait M'ha</h3>
                <h6>Data & Software Engineering</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#inbox" role="tab" data-toggle="tab">
                    <i class="icon-inbox"></i> Inbox
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#biblio" role="tab" data-toggle="tab">
                    <i class="icon-library_books"></i> Bibliothèque
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#planning" role="tab" data-toggle="tab">
                    <i class="icon-group_work"></i> Planning
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane inbox active show" id="inbox">
            <div class="row">
              <div class="col-md-7 ml-auto mr-auto ">
                <h4 class="title">Page D'accueille</h4>
                <div class="row collections">
                  <div class="col-md-6">
                    <div class="jumbotron" style="background-image: url('../images/but.jpg');">
                      <h1 class="display-4" style="color: #54A966;">design workshop</h1>
                      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                      <hr class="my-4">
                      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                      <a class="btn btn-primary btn-lg" href="#" role="button">Découvrire</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="jumbotron" style="background-image: url('../images/but.jpg');">
                      <h1 class="display-4" style="color: #54A966;">design workshop</h1>
                      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                      <hr class="my-4">
                      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                      <a class="btn btn-primary btn-lg" href="#" role="button">Découvrire</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-2 mr-auto ml-auto stats">
                <h4 class="title">Inbox</h4>
                <ul class="list-unstyled">
                  <li><a href="#"><i class="icon-inbox2"></i> <small>60</small> Inbox</a></li>
                  <li><a href="#"><i class="icon-drafts"></i> <small>4</small> Draft</a></li>
                  <li><a href="#"><i class="icon-mail-forward"></i> <small>33</small> Sent</a></li>
                  <li><a href="#"><i class="icon-markunread_mailbox"></i> <small>2</small> Junk</a></li>
                  <li><a href="#"><i class="icon-trash"></i> <small>20</small> Trash</a></li>
                </ul>
                <hr>
                <h4 class="title text-capitalize">Les remarques des profs sur votre travail</h4>
                <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
                <hr>
                <h4 class="title">statut de votre inscription</h4>
                <span class="badge badge-primary">complète</span>
                <span class="badge badge-rose">incomplète</span>
              </div>

            </div>
          </div>
          <div class="tab-pane gallery" id="biblio">
            <div class="container">
              <table class="table table-hover table-striped table-bordered text-center">
                <header class="text-center">Tableau des matières</header>
                <tr>
                  <td>Nom module</td>
                  <td>Prof</td>
                  <td>Élements de module</td>
                  <td>Cours</td>
                  <td>Tds</td>
                </tr>
                <tr>
                  <td>dev web</td>
                  <td>Ahmed Skalli</td>
                  <td>
                    <ul>
                      <li>dev web</li>
                      <li>symfony</li>
                    </ul>
                  </td>
                  <td>
                    <ul class="list-unstyled">
                      <li><a href="javascript:void(0)">télecharger</a></li>
                      <li><a href="javascript:void(0)">télecharger</a></li>
                    </ul>
                  </td>
                  <td>
                    <ul class="list-unstyled">
                      <li><a href="javascript:void(0)">télecharger</a></li>
                      <li><a href="javascript:void(0)">télecharger</a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>structure de données</td>
                  <td>kaoutar elhari</td>
                  <td>
                    <ul>
                      <li>tructure de données</li>
                      <li>python</li>
                    </ul>
                  </td>
                  <td>
                    <ul class="list-unstyled">
                      <li><a href="javascript:void(0)">télecharger</a></li>
                      <li><a href="javascript:void(0)">télecharger</a></li>
                    </ul>
                  </td>
                  <td>
                    <ul class="list-unstyled">
                      <li><a href="javascript:void(0)">télecharger</a></li>
                      <li><a href="javascript:void(0)">télecharger</a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>économie</td>
                  <td>rachid bhija</td>
                  <td>
                    <ul>
                      <li>micro</li>
                      <li>macro</li>
                    </ul>
                  </td>
                  <td>
                    <ul class="list-unstyled">
                      <li><a href="javascript:void(0)">télecharger</a></li>
                      <li><a href="javascript:void(0)">télecharger</a></li>
                    </ul>
                  </td>
                  <td>
                    <ul class="list-unstyled">
                      <li><a href="javascript:void(0)">télecharger</a></li>
                      <li><a href="javascript:void(0)">télecharger</a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>java</td>
                  <td>nabil saidi</td>
                  <td>java</td>
                  <td><a href="javascript:void(0)">télecharger</a></td>
                  <td><a href="javascript:void(0)">télecharger</a></td>
                </tr>
              </table>
            </div>
            <div class="container">
              <header class="text-center">Bibliothèque</header>
              <hr>
              <div class="clearfix"></div>
              <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item"><a href="javascript:void(0)">Books</a></li>
                <li class="list-inline-item"><a href="javascript:void(0)">PFEs</a></li>
                <li class="list-inline-item"><a href="javascript:void(0)">PFEs</a></li>
              </ul>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="planning">
            <div class="container">
              <table class="table table-responsive-sm table-bordered text-center table-hover">
                <header class="text-center" style="color: #54A966;">planning des exams</header>
                <hr>
                <div class="clearfix"></div>
                <tr>
                  <td>Élément</td>
                  <td>Date exam/heurs</td>
                  <td>Salle</td>
                  <td>Date rattrapage/heurs</td>
                </tr>
                <tr>
                  <td>dev web </td>
                  <td>10/09/2020 10:00</td>
                  <td>E1</td>
                  <td>20/09/2020 10:00</td>
                </tr>
                <tr>
                  <td>python</td>
                  <td>10/09/2020 10:00</td>
                  <td>E1</td>
                  <td>20/09/2020 10:00</td>
                </tr>
                <tr>
                  <td>java</td>
                  <td>10/09/2020 10:00</td>
                  <td>E1</td>
                  <td>20/09/2020 10:00</td>
                </tr>
                <tr>
                  <td>symfony</td>
                  <td>10/09/2020 10:00</td>
                  <td>E1</td>
                  <td>20/09/2020 10:00</td>
                </tr>
              </table>
            </div>

            <div class="container">
              <table class="table table-responsive-sm table-bordered text-center table-hover table-striped">
                <header class="text-center" style="color: #54A966;">Emploi du temps</header>
                <hr>
                <div class="clearfix"></div>
                <tr>
                  <td>Jour/Heurs</td>
                  <td>8-10</td>
                  <td>10-12</td>
                  <td>  </td>
                  <td>14-16</td>
                  <td>16-18</td>
                </tr>
                <tr>
                  <td>Lundi</td>
                  <td>micro-économie</td>
                  <td>structure de données</td>
                  <td>  </td>
                  <td>td java</td>
                  <td>td structure de données</td>
                </tr>
                <tr>
                  <td>Mardi</td>
                  <td>régression</td>
                  <td>série chrono</td>
                  <td>  </td>
                  <td>dev web</td>
                  <td>symfony</td>
                </tr>
                <tr>
                  <td>Mercredi</td>
                  <td>dev web</td>
                  <td>dev web</td>
                  <td>  </td>
                  <td>français</td>
                  <td>anglais</td>
                </tr>
                <tr>
                  <td>Jeudi</td>
                  <td>java</td>
                  <td>régression</td>
                  <td>  </td>
                  <td>symfony</td>
                  <td>  </td>
                </tr>
                <tr>
                  <td>Vendredi</td>
                  <td>système d'exploitation</td>
                  <td>java</td>
                  <td>  </td>
                  <td>Tp système d'exploitation</td>
                  <td>comptabilité</td>
                </tr>
                <tr>
                  <td>Samedi</td>
                  <td>principe d'éco</td>
                  <td>principe d'éco</td>
                  <td>  </td>
                  <td>  </td>
                  <td>  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer text-center copyright">
          <p>
            Copyright © Tous droits réservés | Ce site est réalisé avec <i class="icon-heart" aria-hidden="true" style="color: red;"></i> par YOUNES AIT M'HA
          </p>
  </footer>


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
