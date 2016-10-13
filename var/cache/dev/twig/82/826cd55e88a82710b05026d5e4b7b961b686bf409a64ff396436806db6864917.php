<?php

/* LouvreReservationBundle:Reservation:recapitulatif.html.twig */
class __TwigTemplate_6667a03182ed73854e75ca6edd25de622a3a4dbbef469df0996cebcc780c3f97 extends Twig_Template
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
        $__internal_91acdea99deb7e3e572e128874f67156bd6ca4b898b9fa38526a12839e2b2c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91acdea99deb7e3e572e128874f67156bd6ca4b898b9fa38526a12839e2b2c4b->enter($__internal_91acdea99deb7e3e572e128874f67156bd6ca4b898b9fa38526a12839e2b2c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LouvreReservationBundle:Reservation:recapitulatif.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <body>
        Recap

        ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "
    </body>
</html>
";
        
        $__internal_91acdea99deb7e3e572e128874f67156bd6ca4b898b9fa38526a12839e2b2c4b->leave($__internal_91acdea99deb7e3e572e128874f67156bd6ca4b898b9fa38526a12839e2b2c4b_prof);

    }

    public function getTemplateName()
    {
        return "LouvreReservationBundle:Reservation:recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <body>
        Recap

        {{ email }}
    </body>
</html>
";
    }
}
