<?php


class CControleurFormateur {
  
    public function unFormateur($idFormateur){
       require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();
       
       $q = $bdd->query('SELECT * FROM formateur WHERE id = '.$idFormateur.'');
       $donnees = $q->fetch(PDO::FETCH_ASSOC);
       
       require_once 'CFormateur.php';
       return new CFormateur($donnees);   
   }  
   
       public function unFormateurDonnees($idFormateur){
       require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();
       
       $q = $bdd->query('SELECT * FROM formateur WHERE id = '.$idFormateur.'');
       $donnees = $q->fetch(PDO::FETCH_ASSOC);
       
       require_once 'CFormateur.php';
       $formateur = new CFormateur($donnees); 
      
        $donnees = array(
            "nom"=>$formateur->getNom(), 
            "prenom"=>$formateur->getPrenom(),
            "mail"=>$formateur->getMail(),
            "tel"=>$formateur->getTel() 
        ); 
       
        return $donnees;  
   }
   
}









    

