<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"
    ));
    $app['debug']=true;
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');

    });

    $app->get("/counter", function() use ($app) {
        $sentence = ($_GET['sentence_input']);
        $word = ($_GET['word_input']);
        $new_repeatCounter = new RepeatCounter($sentence, $word);
        $newCounts = $new_repeatCounter->countRepeats($sentence, $word);
        $outputArray = array($sentence, $word);
        return $app['twig']->render('counter.html.twig', array('repeats'=>$newCounts, 'inputs'=>$outputArray));

    });

    return $app;
 ?>
