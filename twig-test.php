<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once('vendor/autoload.php');
include('Trip.php');

$loader = new FilesystemLoader('./twig_templates');
$twig = new Environment($loader);

echo $twig->render('trip-page.twig', ['trips' => $trips]);