<?php

// Appel auto des classes******************************************************************** 

class CControleurPeriodeStage {

    public function nouvellePeriode($idStagiaire,$donnees){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection(); 

        $req = $bdd->prepare('INSERT INTO periode(dateDebut, dateFin, poste ,activite, idStagiaire) VALUES(:dateDebut, :dateFin, :poste, :activite, :idStagiaire)');
        $req->execute(array(
            'dateDebut' => $donnees['dateDebut'],
            'dateFin' => $donnees['dateFin'],
            'poste' => $donnees['poste'],
            'activite'=> $donnees['activite'],    
            'idStagiaire' => $idStagiaire 
        ));

        return $bdd->lastInsertId();
    }  

    public function assignerEntreprise($idPeriode, $idEntreprise) {
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();
        $q = $bdd->prepare('UPDATE periode SET idEntreprise="'.$idEntreprise.'" WHERE id='.$idPeriode.' ');
        $q->execute();        
    }

    public function assignerTuteur($idPeriode, $idTuteur) {
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();
        $q = $bdd->prepare('UPDATE periode SET idTuteur="'.$idTuteur.'" WHERE id='.$idPeriode.' ');
        $q->execute();        
    }

    public function unePeriode($idPeriode){
        require_once 'CBdd.php';
        require_once 'CPeriodeStage.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM periode WHERE id = '.$idPeriode.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new CPeriodeStage($donnees); 

    }

    public function unePeriodeDonnees($idPeriode){
        require_once 'CBdd.php';
        require_once 'CPeriodeStage.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM periode WHERE id = '.$idPeriode.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        $periode = new CPeriodeStage($donnees); 

        $donnees = array(
            "dateDebut"=>$periode->getDateDebut(), 
            "dateFin"=>$periode->getDateFin(), 
            "dateVisite"=>$periode->getDatevisite(), 
            "poste"=>$periode->getPoste(), 
            "activite"=>$periode->getActivite(), 
            "noteFormateur"=>$periode->getNoteFormateur(), 
            "visiteEffectue"=>$periode->getVisiteEffectue(), 
            "idFormateur"=>$periode->getIdFormateur(), 
            "idStagiaire"=>$periode->getIdStagiaire(),
            "idEntreprise"=>$periode->getIdEntreprise(),
            "idTuteur"=>$periode->getIdTuteur(),
        );
        return $donnees;
    }

    public function annulerPeriode($idPeriode){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection(); 

        $q = $bdd->prepare('DELETE FROM `periode` WHERE id='.$idPeriode.'');
        $q->execute();   
    }

}


