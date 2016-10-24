<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b467187de99cdb1b918aa8e51e211310f3e9e92e032ee13cdf4dc66cf9433d9e extends Twig_Template
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
        $__internal_1b362f9e69e0d4c1007338d6964b3d4c780619bb43b36b67d5efde73ca4495d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b362f9e69e0d4c1007338d6964b3d4c780619bb43b36b67d5efde73ca4495d2->enter($__internal_1b362f9e69e0d4c1007338d6964b3d4c780619bb43b36b67d5efde73ca4495d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1b362f9e69e0d4c1007338d6964b3d4c780619bb43b36b67d5efde73ca4495d2->leave($__internal_1b362f9e69e0d4c1007338d6964b3d4c780619bb43b36b67d5efde73ca4495d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
