<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f11c63d30200d8ef54d65770ac24be84c6edf734acd27337c942bb659c3a25f2 extends Twig_Template
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
        $__internal_b0baf45a1496fc5480cbfa049deff4096cab6bccea82d2e15ecfa70fe803ccb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0baf45a1496fc5480cbfa049deff4096cab6bccea82d2e15ecfa70fe803ccb1->enter($__internal_b0baf45a1496fc5480cbfa049deff4096cab6bccea82d2e15ecfa70fe803ccb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b0baf45a1496fc5480cbfa049deff4096cab6bccea82d2e15ecfa70fe803ccb1->leave($__internal_b0baf45a1496fc5480cbfa049deff4096cab6bccea82d2e15ecfa70fe803ccb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
