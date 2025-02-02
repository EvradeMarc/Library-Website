<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['email']) ) {

    $titre = $_POST['title-book'];
    $contenu = $_POST['content-book'];
    $image = $_POST['image-book'];

    $_SESSION['titrelivrechoisi'] = $titre;
    $_SESSION['contenulivrechoisi'] = $contenu;
    $_SESSION['imagelivrechoisi'] = $image;

    $livrelus = array('titre' => $titre, 'contenu' => $contenu, 'image' => $image);

    $dejaAjoute = false;

    foreach ($_SESSION['livrelus'] as $livre) {
        if ($livre['titre'] === $titre) {
            $dejaAjoute = true;
            break;
        }
    }

    if (!$dejaAjoute) {
        $_SESSION['livrelus'][] = $livrelus;
    }
}

    header("Location: lecturelivre.php");
    exit();

?>
