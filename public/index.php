<?php
require_once __DIR__ . '/../vendor/autoload.php';

//$bdd = new \wcs\BddManager();

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig   = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../tmp',
));

echo $twig->render('home.html.twig');

?>


<!DOCTYPE html>
<html lang="fr">
<body>
    <head>
        <?php require "../inc/head.php"; ?>
    </head>

    <div class="container-fluid">
        <header>
            <?php require "../inc/header.php"; ?>
        </header>

        <main>
            <?php require "../page/home.php"; ?>
        </main>

        <footer>
            <?php require "../inc/footer.php"; ?>
        </footer>
    </div>

    <?php require "../inc/scripts.php"; ?>
</body>
</html>