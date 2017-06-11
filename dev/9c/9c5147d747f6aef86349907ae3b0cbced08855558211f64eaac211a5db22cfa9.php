<?php

/* formulaires/stagiaire_periode_date.twig */
class __TwigTemplate_8bb6e82f47d5e918b32b16244acd420258ac3b4f757226be41a5fcaadc8e96fb extends Twig_Template
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

        <form method=\"Post\" action=\"stagiaire.php?vue=ajout\">
            
            <div class=\"row\">
                <div class=\"form-group col-md-offset-4 col-md-4\">
                    <label class=\"col-md-12 col-form-label\">Date début de stage</label>
                    <input type=\"date\" class=\"form-control\" name=\"dateDebut\" id=\"dateDebut\">
                </div>
                <div class=\"form-group col-md-offset-4 col-md-4\">
                    <label for=\"dateFin\" class=\"col-md-12 col-form-label\">Date fin de stage</label>
                    <input type=\"date\" class=\"form-control\" name=\"dateFin\" id=\"dateFin\">
                </div>
            </div>
            <div class=\"row\">
            <div class=\"form-group\">
                <label for=\"dateFin\" class=\"col-md-2 col-form-label\">poste :</label>
                <input type=\"text\" class=\"form-control\" name=\"poste\" id=\"poste\">
            </div>
            <div class=\"form-group\">
                <label for=\"activite\" class=\"col-md-2 col-form-label\">activitées:</label>
                <textarea class=\"form-control\" rows=\"5\" id=\"activite\" name=\"activite\"></textarea>
            </div>
            </div>

            <button name=\"date\" type=\"submit\" class=\"btn btn-default\">envoyer</button>
        </form>
";
    }

    public function getTemplateName()
    {
        return "formulaires/stagiaire_periode_date.twig";
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
        return new Twig_Source("", "formulaires/stagiaire_periode_date.twig", "C:\\wamp64\\www\\gds_web4\\vues\\formulaires\\stagiaire_periode_date.twig");
    }
}
