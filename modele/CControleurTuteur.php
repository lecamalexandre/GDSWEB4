<?php


class CControleurTuteur {

    public function ajouterTuteur($donnees){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $stmt = $bdd->prepare('
        INSERT INTO tuteur (nom, prenom, mail, tel, idEntreprise) VALUES (:nom, :prenom, :mail, :tel, :idEntreprise)');

        $stmt->bindParam(':nom', $donnees['nom']);
        $stmt->bindParam(':prenom', $donnees['prenom']);
        $stmt->bindParam(':mail', $donnees['mail']);
        $stmt->bindParam(':tel', $donnees['tel']);
        $stmt->bindParam(':idEntreprise', $donnees['idEntreprise']);

        $stmt->execute();

        return $bdd->lastInsertId();
    }

    public function modifierTuteur($donnees,$id){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $req = $bdd->prepare('UPDATE tuteur SET nom =:nom, prenom = :prenom , mail=:mail, tel=:tel WHERE id = '.$id.'');
        $req->execute(array(
        'nom' => $donnees['nom'],
        'prenom' => $donnees['prenom'],
        'mail' => $donnees['mail'],
        'tel' => $donnees['tel']       
        ));
    }

    public function unTuteur($idTuteur){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM tuteur WHERE id = '.$idTuteur.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        require_once 'CTuteur.php';
        return new CTuteur($donnees);   
    }

    public function unTuteurDonnees($idTuteur){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();

        $q = $bdd->query('SELECT * FROM tuteur WHERE id = '.$idTuteur.'');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return $donnees;
    }

    public function listeTuteur($idEntreprise){
        require_once 'CBdd.php';
        $cBdd= new CBdd();
        $bdd=$cBdd->getConnection();


        $y=0;        
        $q = $bdd->query('SELECT id, nom, prenom  FROM tuteur WHERE idEntreprise = '.$idEntreprise.'');
        $donneesTab=$q->fetchALL(PDO::FETCH_NUM);

        return $donneesTab;   
    }
}
