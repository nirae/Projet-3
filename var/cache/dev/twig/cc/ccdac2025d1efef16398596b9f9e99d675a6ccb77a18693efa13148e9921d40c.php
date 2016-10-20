<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_62c4315feb738e1b22b912d9c7366458feb9d35a8c91f5c53d5b0c90aaccb5d8 extends Twig_Template
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
        $__internal_c7ce52bcfc12f169e9b6350123c4e6d6d9f6f9c2df33c735640cb16e66fe0944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ce52bcfc12f169e9b6350123c4e6d6d9f6f9c2df33c735640cb16e66fe0944->enter($__internal_c7ce52bcfc12f169e9b6350123c4e6d6d9f6f9c2df33c735640cb16e66fe0944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c7ce52bcfc12f169e9b6350123c4e6d6d9f6f9c2df33c735640cb16e66fe0944->leave($__internal_c7ce52bcfc12f169e9b6350123c4e6d6d9f6f9c2df33c735640cb16e66fe0944_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
