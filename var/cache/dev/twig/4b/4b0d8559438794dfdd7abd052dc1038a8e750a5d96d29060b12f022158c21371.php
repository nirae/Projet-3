<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_eebe866a87dcae27fae3c830d58414be76ec36463e5c41d0142dce00e6a9aaf9 extends Twig_Template
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
        $__internal_34c72777420052b4f00130216af079ed1ef477259f9a21c7e2ee2f59d4fd3a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c72777420052b4f00130216af079ed1ef477259f9a21c7e2ee2f59d4fd3a67->enter($__internal_34c72777420052b4f00130216af079ed1ef477259f9a21c7e2ee2f59d4fd3a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_34c72777420052b4f00130216af079ed1ef477259f9a21c7e2ee2f59d4fd3a67->leave($__internal_34c72777420052b4f00130216af079ed1ef477259f9a21c7e2ee2f59d4fd3a67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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