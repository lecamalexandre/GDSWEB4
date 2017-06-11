<?php

/* stagiaire.twig */
class __TwigTemplate_f5e34efcb0f3d2fd73838df07be1c315d6afe9922ebed7e68b2dfe2aba9b7e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "stagiaire.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "    
    <span style=\"text-align: right\">
        <form method=\"get\" action=\"stagiaire.php\">
            Session : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesStagiaire"]) ? $context["donneesStagiaire"] : null), "nom", array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["donneesStagiaire"]) ? $context["donneesStagiaire"] : null), "prenom", array(), "array"), "html", null, true);
        echo "
            <button name=\"deconnexion\" type=\"submit\" class=\"btn btn-default\">Déconexion</button>
        </form>
    </span>                
                    <br>
<section class=\"row stagiaire\">   
    <button class=\"btn btn-primary btn-lg btn-block\" onclick=\"ajoutPeriode()\">Ajouter une période</button><br>
    <div id=\"ajoutPeriode\" class=\"ajoutPeriode col-lg-12\" style=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "ajoutPeriode", array(), "array"), "html", null, true);
        echo "\">

        <div id=\"periode\" class=\"periode block col-lg-offset-1 col-lg-10\" style=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "periode", array(), "array"), "html", null, true);
        echo "\">
            ";
        // line 15
        $this->loadTemplate("formulaires/stagiaire_periode_date.twig", "stagiaire.twig", 15)->display($context);
        // line 16
        echo "        </div>

        <div id=\"entreprise\" class=\"entreprise block col-lg-offset-1 col-lg-10\" style=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "entreprise", array(), "array"), "html", null, true);
        echo "\">
            <p>entreprise</p>
            ";
        // line 20
        $this->loadTemplate("tableau.twig", "stagiaire.twig", 20)->display($context);
        // line 21
        echo "            <button class=\"btn btn-primary col-lg-offset-6 col-lg-4\" onclick=\"formVide()\">L'entreprise n'est pas dans la liste</button>
        </div>

        <div id=\"formEntrepriseComplete\" class=\"formEntrepriseComplete block col-lg-offset-1 col-lg-10\" style=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "formEntrepriseComplete", array(), "array"), "html", null, true);
        echo "\">
            <p>formEntrepriseComplete</p>
            ";
        // line 26
        $this->loadTemplate("formulaires/stagiaire_entreprise_complete.twig", "stagiaire.twig", 26)->display($context);
        // line 27
        echo "        </div>

        <div id=\"tuteur_liste\" class=\"tuteur_liste block col-lg-offset-1 col-lg-10\" style=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "tuteur_liste", array(), "array"), "html", null, true);
        echo "\">
            <p>tuteur_liste</p>
            ";
        // line 31
        $this->loadTemplate("tableau.twig", "stagiaire.twig", 31)->display($context);
        // line 32
        echo "            <button class=\"btn btn-primary col-lg-offset-6 col-lg-4\" onclick=\"ajoutTuteur()\">Le tuteur n'est pas dans la liste</button>
        </div>

        <div id=\"tuteur_modif\" class=\"tutueur_modif block col-lg-offset-1 col-lg-10\" style=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "tuteur_modif", array(), "array"), "html", null, true);
        echo "\">
            <p>tuteur_modif</p>
            ";
        // line 37
        $this->loadTemplate("formulaires/modifTuteur.twig", "stagiaire.twig", 37)->display($context);
        // line 38
        echo "        </div>
        
        <div id=\"tuteur_ajout\" class=\"tutueur_modif block col-lg-offset-1 col-lg-10\" style=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "tuteur_ajout", array(), "array"), "html", null, true);
        echo "\">
            <p>tuteur_ajout</p>
            ";
        // line 42
        $this->loadTemplate("formulaires/ajoutTuteur.twig", "stagiaire.twig", 42)->display($context);
        // line 43
        echo "        </div>

        <div id=\"recap\" class=\"recap block col-lg-offset-1 col-lg-10\" style=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vues"]) ? $context["vues"] : null), "recap", array(), "array"), "html", null, true);
        echo "\">
            ";
        // line 46
        $this->loadTemplate("recap.twig", "stagiaire.twig", 46)->display($context);
        // line 47
        echo "        </div>
    </div>

    ";
        // line 50
        $this->loadTemplate("formulaires/stagiaire_entreprise_vide.twig", "stagiaire.twig", 50)->display($context);
        echo " 

</section>

";
    }

    public function getTemplateName()
    {
        return "stagiaire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 50,  125 => 47,  123 => 46,  119 => 45,  115 => 43,  113 => 42,  108 => 40,  104 => 38,  102 => 37,  97 => 35,  92 => 32,  90 => 31,  85 => 29,  81 => 27,  79 => 26,  74 => 24,  69 => 21,  67 => 20,  62 => 18,  58 => 16,  56 => 15,  52 => 14,  47 => 12,  35 => 5,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "stagiaire.twig", "C:\\wamp64\\www\\gds_web4\\vues\\stagiaire.twig");
    }
}
