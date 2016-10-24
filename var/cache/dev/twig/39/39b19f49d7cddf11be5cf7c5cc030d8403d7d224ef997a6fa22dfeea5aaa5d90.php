<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3775632b2a47f1f70fe56e6107e51c363d1f372a210d5497ebcba63c0b473185 extends Twig_Template
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
        $__internal_7bd189b0d4ce10c63b346790596e00576ba041f5cd8e029b95370df174889bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd189b0d4ce10c63b346790596e00576ba041f5cd8e029b95370df174889bb1->enter($__internal_7bd189b0d4ce10c63b346790596e00576ba041f5cd8e029b95370df174889bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7bd189b0d4ce10c63b346790596e00576ba041f5cd8e029b95370df174889bb1->leave($__internal_7bd189b0d4ce10c63b346790596e00576ba041f5cd8e029b95370df174889bb1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
