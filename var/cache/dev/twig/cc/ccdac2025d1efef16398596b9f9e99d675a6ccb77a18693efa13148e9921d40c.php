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
        $__internal_82a9994380e8df0979d7e95768a53f92df1264974f763337aae3d86e77a07fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a9994380e8df0979d7e95768a53f92df1264974f763337aae3d86e77a07fff->enter($__internal_82a9994380e8df0979d7e95768a53f92df1264974f763337aae3d86e77a07fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_82a9994380e8df0979d7e95768a53f92df1264974f763337aae3d86e77a07fff->leave($__internal_82a9994380e8df0979d7e95768a53f92df1264974f763337aae3d86e77a07fff_prof);

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
