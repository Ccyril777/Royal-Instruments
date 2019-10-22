<?php

    require '../vendor/autoload.php';

        $loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
        $twig = new Twig\Environment($loader);

            echo $twig->render("index.html.twig", array(
    'products' => array('Clavecins', 'Violons', 'Saxophones', 'Pianos', 'Xylophones')
    ));