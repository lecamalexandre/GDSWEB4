<?php

    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('vues'); // Dossier contenant les templates

    $twig = new Twig_Environment($loader, array(
      'cache' => 'dev'
    ));
    
    
$message = "";

session_start();
require_once 'modele/CControleurStagiaire.php';
$ccontroleurStagiaire = new CControleurStagiaire;

if (isset($_POST['login'])){
$login = $_POST['login'];
$password = $_POST['password'];

$id = $ccontroleurStagiaire-> authentification($login,$password);

if ($id == NULL ) {

    $message = "Mauvais login / password. Merci de recommencer";

}else{

    $_SESSION['idStagiaire'] = $id;
    header('Location: stagiaire.php');
}
}



/*******************************************************
*         Données envoyées au template                 *
******************************************************/         
      $template = $twig->loadTemplate('index.twig');    
           echo $template->render(array(
               'message'=>$message
      
               
            ));