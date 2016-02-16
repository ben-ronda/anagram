<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramChecker.php";

    session_start();
    if (empty($_SESSION['inputs'])){
        $_SESSION['inputs'] = array();
    }


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    // $app->post("/list", function() use ($app) {
    //     $list = new AnagramChecker($_POST['anagraminput'], $_POST['anagramcandidate']);
    //     $list->save();
    //     return $app['twig']->render('form.html.twig', array('all_potential' => AnagramChecker::getAll()));
    // });

    $app->get("/anagrams", function() use($app) {
        $my_AnagramChecker = new AnagramChecker($_GET['anagraminput'],$_GET['anagramcandidate']);
        $my_AnagramChecker->save();
        $anagram = $my_AnagramChecker->checkAnagram($_GET['anagraminput'],$_GET['anagramcandidate']);
        return $app['twig']->render('anagrams_checked.html.twig', array('results' => $anagram));
    });

    return $app;
?>
