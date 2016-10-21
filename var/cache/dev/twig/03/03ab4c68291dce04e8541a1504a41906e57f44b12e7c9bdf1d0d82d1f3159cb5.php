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
        $__internal_924e1575d1499164bd5ea8e86ebc17f8660a3728ffbb8d7ac1aa272412af967c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924e1575d1499164bd5ea8e86ebc17f8660a3728ffbb8d7ac1aa272412af967c->enter($__internal_924e1575d1499164bd5ea8e86ebc17f8660a3728ffbb8d7ac1aa272412af967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_924e1575d1499164bd5ea8e86ebc17f8660a3728ffbb8d7ac1aa272412af967c->leave($__internal_924e1575d1499164bd5ea8e86ebc17f8660a3728ffbb8d7ac1aa272412af967c_prof);

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
