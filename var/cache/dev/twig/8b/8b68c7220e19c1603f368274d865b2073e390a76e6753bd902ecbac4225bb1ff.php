<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_753ad71c3f9c8e48bea4b4469071d78323d07443351dcab03b880b07eedeae51 extends Twig_Template
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
        $__internal_d26c5a5257fc780905d088b267e86dc04dd6758e089c1743c2e095811e6c6a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26c5a5257fc780905d088b267e86dc04dd6758e089c1743c2e095811e6c6a3b->enter($__internal_d26c5a5257fc780905d088b267e86dc04dd6758e089c1743c2e095811e6c6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d26c5a5257fc780905d088b267e86dc04dd6758e089c1743c2e095811e6c6a3b->leave($__internal_d26c5a5257fc780905d088b267e86dc04dd6758e089c1743c2e095811e6c6a3b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
