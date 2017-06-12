<?php

/* index.twig */
class __TwigTemplate_766cbd3a6ad7dc48f6a38e3e709a88b5294510766e1d5af73416711cb8514483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.twig", 1);
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
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 align=\"center\" class=\"panel-title\">Identification</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" method=\"Post\" action=\"index.php\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Identifiant\" name=\"login\" type=\"login\" autofocus>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" value=\"\">
                            </div>

                            <button type=\"submit\" value=\"valider\" class=\"btn btn-lg btn-success btn-block\">Se connecter</button>
                            <br>
                            <br>
                            <br>
                            <br> ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "



                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "C:\\wamp64\\www\\gds_web4\\vues\\index.twig");
    }
}
