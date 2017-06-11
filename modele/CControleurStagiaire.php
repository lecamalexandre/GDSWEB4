<?php

class CControleurStagiaire {

    public function unStagiaire($idStagiaire){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM stagiaire WHERE id = '.$idStagiaire.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        require_once 'CStagiaire.php';
        return new CStagiaire($donnees);   
    }

    public function unStagiaireDonnees($idStagiaire){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM stagiaire WHERE id = '.$idStagiaire.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        require_once 'CStagiaire.php';
        $stagiaire = new CStagiaire($donnees); 

        $donnees = array(
            "nom"=>$stagiaire->getNom(), 
            "prenom"=>$stagiaire->getPrenom(),
            "mail"=>$stagiaire->getMail(),
            "tel"=>$stagiaire->getTel() 
        ); 

        return $donnees;   
    }

    public function authentification($login,$password){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM stagiaire WHERE login=("' . $login . '")');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        if ($donnees['password'] != $password) {
            return  $id = NULL;
        }
        else{
            return $id = $donnees['id'];
        }
    }  
}











