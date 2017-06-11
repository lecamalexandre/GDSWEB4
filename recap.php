<?php

    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('vues'); // Dossier contenant les templates

    $twig = new Twig_Environment($loader, array(
      'cache' => 'dev'
    ));
    
    

        require_once 'modele/CControleurPeriodeStage.php';
        $cControleurPeriodeStage = new CControleurPeriodeStage();

        require_once 'modele/CControleurEntreprise.php';
        $cControleurEntreprise=new CControleurEntreprise;
        
        require_once 'modele/CControleurStagiaire.php';
        $cControleurStagiaire=new CControleurStagiaire();
  
        require_once 'modele/CControleurFormateur.php';
        $cControleurFormateur=new CControleurFormateur();
          
        require_once 'modele/CControleurTuteur.php';
        $cControleurTuteur=new CControleurTuteur();

$idPeriode=1;//période recupérée en GET

$periode=$cControleurPeriodeStage->unePeriode($idPeriode);

$entreprise=$cControleurEntreprise->uneEntreprise($periode->getIdEntreprise());

$stagiaire=$cControleurStagiaire->unStagiaire($periode->getIdStagiaire());

$formateur=$cControleurFormateur->unFormateur($periode->getIdFormateur());

$tuteur=$cControleurTuteur->unTuteur($periode->getIdTuteur());





/*******************************************************
*         Données envoyées au template                 *
******************************************************/         
      $template = $twig->loadTemplate('recap.twig');    
           echo $template->render(array(
 
            //Periode
          
            'dateDebut'=>$periode->getDateDebut(),
            'dateFin'=>$periode->getDateFin(),
            'poste'=>$periode->getPoste(),
             
            
            //entreprise   
            'nom'=>$entreprise->getNom(),
            'adnum'=>$entreprise->getAdnum(),
            'adrue'=>$entreprise->getAdrue(),
            'adville'=>$entreprise->getAdville(),
            'adcp'=>$entreprise->getAdcp(),
            'tel'=>$entreprise->getTel(),
            'mail'=>$entreprise->getMail(),
            'siret'=>$entreprise->getSiret(),
            'ape'=>$entreprise->getApe(),   
  
            //données tuteur
            'nomTuteur'=>$tuteur->getNom(),
            'prenomTuteur'=>$tuteur->getPrenom(),
            'mailTuteur'=>$tuteur->getMail(),
            'telTuteur'=>$tuteur->getTel(), 
               
            //données formateur
            'nomTuteur'=>$formateur->getNom(),
            'prenomTuteur'=>$formateur->getPrenom(),
            'mailTuteur'=>$formateur->getMail(),
            'telTuteur'=>$formateur->getTel(), 
               
            //données stagiaire
            'nomTuteur'=>$stagiaire->getNom(),
            'prenomTuteur'=>$stagiaire->getPrenom(),
            'mailTuteur'=>$stagiaire->getMail(),
            'telTuteur'=>$stagiaire->getTel(),    
               
      
            ));