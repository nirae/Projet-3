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
        $__internal_903aff15e353232ad6d891247feec6ee6583eb60acdb3e9dfdb3b3e8baa574f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903aff15e353232ad6d891247feec6ee6583eb60acdb3e9dfdb3b3e8baa574f8->enter($__internal_903aff15e353232ad6d891247feec6ee6583eb60acdb3e9dfdb3b3e8baa574f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LouvreReservationBundle:Reservation:recapitulatif.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <body>
        Recap

        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "email", array()), "html", null, true);
        echo "
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "orderNumber", array()), "html", null, true);
        echo "
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "calculationAge", array()), "html", null, true);
        echo "
        ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["dayVisit"]) ? $context["dayVisit"] : $this->getContext($context, "dayVisit")), "html", null, true);
        echo "
    </body>
</html>
";
        
        $__internal_903aff15e353232ad6d891247feec6ee6583eb60acdb3e9dfdb3b3e8baa574f8->leave($__internal_903aff15e353232ad6d891247feec6ee6583eb60acdb3e9dfdb3b3e8baa574f8_prof);

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
        return array (  41 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <body>
        Recap

        {{ order.email }}
        {{ order.orderNumber }}
        {{ order.calculationAge }}
        {{ dayVisit }}
    </body>
</html>
";
    }
}
