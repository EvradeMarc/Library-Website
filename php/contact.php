<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact - Otaku'Biblio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/styles.css" />
</head>

  <body>
  <header>
    <nav class="navbar navbar-expand-md bg-light fixed-top">
      <a class="navbar-brand" href="index.php"><img src="../assets/images/logo-transparent-png.png" alt=""
                                            width="300px" /></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <div class="noreg-log">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="books.php">Livres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="active" href="contact.php">Contact</a>
            </li>

            <?php if (isset($_SESSION['email'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Déconnexion</a>
            </li>
          </div>
          <?php else: ?>
          <div class="reg-log">
            <li class="register nav-item">
              <a class="nav-link" href="register.php">Inscription</a>
            </li>
            <li class="login nav-item">
              <a class="nav-link" href="login.php">Connexion</a>
            </li>
          </div>
          <?php endif; ?>

        </ul>
      </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </header>

    <main class="main-contact">
      <section class="container my-5 pt-5">
        <div class="row-title-contact row text-center">
          <h1 id="contact-title">CONTACTEZ-NOUS</h1>
          <p>Nous sommes là pour vous aider. N'hésitez pas à nous contacter.</p>
        </div>

        <div class="row pt-5">
          <div class="col">
            <h2>Informations de Contact</h2>
            <div class="row">
              <div class="col pt-5">
                <img src="../assets/images/broche-de-localisation.png" alt="" />
                87000 Limoges, France
              </div>
            </div>

            <div class="row">
              <div class="col pt-3">
                <img src="../assets/images/telephone.png" alt="" />
                +33 7 55 55 55 55
              </div>
            </div>

            <div class="row">
              <div class="col pt-3">
                <img src="../assets/images/courrier.png" alt="" />
                Mbezelee@3il.fr
              </div>
            </div>
          </div>

          <div class="col pt-5">
            <form action="sendmail.php" id="form-contact" method="post">
              <label for="name">Nom </label>
              <br /><input type="text" name="name" id="name" />
              <br /><br /><label for="email">Email </label> <br /><input
                type="email"
                name="email"
                id="email"
              />
              <br /><br /><label for="message">Message </label> <br /><textarea
                name="message"
                id="message"
              ></textarea>
              <br /><br /><button class="btn btn-primary" id="send-button">
                Envoyer
              </button>
            </form>
          </div>
        </div>
      </section>
    </main>

  <footer class="container bg-light">
    <div class="foot row">
      <div class="col-md-5 pt-3">
        <img src="../assets/images/logo-transparent-png.png" alt="" width="400px" />
      </div>
      <div class="contact-media col-md-4 pt-4">
        <div class="contact">
          <a href="contact.php">
            <img src="../assets/images/enveloppe128.png" alt="" width="40px" />
            <br />
            <br />
            <p id="texte-conctater">Nous<br />contactez</p>
          </a>
        </div>

        <div class="media">
          <a href="https://www.linkedin.com/in/evrade-marc-mbezele-463897251" target="_blank"
             rel="noopener noreferrer">
            <img src="../assets/images/linkedIn128.png" alt="" width="40px" />
            <br />
            <br />
            <p id="texte-media">Réseau<br />Social</p>
          </a>
        </div>
      </div>

      <div class="col-md-3 pt-4">
        <h6>Localisation & Contact</h6>
        <p>
          87000,LIMOGES
          <br />Tél. +33 (0)7 55 59 67 24
        </p>
      </div>
    </div>
  </footer>
  </body>
</html>
