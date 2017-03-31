<?php
require_once __DIR__ . '/../vendor/autoload.php';

//$bdd = new \wcs\BddManager();

if (isset($_GET['page'])){
    $page = $_GET['page'];
}
if (isset($_GET['idmovie'])){
    $movie = $_GET['idmovie'];
}

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../view');
$twig   = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/../tmp',
));

$datas = json_decode(file_get_contents("http://www.omdbapi.com/?s=titanic", true));
$datas = $datas->Search;
echo $twig->render('index.html.twig', array('datas' => $datas));


?>


