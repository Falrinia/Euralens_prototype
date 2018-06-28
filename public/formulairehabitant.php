<?php
// activation de la fonction autoloading de Composer
require __DIR__.'/../vendor/autoload.php';
// configuration du moteur de template Twig
// spécification du dossier où sont stockés les templates
$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
// initialisation du moteur de template Twig
$twig = new Twig_Environment($loader);
// affichage du rendu du template
echo $twig->render('formulairehabitant.html.twig', [
]);