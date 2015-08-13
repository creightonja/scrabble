<?php
    //Loading vendor and source files
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleValues.php";

    //Calling Debugger
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    //Calling silex framework
    $app = new Silex\Application();
    $app['debug'] = true;

    //Setting views path for silex
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Setting Home page
    $app->get("/", function() use ($app) {

        return $app['twig']->render('submit.html.twig',array('result'=> " "));
    });

    //Retrieving user input, setting instance, using ScrabbleValues method, then posting result.
    $app->get("/view_result", function() use ($app) {
        $scrabble_input = new ScrabbleValues;
        $scrabble_value = $scrabble_input->getValues($_GET['scrabble_word']);
        return $app['twig']->render('submit.html.twig', array('result' => $scrabble_value));
    });


    return $app;
?>
