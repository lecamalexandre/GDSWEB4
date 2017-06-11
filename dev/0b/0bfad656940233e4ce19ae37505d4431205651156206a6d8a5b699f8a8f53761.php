<?php

/* recap.twig */
class __TwigTemplate_a2dd5e5c22c075efae0186274452382df0b61f6024c088a77d607c3e27d56a62 extends Twig_Template
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
        echo " 


<section class=\"recap row\">
    <div class=\"col-md-12 t3\">Stage du ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesPeriode"]) ? $context["donneesPeriode"] : null), "dateDebut", array(), "array"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesPeriode"]) ? $context["donneesPeriode"] : null), "dateFin", array(), "array"), "html", null, true);
        echo "</div>

    <section class=\"row\">
        <div class=\"col-md-5\">
            <section class=\"row\">
                <div class=\"col-lg-offset-1 col-md-8 cadre\"><span class=\"t4\">Stagiaire</span>
                    <div class='donnees col-lg-offset-1 row col-md-11'>
                        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesStagiaire"]) ? $context["donneesStagiaire"] : null), "nom", array(), "array"), "html", null, true);
        echo "<br>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesStagiaire"]) ? $context["donneesStagiaire"] : null), "prenom", array(), "array"), "html", null, true);
        echo "<br>
                        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesStagiaire"]) ? $context["donneesStagiaire"] : null), "mail", array(), "array"), "html", null, true);
        echo "<br>
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesStagiaire"]) ? $context["donneesStagiaire"] : null), "tel", array(), "array"), "html", null, true);
        echo "<br> 
                    </div>
                </div>
            </section>
            <section class=\"row\">
                <div class=\"col-lg-offset-1 col-md-8\"><span class=\"t4\">Tuteur</span>
                    <div class='ligne donnees col-lg-offset-1 row col-md-11'>
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesTuteur"]) ? $context["donneesTuteur"] : null), "nom", array(), "array"), "html", null, true);
        echo "
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesTuteur"]) ? $context["donneesTuteur"] : null), "prenom", array(), "array"), "html", null, true);
        echo "<br>
                    </div>
                </div>    
            </section>
        </div>


        <div class=\"col-md-7\">
            <section class=\"row\">
                <div class=\"col-lg-offset-1 col-md-8 cadre\"><span class=\"t4\">Entreprise</span>
                    <div class='donnees col-lg-offset-1 row col-md-11'>
                        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "nom", array(), "array"), "html", null, true);
        echo "<br>
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adnum", array(), "array"), "html", null, true);
        echo "
                        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adrue", array(), "array"), "html", null, true);
        echo "<br>
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adcp", array(), "array"), "html", null, true);
        echo "
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "adville", array(), "array"), "html", null, true);
        echo "<br>
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "tel", array(), "array"), "html", null, true);
        echo "<br>
                        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesEntreprise"]) ? $context["donneesEntreprise"] : null), "mail", array(), "array"), "html", null, true);
        echo "
                    </div>
                </div>
            </section>
            <section class=\"row\">
                <div class=\"col-md-12\"><span class=\"t4\">Poste</span>
                    <div class='ligne donnees col-lg-offset-1 row col-md-11'>
                        ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesPeriode"]) ? $context["donneesPeriode"] : null), "poste", array(), "array"), "html", null, true);
        echo "<br>                
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class=\"row\">
        <div class=\"col-md-offset-1 col-md-11\"><span class=\"t4\">Activités</span> </div>
        <div class='activite col-lg-offset-1 row col-md-10'>
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesPeriode"]) ? $context["donneesPeriode"] : null), "activite", array(), "array"), "html", null, true);
        echo "
        </div>   
    </section>
        <div class=\"row\">
        <form method=\"get\" action=\"stagiaire.php\">
            <button type=\"submit\" class=\"btn btn-default col-lg-offset-1 col-md-1\">Valider</button>
        </form>
        <form method=\"get\" action=\"stagiaire.php?\">
            <button type=\"submit\" class=\"btn btn-default col-lg-offset-1 col-md-1\">Annuler</button>
            <input type=\"hidden\" name=\"annuler\" value=\"\">
        </form>
        </div>
        
</section>

";
    }

    public function getTemplateName()
    {
        return "recap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  111 => 47,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  63 => 23,  59 => 22,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "recap.twig", "C:\\wamp64\\www\\gds_web4\\vues\\recap.twig");
    }
}
