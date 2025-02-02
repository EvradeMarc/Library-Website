<?php
session_start();
$_SESSION['connexion-check']=null;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Découvrer les derniers livres de manga mais pas que, nous vous proposons aussi des d'autres genres ,la plupart sont des classiques. "/>
    <title>Otaku'Biblio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/styles.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-light fixed-top">
            <a class="navbar-brand" href="#"><img src="../assets/images/logo-transparent-png.png" alt=""
                                                  width="300px" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="noreg-log">
                        <li class="nav-item">
                            <a class="nav-link" id="active" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="books.php">Livres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
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

    <main class="index-page">
        <section class="container" id="imageAccueil">
            <div id="texteBienvenue">
                <h1>Bienvenue à la Bibliothèque Otaku'Biblio</h1>
                <h4>Bibliothèque de manga à la base, intégrant des livres de divers genres désormais</h4>
                <br />
                <a href="books.php" class="btn">Consulter nos livres</a>
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
    <script src="../js/script.js.js"></script>
</body>

</html>