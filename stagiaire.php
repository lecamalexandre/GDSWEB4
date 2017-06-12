<?php

  /*****************************************************
 *                        session                     *
*****************************************************/
session_start();

if (empty($_SESSION['idStagiaire'])) {
    header('Location: index.php');
    exit;
}

if (isset($_GET['deconnexion'])){
    session_destroy();
    header('Location: index.php');
}

  /*****************************************************
 *                        TWIG                    *
*****************************************************/

    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('vues'); // Dossier contenant les templates

    $twig = new Twig_Environment($loader, array(
      'cache' => 'dev'
    ));
    
 /******************************************************
*       Appel des classes utilisées                    *
******************************************************/
        require_once 'modele/CControleurEntreprise.php';
        $cControleurEntreprise=new CControleurEntreprise;
  
        require_once 'modele/CControleurPeriodeStage.php';
        $cControleurPeriodeStage = new CControleurPeriodeStage();
          
        require_once 'modele/CControleurTuteur.php';
        $cControleurTuteur=new CControleurTuteur();
        
        require_once 'modele/CControleurStagiaire.php';
        $cControleurStagiaire=new CControleurStagiaire();
        
        require_once 'modele/CControleurFormateur.php';
        $cControleurFormateur=new CControleurFormateur();
        
        require_once 'modele/CVues.php';
        $cVues=new CVues();

 /******************************************************
*         Déclaration des variables                   *
******************************************************/         
    //stagiaire
          $idStagiaire=$_SESSION['idStagiaire']; 
          $donneesStagiaire = $cControleurStagiaire->unStagiaireDonnees($idStagiaire);
          
    //Periode
      //$donneesPeriode null si premier formulaire pas encore remplie récup cookies si deja rempli
        if (isset($_COOKIE['idPeriode'])){
            $idPeriode=$_COOKIE['idPeriode'];
            $donneesPeriode= $cControleurPeriodeStage->unePeriodeDonnees($idPeriode);
        }
        else {
            $donneesPeriode=NULL;
        }
 
    //formateur
          $donneesFormateur=NULL; 
          
    //entreprise
          $donneesEntreprise=NULL;
          
    //tuteur 
          $donneesTuteur=NULL;          

    //Construction des tableaux  
          $DonneesTableau=NULL;
          $entete=NULL;
          $href=NULL;
          
    //entreprise si déja désignée     
    if(!empty($donneesPeriode['idEntreprise'])){
        $donneesEntreprise=$cControleurEntreprise->uneEntrepriseDonnees($donneesPeriode['idEntreprise']);
    }
    
    //tuteur si déja désigné
    if(!empty($donneesPeriode['idTuteur'])){
        $donneesTuteur=$cControleurTuteur->unTuteurDonnees($donneesPeriode['idTuteur']);        
    }      
          
        
 /******************************************************
*                    Vues                             *
******************************************************/ 
        
        if (isset($_GET['vue'])){
            if ($_GET['vue']=="ajout"){
               $cVues->setVAjoutPeriode("display : block");
            }   
        }
        
        if (isset($_GET['periode'])){
                $cVues->setVPeriode("display : block");
        } 
 
 /******************************************************
*         Traitement des formulaire                   *
******************************************************/ 

         /******************************************************
        *         Création d'une période de stage              *
        ******************************************************/ 
            
          /*Formulaire date*/
          if (isset($_POST['date'])) {    
            $idPeriode=$cControleurPeriodeStage->nouvellePeriode($idStagiaire, $_POST);
            setcookie("idPeriode",$idPeriode,time()+3600);
            
            $cVues->setVEntreprise("display : block"); 
          }

         /******************************************************
        *                 Traitement Entreprise                *
        ******************************************************/ 
          
        /*Retour choix liste entreprise*/
              if (isset($_GET['idEntreprise'])) { 
                $cControleurPeriodeStage->assignerEntreprise($_COOKIE['idPeriode'], $_GET['idEntreprise']);
                $donneesEntreprise=$cControleurEntreprise->uneEntrepriseDonnees($_GET['idEntreprise']);   
                
                $cVues->setVFormEntrepriseComplete("display : block");
              }

        /*Formulaires entreprise choisie dans la liste*/
              
              /*Si les données sont modifiées*/
                if (isset($_POST['form_entreprise_modifier'])) { 
                    $cControleurEntreprise->modifierEntreprise($_POST, $donneesPeriode['idEntreprise']);  
                }
              
             /*On vérifie si des tuteurs sont déjà connus pour cette entreprise SI OUI liste tuteur SI NON formulaire d'ajout tuteur*/   
                if (isset($_POST['valider']) OR isset($_POST['form_entreprise_modifier'])) {   
                  $nbTuteur=$cControleurEntreprise->compterTuteur($donneesPeriode['idEntreprise']);
                
                  if ($nbTuteur>=1){        
                        $cVues->setVTuteur_liste("display : block");   
                  }  
                    
                  else {
                      $cVues->setVTuteur_ajout("display : block"); 
                  }          
                }
      
       /*Formulaire ajout d'entreprise*/
                if (isset($_POST['form_entreprise_creer'])) { 
                  $idEntreprise=$cControleurEntreprise->ajouterEntreprise($_POST);
                  $idPeriode=$cControleurPeriodeStage->assignerEntreprise($_COOKIE['idPeriode'], $idEntreprise);
                  
                  $cVues->setVTuteur_ajout("display : block");
                }

         /******************************************************
        *                 Traitement Tuteur                    *
        ******************************************************/       

          /*Retour choix liste tuteur*/
              if (isset($_GET['idTuteur'])) { 
                $cControleurPeriodeStage->assignerTuteur($idPeriode, $idTuteur=$_GET['idTuteur']);
                $donneesTuteur=$cControleurTuteur->unTuteurDonnees($idTuteur);
 
                $cVues->setVTuteur_modif("display : block"); 
              }          
                
         /*Choisis dans la liste et validé tel quel*/
                if (isset($_POST['validerTuteur'])) {   
                    $cVues->setVRecap("display : block"); 
                }
          
         /*Choisis dans la liste et modifié*/
                if (isset($_POST['modifierTuteur'])){                        
                    $cControleurTuteur->modifierTuteur($_POST, $donneesPeriode['idTuteur']);
                    
                    $cVues->setVRecap("display : block");            
                }
                
         /*Ajout tuteur*/                
                if (isset($_POST['ajouterTuteur'])){
                    $idTuteur=$cControleurTuteur->ajouterTuteur($_POST);
                    $cControleurPeriodeStage->assignerTuteur($idPeriode, $idTuteur);
                    $cControleurEntreprise->assignerTuteur($donneesPeriode['idEntreprise'], $idTuteur);
                    $donneesTuteur=$cControleurTuteur->unTuteurDonnees($idTuteur);
                    
                    $cVues->setVRecap("display : block");
                }

          
 /*******************************************************
*               Tableau liste de choix                 *
******************************************************/   
    if (isset($_POST['date'])){
        $entete = array("id","nom","adville","adcp","tel");              
        $href ="stagiaire.php?vue=ajout&idEntreprise=";
        $DonneesTableau=$cControleurEntreprise->listeEntreprise();
    }            
                
    if (isset($_POST['form_entreprise_modifier']) OR isset($_POST['valider'])){
        $entete = array("Nom","Prenom");              
        $href ="stagiaire.php?vue=ajout&idTuteur=";
        $DonneesTableau=$cControleurTuteur->listeTuteur($donneesPeriode['idEntreprise']);
    }
    
 /*******************************************************
*                    Annuler l'enregistrement          *
******************************************************/
    if (isset($_GET['annuler'])){
        $cControleurPeriodeStage->annulerPeriode($idPeriode);
    }
            
 /*******************************************************
*         Données envoyées au template                 *
******************************************************/         
      $template = $twig->loadTemplate('stagiaire.twig');    
           echo $template->render(array(
   
            //données stagiaire
            'donneesStagiaire'=>$donneesStagiaire,
 
            //Periode
            'donneesPeriode'=>$donneesPeriode,

            //entreprise   
            'donneesEntreprise'=>$donneesEntreprise, 
               
            //données tuteur
            'donneesTuteur'=>$donneesTuteur,
            
            //données formateur
            'donneesFormateur'=>$donneesFormateur,   
               

            //données tableau   
            'donneesTableau'=>$DonneesTableau,
            'entete' =>$entete, 
            'href' =>$href,    
                   
            //Gestionnaire vues
            'vues'=>$cVues->vueDonnes(),       
            ));