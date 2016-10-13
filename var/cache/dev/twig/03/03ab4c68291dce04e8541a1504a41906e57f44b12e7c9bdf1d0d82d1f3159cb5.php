<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f336ba053154cdfcf595404dab4fd5c63588c58ea08c7e64b77116b641cb4864 extends Twig_Template
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
        $__internal_156be810dccf294e17cf38a4170c3da17ba7ce8c83f826ce04f6fdd416d8d954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156be810dccf294e17cf38a4170c3da17ba7ce8c83f826ce04f6fdd416d8d954->enter($__internal_156be810dccf294e17cf38a4170c3da17ba7ce8c83f826ce04f6fdd416d8d954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_156be810dccf294e17cf38a4170c3da17ba7ce8c83f826ce04f6fdd416d8d954->leave($__internal_156be810dccf294e17cf38a4170c3da17ba7ce8c83f826ce04f6fdd416d8d954_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
