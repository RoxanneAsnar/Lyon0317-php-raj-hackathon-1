<?php
require_once __DIR__ . '/../vendor/autoload.php';
require  "../src/class/AddKeywordsManager.php";
require  "../src/class/BddManager.php";
require "../config/Config.php";

$var = (isset($_POST['keyword'])) ? $_POST['keyword'] : null ;
$year =(isset($_POST['year'])) ? $_POST['year'] : null ;
$type = (isset($_POST['type'])) ? $_POST['type'] : null ;

$url= 'http://www.omdbapi.com/?s=';
if (!empty($var)) {
    $url.=''.$var;
}
if (!empty($year)) {
    $url.="&y=".$year;
}
if (!empty($type)) {
    $url.="&type=".$type;
}


$bdd = new \wcs\BddManager();
$manager = new \wcs\AddKeywordsManager($bdd);

if (strlen($var) >= 3) {
    $manager->setKeyword_field($var);
    $manager->addKeyword_field();
}

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

$datas = json_decode(file_get_contents($url, true));
$datas = $datas->Search;


echo $twig->render('index.html.twig', array('datas' => $datas));

?>


