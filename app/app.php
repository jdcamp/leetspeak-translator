<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetspeakTranslator.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('leetspeak.html.twig');
    });

    $app->post("/result", function() use ($app) {
        $newString = new LeetspeakTranslator();
        //$newString->translate($_POST['string-input']);
        return $app['twig']->render('result.html.twig', array('newArray' => $newString->translate($_POST['string-input'])));
    });

    return $app;
?>
