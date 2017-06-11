<?php

class CVues {
    private $vAjoutPeriode,           
            $vTuteur_ajout,
            $vTuteur_modif,
            $vTuteur_liste,
            $vFormEntrepriseComplete,
            $vEntreprise,
            $vPeriode,
            $vRecap;


    function __construct() {
        $this->vPeriode='display : block';
        $this->vAjoutPeriode='display :none';           
        $this->vTuteur_ajout='display :none';
        $this->vTuteur_modif='display :none';
        $this->vTuteur_liste='display :none';
        $this->vFormEntrepriseComplete='display :none';
        $this->vEntreprise='display :none';
        $this->vRecap='display :none';
    }

    public function vueDonnes(){
        $vues=  array(
            'ajoutPeriode'=>$this->vAjoutPeriode,         
            'tuteur_ajout'=>$this->vTuteur_ajout,
            'tuteur_modif'=>$this->vTuteur_modif,
            'tuteur_liste'=>$this->vTuteur_liste,
            'formEntrepriseComplete'=>$this->vFormEntrepriseComplete,
            'entreprise'=>$this->vEntreprise,
            'periode'=>$this->vPeriode,
            'recap'=>$this->vRecap
        );
        
        return $vues;
    }    

    function setVAjoutPeriode($vAjoutPeriode) {
        $this->vAjoutPeriode = $vAjoutPeriode;
    }

    function setVTuteur_ajout($vTuteur_ajout) {
        $this->vTuteur_ajout = $vTuteur_ajout;
        $this->vPeriode = "display :none";
    }

    function setVTuteur_modif($vTuteur_modif) {
        $this->vTuteur_modif = $vTuteur_modif;
        $this->vPeriode = "display :none";
    }

    function setVTuteur_liste($vTuteur_liste) {
        $this->vTuteur_liste = $vTuteur_liste;
        $this->vPeriode = "display :none";
    }

    function setVFormEntrepriseComplete($vFormEntrepriseComplete) {
        $this->vFormEntrepriseComplete = $vFormEntrepriseComplete;
        $this->vPeriode = "display :none";
    }

    function setVEntreprise($vEntreprise) {
        $this->vEntreprise = $vEntreprise;
        $this->vPeriode = "display :none";
    }

    function setVPeriode($vPeriode) {
        $this->vPeriode = $vPeriode;
        $this->vPeriode = "display :none";
    }

    function setVRecap($vRecap) {
        $this->vRecap = $vRecap;
        $this->vPeriode = "display :none";
    }
}

