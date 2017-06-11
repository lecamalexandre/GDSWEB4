<?php


class CControleurEntreprise {
    
    public function ajouterEntreprise($donnees){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $stmt = $bdd->prepare('
        INSERT INTO entreprise (nom, adnum, adrue, adville, adcp, tel, mail, siret, ape) 
        VALUES (:nom, :adnum, :adrue, :adville, :adcp, :tel, :mail, :siret, :ape)');

        $stmt->bindParam(':nom', $donnees['nom']);
        $stmt->bindParam(':adnum', $donnees['adnum']);
        $stmt->bindParam(':adrue', $donnees['adrue']);
        $stmt->bindParam(':adville', $donnees['adville']);
        $stmt->bindParam(':adcp', $donnees['adcp']);
        $stmt->bindParam(':tel', $donnees['tel']);
        $stmt->bindParam(':mail', $donnees['mail']);
        $stmt->bindParam(':siret', $donnees['siret']);
        $stmt->bindParam(':ape', $donnees['ape']);

        $stmt->execute();

        return $bdd->lastInsertId();
    }

    public function modifierEntreprise($donnees,$id){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $req = $bdd->prepare('UPDATE entreprise SET nom =:nom, adnum = :adnum, adrue=:adrue, adville=:adville, adcp=:adcp,tel=:tel, mail=:mail, siret=:siret, ape=:ape WHERE id = '.$id.'');
        $req->execute(array(
        'nom' => $donnees['nom'],
        'adnum' => $donnees['adnum'],
        'adrue' => $donnees['adrue'],
        'adville' => $donnees['adville'],
        'adcp' => $donnees['adcp'],
        'tel' => $donnees['tel'],
        'mail' => $donnees['mail'],
        'siret' => $donnees['siret'],
        'ape' => $donnees['ape'],       
        ));  
    }


    public function uneEntreprise($idEntreprise){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM entreprise WHERE id = '.$idEntreprise.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        require_once 'CEntreprise.php';
        return new CEntreprise($donnees);   
    }

    public function uneEntrepriseDonnees($idEntreprise){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM entreprise WHERE id = '.$idEntreprise.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        require_once 'CEntreprise.php';
        $entreprise = new CEntreprise($donnees);  

        $donnees = array(
            "nom"=>$entreprise->getNom(), 
            "adnum"=>$entreprise->getAdnum(), 
            "adrue"=>$entreprise->getAdrue(), 
            "adville"=>$entreprise->getAdville(), 
            "adcp"=>$entreprise->getAdcp(), 
            "tel"=>$entreprise->getTel(), 
            "mail"=>$entreprise->getMail(), 
            "siret"=>$entreprise->getSiret(), 
            "ape"=>$entreprise->getApe(),
        );

        return $donnees;
    }

    public function listeEntreprise(){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT id,nom,adville,adcp,tel  FROM entreprise');
        $donneesTab=$q->fetchALL(PDO::FETCH_NUM);

        return $donneesTab;   
    }

    public function assignerTuteur($idEntreprise, $idTuteur) {
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();
        $q = $bdd->prepare('UPDATE tuteur SET idEntreprise="'.$idEntreprise.'" WHERE id='.$idTuteur.' ');
        $q->execute();        
    }   

    public function compterTuteur($idEntreprise){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $req = $bdd->query('SELECT COUNT(id) as NbTuteur FROM tuteur WHERE idEntreprise = '.$idEntreprise.'');
        $res = $req->fetch();
        return $res['NbTuteur'];
    }
}

