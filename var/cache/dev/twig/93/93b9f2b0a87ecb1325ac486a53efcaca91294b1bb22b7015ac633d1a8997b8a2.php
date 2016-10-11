<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_bd93ad017cce920e3fddc1ffe1775b7b852945e51dd10cc25fed70487d5ca7e6 extends Twig_Template
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
        $__internal_851c4feb428f74a8b4b85ae747abc10d105bc410bda7cd5488735676b0791e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851c4feb428f74a8b4b85ae747abc10d105bc410bda7cd5488735676b0791e56->enter($__internal_851c4feb428f74a8b4b85ae747abc10d105bc410bda7cd5488735676b0791e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_851c4feb428f74a8b4b85ae747abc10d105bc410bda7cd5488735676b0791e56->leave($__internal_851c4feb428f74a8b4b85ae747abc10d105bc410bda7cd5488735676b0791e56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
