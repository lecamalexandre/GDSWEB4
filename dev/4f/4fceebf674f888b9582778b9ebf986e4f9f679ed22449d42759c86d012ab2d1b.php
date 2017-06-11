<?php

/* formulaires/stagiaire_entreprise_complete.twig */
class __TwigTemplate_2581f6eb20ca52f2bfc52200bef21ac30f0bc94e05851c4b0507903d5a0e9003 extends Twig_Template
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
        echo "<div id='form_entreprise_complete' class=\"form_entreprise_complete\">
    <h1>Information de l'entreprise</h1>

    <form action=\"stagiaire.php?vue=ajout\" method=\"post\" id=\"form_entreprise\">
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Raison Sociale</label>
            <input class=\"form-control\"  type=\"text\" name=\"nom\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "nom", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Numéro</label>
            <input class=\"form-control\"  type=\"text\" name=\"adnum\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adnum", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Rue</label>
            <input class=\"form-control\"  type=\"text\" name=\"adrue\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adrue", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Code Postal</label>
            <input class=\"form-control\"  type=\"text\" name=\"adcp\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adcp", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Ville</label>
            <input class=\"form-control\"  type=\"text\" name=\"adville\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adville", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Tel</label>
            <input class=\"form-control\"  type=\"text\" name=\"tel\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "tel", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Mail</label>
            <input class=\"form-control\"  type=\"text\" name=\"mail\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "mail", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">Siret</label>
            <input class=\"form-control\"  type=\"text\" name=\"siret\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "siret", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-2 col-form-label\">APE</label>
            <input class=\"form-control\"  type=\"text\" name=\"ape\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "ape", array(), "array"), "html", null, true);
        echo "\">
        </div>
        <button name=\"form_entreprise_modifier\" type=\"submit\" class=\"btn btn-default\">Modifier</button>
        <button name=\"valider\" type=\"submit\" class=\"btn btn-default\">Valider</button>
        
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "formulaires/stagiaire_entreprise_complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 39,  76 => 35,  69 => 31,  62 => 27,  55 => 23,  48 => 19,  41 => 15,  34 => 11,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "formulaires/stagiaire_entreprise_complete.twig", "C:\\wamp64\\www\\gds_web4\\vues\\formulaires\\stagiaire_entreprise_complete.twig");
    }
}
