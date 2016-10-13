<?php

/* @LouvreReservation/Reservation/index.html.twig */
class __TwigTemplate_b715ff17a7db8243db61ed795820ea566124ba462229fce6790b539002481829 extends Twig_Template
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
        $__internal_ce142a6adffdb499b54cb04e53d45796d6d8c75087cc9c82704e4924632041e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce142a6adffdb499b54cb04e53d45796d6d8c75087cc9c82704e4924632041e2->enter($__internal_ce142a6adffdb499b54cb04e53d45796d6d8c75087cc9c82704e4924632041e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LouvreReservation/Reservation/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <body>
        Hello World!
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </body>
</html>
";
        
        $__internal_ce142a6adffdb499b54cb04e53d45796d6d8c75087cc9c82704e4924632041e2->leave($__internal_ce142a6adffdb499b54cb04e53d45796d6d8c75087cc9c82704e4924632041e2_prof);

    }

    public function getTemplateName()
    {
        return "@LouvreReservation/Reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <body>
        Hello World!
        {{ form(form) }}
    </body>
</html>
";
    }
}
