<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');

    });

    $app->get("/counter", function() use ($app) {
        $new_repeatCounter = new RepeatCounter;
        $new_repeatCounter->countRepeats($_GET['sentence_input'], $_GET['word_input']);
        return $app['twig']->render('counter.html.twig', array('repeats'=>$new_repeatCounter));

    });

    return $app;
 ?>
