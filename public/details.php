<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$global = 'Global Email';
$description = 'le render absolu a chaque page est le global ';

echo $twig->render('details.html.twig', ['global' => $global,'description' => $description]);

