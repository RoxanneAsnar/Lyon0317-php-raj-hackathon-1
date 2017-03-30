<?php

    require_once("../vendor/autoload.php");

    $bdd = new \wcs\BddManager();
    $manager = new \wcs\AddKeywordsManager($bdd);

    echo $keyword_field_form = $_POST["keyword_field_form"];
    if (strlen($keyword_field_form) >= 3) {
        $manager->setKeyword_field($keyword_field_form);
        $manager->addKeyword_field();
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require "../inc/head.php"; ?>
    </head>
<body>

    <div class="container-fluid">
        <header>
            <?php require "../inc/header.php"; ?>
        </header>
  
        <main>
        <?php require "../inc/search-form.php"; ?>
        <?php require "../inc/movies-results.php"; ?>
        </main>

        <footer>
            <?php require "../inc/footer.php"; ?>
        </footer>
    </div>

    <?php require "../inc/scripts.php"; ?>
</body>
</html>