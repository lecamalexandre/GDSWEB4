/* Tableau */
$(document).ready(function () {
$('#tableau').DataTable({"language": {"url":"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"}});
});


 function ajoutPeriode() {
        //document.getElementById("periode").style.display="block";
        $('.ajoutPeriode').slideToggle();
        }
        
        function FermerAjoutPeriode() {
        $('.ajoutPeriode').slideToggle();
        document.getElementById("recap").style.display="none";
        }
        
        function formVide() { 
        document.getElementById("form_entreprise_vide").style.display="block";
        $('.ajoutPeriode').slideToggle();
        
        }
        
        function ajoutTuteur() { 
        document.getElementById("tuteur_ajout").style.display="block";
        document.getElementById("tuteur_liste").style.display="none";    
        
        
        }