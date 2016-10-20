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
        $__internal_07c0140b3d58655b6bde68c9958d56636497a74ebd7d74c68bf2c3bd52e1f4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c0140b3d58655b6bde68c9958d56636497a74ebd7d74c68bf2c3bd52e1f4a0->enter($__internal_07c0140b3d58655b6bde68c9958d56636497a74ebd7d74c68bf2c3bd52e1f4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_07c0140b3d58655b6bde68c9958d56636497a74ebd7d74c68bf2c3bd52e1f4a0->leave($__internal_07c0140b3d58655b6bde68c9958d56636497a74ebd7d74c68bf2c3bd52e1f4a0_prof);

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
