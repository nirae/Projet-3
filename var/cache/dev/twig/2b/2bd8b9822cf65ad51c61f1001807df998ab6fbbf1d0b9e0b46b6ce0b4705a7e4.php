<?php

/* base.html.twig */
class __TwigTemplate_e6f97e52f27c85a88ea5bf2edae0f8cc14eb801e40834c60c24440b214a76817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1139042bfb421b98e17bcc1f415bc41b428c75656c251d6c2f6c64923b99c145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1139042bfb421b98e17bcc1f415bc41b428c75656c251d6c2f6c64923b99c145->enter($__internal_1139042bfb421b98e17bcc1f415bc41b428c75656c251d6c2f6c64923b99c145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1139042bfb421b98e17bcc1f415bc41b428c75656c251d6c2f6c64923b99c145->leave($__internal_1139042bfb421b98e17bcc1f415bc41b428c75656c251d6c2f6c64923b99c145_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f8464fc05759f952dfd6170d9bab1daa0c97d1aa1d4113aeec26176bde5b051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8464fc05759f952dfd6170d9bab1daa0c97d1aa1d4113aeec26176bde5b051->enter($__internal_7f8464fc05759f952dfd6170d9bab1daa0c97d1aa1d4113aeec26176bde5b051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7f8464fc05759f952dfd6170d9bab1daa0c97d1aa1d4113aeec26176bde5b051->leave($__internal_7f8464fc05759f952dfd6170d9bab1daa0c97d1aa1d4113aeec26176bde5b051_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b039d15a8ad29f236e9c77099e4e61df4a85cdc9b3db3a20964c3fa51c328f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b039d15a8ad29f236e9c77099e4e61df4a85cdc9b3db3a20964c3fa51c328f9d->enter($__internal_b039d15a8ad29f236e9c77099e4e61df4a85cdc9b3db3a20964c3fa51c328f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b039d15a8ad29f236e9c77099e4e61df4a85cdc9b3db3a20964c3fa51c328f9d->leave($__internal_b039d15a8ad29f236e9c77099e4e61df4a85cdc9b3db3a20964c3fa51c328f9d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_35ee273870251a504c90feffed6b4ccba452b2e7960d2414027dfe4a0c8d60ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ee273870251a504c90feffed6b4ccba452b2e7960d2414027dfe4a0c8d60ba->enter($__internal_35ee273870251a504c90feffed6b4ccba452b2e7960d2414027dfe4a0c8d60ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_35ee273870251a504c90feffed6b4ccba452b2e7960d2414027dfe4a0c8d60ba->leave($__internal_35ee273870251a504c90feffed6b4ccba452b2e7960d2414027dfe4a0c8d60ba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb98a3d4fe35a5bd87dcb7eca775e616ef252d928347f937f74cae701a40630e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb98a3d4fe35a5bd87dcb7eca775e616ef252d928347f937f74cae701a40630e->enter($__internal_cb98a3d4fe35a5bd87dcb7eca775e616ef252d928347f937f74cae701a40630e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cb98a3d4fe35a5bd87dcb7eca775e616ef252d928347f937f74cae701a40630e->leave($__internal_cb98a3d4fe35a5bd87dcb7eca775e616ef252d928347f937f74cae701a40630e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
