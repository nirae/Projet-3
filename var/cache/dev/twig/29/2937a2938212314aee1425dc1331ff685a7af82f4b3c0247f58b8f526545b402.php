<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4cd0d278b00fb900e76971dc4775b90488a9ed9253214a6410aa5024194ceff2 extends Twig_Template
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
        $__internal_ae84c8288491803c9a0f4f144d41c1baf96de430a0c8114d975c75f072fc3867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae84c8288491803c9a0f4f144d41c1baf96de430a0c8114d975c75f072fc3867->enter($__internal_ae84c8288491803c9a0f4f144d41c1baf96de430a0c8114d975c75f072fc3867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_ae84c8288491803c9a0f4f144d41c1baf96de430a0c8114d975c75f072fc3867->leave($__internal_ae84c8288491803c9a0f4f144d41c1baf96de430a0c8114d975c75f072fc3867_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
