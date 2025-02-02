<?php
global $livres;
session_start();
require_once 'recuperation_livre.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Les grands classiques sont ici ! mangas ou romans !" />
    <title> Livres - Otaku'Biblio</title>
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
                            <a class="nav-link" id="active" href="books.php">Livres</a>
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

    <main class="books-page">
        <form action="" id="form-books" class="text-start">
            <div>
                <label for="title">Titre </label>
                <br /><input type="text" name="title" id="search-title" />
            </div>

            <div>
                <label for="author">Auteur </label>
                <br /><input type="text" name="author" id="search-author" />
            </div>
            <div>
                <label for="year">Année </label> <br /><input type="text" name="year" id="search-year" />
            </div>
            <div>
                <label for="genre">Genre </label> <br /><input type="text" name="genre" id="search-category" />
            </div>
        </form>

        <section class="livres-details">
            <?php foreach ($livres as $livre): ?>
                <article class="book">
                        <img src="<?=$livre['lien_image']?>" alt="" />
                        <h2 class="book-title"><?= $livre['title']; ?></h2>
                        <p>
                            <?= $livre['description']; ?>
                        </p>
                        <div class="other-info-book" style="display: grid;grid-template-columns:repeat(2,1fr);">
                            Auteur :
                            <div class="book-author"><?= $livre['author']; ?></div>
                            Année de publication :
                            <div class="book-year"><?= $livre['year']; ?></div>
                            Catégorie :
                            <aside class="book-category"> <?= $livre['genre']; ?></aside>
                        </div>
                        <form action="passeralirelivre.php" method="post">
                            <input type="hidden" name="title-book" value="<?= $livre['title'];?>" >
                            <input type="hidden" name="image-book" value="<?= $livre['lien_image'];?>" >
                            <input type="hidden" name="content-book" value="<?= $livre['content'];?>" >
                            <br><button type="submit" class="btn" id="buy-button">Lire</button>
                        </form>
                </article>

            <?php endforeach; ?>
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
<script src="../js/books.js"></script>
</body>

</html>