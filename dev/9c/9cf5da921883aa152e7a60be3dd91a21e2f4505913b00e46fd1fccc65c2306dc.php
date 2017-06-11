<?php

/* formulaires/ajoutTuteur.twig */
class __TwigTemplate_5682d2ca2e7850fcac3afac15335488203a3446f617bb56ae2df938199ba7bb1 extends Twig_Template
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
        // line 2
        echo "
    <form action=\"stagiaire.php?vue=ajout\" method=\"post\" id=\"ajout_tuteur\" class='ajout_tuteur'>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Nom</label>
            <input class=\"form-control\"  type=\"text\" name=\"nom\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Prénom</label>
            <input class=\"form-control\"  type=\"text\" name=\"prenom\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Couriel</label>
            <input class=\"form-control\"  type=\"text\" name=\"mail\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Tel</label>
            <input class=\"form-control\"  type=\"text\" name=\"tel\">
        </div>
        <button name=\"ajouterTuteur\" type=\"submit\" class=\"btn btn-default\">Ajouter</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "formulaires/ajoutTuteur.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "formulaires/ajoutTuteur.twig", "C:\\wamp64\\www\\gds_web4\\vues\\formulaires\\ajoutTuteur.twig");
    }
}
