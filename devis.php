<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$messageSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $budget = $_POST['budget'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'olouwatobi15@gmail.com';
        $mail->Password = 'rjrckhuxbeafbheq';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('olouwatobi15@gmail.com', 'Olouwa-Tobi');
        $mail->addAddress('olouwatobi15@gmail.com', 'Olouwa-Tobi');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle demande de devis';
        $mail->Body    = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; color: #333; }
                .container { width: 100%; max-width: 600px; margin: 0 auto; padding: 20px; }
                .card { border: 1px solid #ccc; border-radius: 10px; margin-top: 20px; }
                .card-header { background-color: #f2f2f2; border-bottom: 1px solid #ccc; padding: 10px; text-align: center; }
                .card-body { padding: 20px; }
                .footer { background-color: #f2f2f2; padding: 10px; border-top: 1px solid #ccc; text-align: center; margin-top: 20px; }
                h2 { color: #041858; }
                .list-group { padding-left: 0; list-style: none; }
                .list-group-item { border: none; padding: 10px 0; }
                .list-group-item b { display: inline-block; min-width: 100px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h2>Nouvelle demande de devis</h2>
                    </div>
                    <div class='card-body'>
                        <ul class='list-group'>
                            <li class='list-group-item'><b>Nom:</b> $name</li>
                            <li class='list-group-item'><b>Adresse:</b> $address</li>
                            <li class='list-group-item'><b>Téléphone:</b> $phone</li>
                            <li class='list-group-item'><b>Email:</b> $email</li>
                            <li class='list-group-item'><b>Projet:</b> $project</li>
                            <li class='list-group-item'><b>Budget:</b> €$budget</li>
                        </ul>
                    </div>
                </div>
                <div class='footer'>
                    <p>Olouwa-Tobi</p>
                    <p><small>Vous venez de recevoir une nouvelle demande de devis.</small></p>
                </div>
            </div>
        </body>
        </html>
        ";

        $mail->send();
        $messageSent = true;
    } catch (Exception $e) {
        $messageSent = false;
    }
}
?>





<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Olouwa-Tobi</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    .announcement-bar {
      background-color: #e0cd61;
      color: #333;
      padding: 10px 0;
      text-align: center;
      font-size: 16px;
      font-weight: bold;
      overflow: hidden;
      white-space: nowrap;
      position: relative;
      z-index: 1030;
      height: 50px;
    }

    .announcement-content {
      display: inline-block;
      white-space: nowrap;
      animation: scroll-left 30s linear infinite;
    }

    .announcement-content span {
      padding-right: 50px;
    }

    @keyframes scroll-left {
      from {
        transform: translateX(100%);
      }

      to {
        transform: translateX(-100%);
      }
    }

    .header_section {
      background-color: #041858;
    }

    .form-container {
      background-color: #f0f0f0;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 20px;
    }

    .form-container:before {
      content: "";
      position: absolute;
      top: -20px;
      left: -20px;
      right: -20px;
      bottom: -20px;
      background: url('https://www.toptal.com/designers/subtlepatterns/patterns/memphis-mini.png');
      background-size: 150px 150px;
      z-index: -1;
      opacity: 0.2;
    }
  </style>
</head>

<body>
  <div class="announcement-bar">
    <div class="announcement-content">
      <span>🌟 Offre Spéciale : Bénéficiez de 20% de réduction sur notre Plan Pro - Offre Limitée ! 🌟</span>
      <span>🚀 Nouveau Projet ? Demandez un Devis et Profitez d'une Réduction Exclusive de 15% ! 🚀</span>
      <span>🎉 Obtenez une Consultation Gratuite pour Tout Nouveau Projet - Contactez-nous Maintenant ! 🎉</span>
    </div>
  </div>

  <div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Olouwa-Tobi
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="devis.php">Demander un devis</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <a href="">
                <img src="images/call.png" alt="">
                <span>
                  Whatsapp : + 33 7 56 91 55 61
                </span>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- form section -->
  <div class="form_section layout_padding">
    <div class="container">
      <div class="heading_container text-center mb-4">
        <h2>Demande de Devis</h2>
        <p>Parlez-nous de votre projet et nous le réaliserons pour vous avec excellence.</p>
      </div>
      <?php if ($messageSent): ?>
        <div class="alert alert-success" role="alert">
          Votre demande de devis a été envoyée avec succès. Nous vous contacterons dans les plus brefs délais pour plus d'informations concernant votre devis.
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form-container">
            <form method="post" action="devis.php">
              <div class="form-group">
                <label for="inputName">Votre nom complet</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Votre nom complet" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Adresse de résidence</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Adresse de résidence" required>
              </div>
              <div class="form-group">
                <label for="inputPhone">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Numéro de téléphone" required>
              </div>
              <div class="form-group">
                <label for="inputEmail">Adresse email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Adresse email" required>
              </div>
              <div class="form-group">
                <label for="inputProject">Votre projet</label>
                <textarea class="form-control" id="inputProject" name="project" rows="4" placeholder="Décrivez votre projet" required></textarea>
              </div>
              <div class="form-group">
                <label for="inputBudget">Quel est votre budget</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">€</span>
                  </div>
                  <input type="number" class="form-control" id="inputBudget" name="budget" placeholder="Quel est votre budget" required>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background-color: #d8bf36; border-color: #d8bf36;">Envoyez ma demande</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end form section -->

  <div class="announcement-bar">
    <div class="announcement-content">
      <span>🌟 Offre Spéciale : Bénéficiez de 20% de réduction sur notre Plan Pro - Offre Limitée ! 🌟</span>
      <span>🚀 Nouveau Projet ? Demandez un Devis et Profitez d'une Réduction Exclusive de 15% ! 🚀</span>
      <span>🎉 Obtenez une Consultation Gratuite pour Tout Nouveau Projet - Contactez-nous Maintenant ! 🎉</span>
    </div>
  </div>

  <!-- work section -->
  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Notre Procédure de Travail!
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="detail_container">
            <div class="box b-1">
              <div class="top-box">
                <div class="icon-box">
                  <img src="images/work-i1.png" alt="">
                </div>
                <h5>
                  Faire une Demande de Devis
                </h5>
              </div>
              <div class="bottom-box">
                <p>
                  <span><strong>Soumettez votre projet et recevez une estimation précise :</strong></span><br>
                  Nous analysons minutieusement votre projet et vous fournissons un devis détaillé dans les plus brefs délais. Une fois votre demande de devis reçue, nous vous contactons pour finaliser les détails et établir un plan d'action clair.
                </p>
              </div>
            </div>
            <div class="box b-1">
              <div class="top-box">
                <div class="icon-box">
                  <img src="images/work-i2.png" alt="">
                </div>
                <h5>
                  Création et Livraison du Projet
                </h5>
              </div>
              <div class="bottom-box">
                <p>
                  <span><strong>Réalisation et livraison de votre projet dans les délais convenus :</strong></span><br>
                  Après l'approbation du devis par le client, nous entamons la réalisation du projet en suivant un processus rigoureux. Une fois terminé, le projet est livré dans le délai convenu, garantissant une qualité optimale et une satisfaction totale.<br><br>

                  <strong>Note :</strong> 5% des frais du projet sont requis comme garantie, le solde étant payable à la livraison du projet.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/work-img.png" alt="">
          </div>
        </div>
      </div>

      <div class="btn-box">
        <a href="devis.php">
          Obtenir un Devis
        </a>
      </div>
    </div>
  </section>
  <!-- end work section -->
  <div class="announcement-bar">
    <div class="announcement-content">
      <span>🌟 Offre Spéciale : Bénéficiez de 20% de réduction sur notre Plan Pro - Offre Limitée ! 🌟</span>
      <span>🚀 Nouveau Projet ? Demandez un Devis et Profitez d'une Réduction Exclusive de 15% ! 🚀</span>
      <span>🎉 Obtenez une Consultation Gratuite pour Tout Nouveau Projet - Contactez-nous Maintenant ! 🎉</span>
    </div>
  </div>

  <br>
  <section class="client_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container text-center mb-5">
      <h2>
        Avis de nos clients
      </h2>
      <p>
        Ce que nos clients disent sur nous.
      </p>
    </div>
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Jean Dupont</h5>
              <div class="rating">
                ★★★★☆
              </div>
              <p>
                <strong>Olouwa-Tobi a su comprendre nos besoins et créer une application sur mesure qui dépasse nos attentes. Son expertise est indéniable.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Marie Legrand</h5>
              <div class="rating">
                ★★★★★
              </div>
              <p>
                <strong>Un développeur talentueux et fiable. Olouwa-Tobi a livré notre projet en temps record avec une qualité exceptionnelle.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Pierre Martin</h5>
              <div class="rating">
                ★★★★☆
              </div>
              <p>
                <strong>Olouwa-Tobi a transformé notre vision en une réalité numérique performante. Un partenaire technologique de confiance.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Isabelle Dubois</h5>
              <div class="rating">
                ★★★★★
              </div>
              <p>
                <strong>Sa maîtrise des technologies modernes et son approche innovante ont permis de booster notre entreprise. Hautement recommandé.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Lucien Moreau</h5>
              <div class="rating">
                ★★★★★
              </div>
              <p>
                <strong>Un vrai professionnel ! Olouwa-Tobi a su optimiser notre site web, améliorant ainsi notre visibilité et notre engagement client.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Sophie Bernard</h5>
              <div class="rating">
                ★★★★☆
              </div>
              <p>
                <strong>Nous avons été impressionnés par la créativité et la rigueur de Olouwa-Tobi. Chaque détail de notre projet a été pris en compte.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Michel Durand</h5>
              <div class="rating">
                ★★★★★
              </div>
              <p>
                <strong>Olouwa-Tobi a su nous guider à chaque étape du développement, garantissant un produit final de grande qualité.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Claire Fontaine</h5>
              <div class="rating">
                ★★★★★
              </div>
              <p>
                <strong>La communication avec Olouwa-Tobi a été fluide et efficace, et le résultat final est tout simplement excellent.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Antoine Lefèvre</h5>
              <div class="rating">
                ★★★★★
              </div>
              <p>
                <strong>Grâce à Olouwa-Tobi, nous avons pu lancer notre boutique en ligne avec une plateforme robuste et intuitive.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="box shadow p-4 mb-5 bg-white rounded">
            <div class="detail-box">
              <h5>Hélène Lambert</h5>
              <div class="rating">
                ★★★★☆
              </div>
              <p>
                <strong>Sa capacité à résoudre les problèmes rapidement et efficacement a fait de lui un atout inestimable pour notre projet.</strong>
              </p>
              <img src="images/quote.png" class="quote-img" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel_btn-container">
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>


  <div class="footer_bg">
    <br><br><br>

    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h3>
                Olouwa-Tobi
              </h3>
              <p>
                Restez connectés avec nous pour des mises à jour et des offres exclusives. Contactez-nous pour toute question ou demande de devis.
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                Liens Rapides
              </h4>
              <ul class="  ">
                <li class=" active">
                  <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="">
                  <a class="" href="devis.php">Nous contacter</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                CONTACT
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  + 33 7 56 91 55 61
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                olouwatobi15@gmail.com
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_form ">
              <h4>
                Offres exclusives
              </h4>
              <form action="">
                <input type="email" placeholder="Entrer votre adresse E-mail">
                <button>
                  Souscrire
                </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Tous droits réservés par
          <a href="https://html.design/">Olouwa-Tobi</a>
        </p>
      </div>
    </section>
    <!-- footer section -->

  </div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>
