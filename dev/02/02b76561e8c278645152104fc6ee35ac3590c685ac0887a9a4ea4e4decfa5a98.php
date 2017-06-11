<?php

/* formulaires/stagiaire_entreprise_vide.twig */
class __TwigTemplate_73fd85296a650b808989aac7701503ae2b3217192d477b9f0bd16020b061b567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id='form_entreprise_vide' class=\"form_entreprise_vide col-md-offset-2 col-md-8\">
    <h1>Enregistrer une nouvelle entreprise</h1>

    <form action=\"stagiaire.php?vue=ajout\" method=\"post\" id=\"form_entreprise\">
        <div class=\"form-group\">
            <label>Raison Sociale</label>
            <input class=\"form-control\" type=\"text\" name=\"nom\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Numéro</label>
            <input class=\"form-control\" type=\"text\" name=\"adnum\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Rue</label>
            <input class=\"form-control\" type=\"text\" name=\"adrue\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Code Postal</label>
            <input class=\"form-control\" type=\"text\" name=\"adcp\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Ville</label>
            <input class=\"form-control\" type=\"text\" name=\"adville\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Tel</label>
            <input class=\"form-control\" type=\"text\" name=\"tel\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Mail</label>
            <input class=\"form-control\" type=\"text\" name=\"mail\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Siret</label>
            <input class=\"form-control\" type=\"text\" name=\"siret\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">APE</label>
            <input class=\"form-control\" type=\"text\" name=\"ape\">
        </div>
        <button name=\"form_entreprise_creer\" type=\"submit\" class=\"btn btn-default\">Envoyer</button>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "formulaires/stagiaire_entreprise_vide.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "formulaires/stagiaire_entreprise_vide.twig", "C:\\wamp64\\www\\gds_web4\\vues\\formulaires\\stagiaire_entreprise_vide.twig");
    }
}
