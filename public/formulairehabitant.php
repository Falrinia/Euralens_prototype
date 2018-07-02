<?php
session_start();
if(array_key_exists('errors',$_SESSION)): 
  implode('<br>', $_SESSION['errors']); 
endif;
   if(array_key_exists('success',$_SESSION)):
endif; 
echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; 
echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : '';
 echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message']: '';
unset($_SESSION['inputs']); // on nettoie les données précédentes
unset($_SESSION['success']);
unset($_SESSION['errors']);
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