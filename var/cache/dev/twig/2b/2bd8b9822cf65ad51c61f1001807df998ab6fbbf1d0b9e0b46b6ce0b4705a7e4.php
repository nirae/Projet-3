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
        $__internal_45a0675422a112d60886d9d05b125b71ed46d8eaf9ccb3a6ce938cff68ea8a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a0675422a112d60886d9d05b125b71ed46d8eaf9ccb3a6ce938cff68ea8a57->enter($__internal_45a0675422a112d60886d9d05b125b71ed46d8eaf9ccb3a6ce938cff68ea8a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_45a0675422a112d60886d9d05b125b71ed46d8eaf9ccb3a6ce938cff68ea8a57->leave($__internal_45a0675422a112d60886d9d05b125b71ed46d8eaf9ccb3a6ce938cff68ea8a57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2d383d7a34deb6a3ffd7402429420a08f7696c31be22a2c994d1bc3c5458ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d383d7a34deb6a3ffd7402429420a08f7696c31be22a2c994d1bc3c5458ead->enter($__internal_c2d383d7a34deb6a3ffd7402429420a08f7696c31be22a2c994d1bc3c5458ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c2d383d7a34deb6a3ffd7402429420a08f7696c31be22a2c994d1bc3c5458ead->leave($__internal_c2d383d7a34deb6a3ffd7402429420a08f7696c31be22a2c994d1bc3c5458ead_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_846bcc996d34a4b6c32693173588e0ebedbe738f67e69bb5b0038b70e067db06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846bcc996d34a4b6c32693173588e0ebedbe738f67e69bb5b0038b70e067db06->enter($__internal_846bcc996d34a4b6c32693173588e0ebedbe738f67e69bb5b0038b70e067db06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_846bcc996d34a4b6c32693173588e0ebedbe738f67e69bb5b0038b70e067db06->leave($__internal_846bcc996d34a4b6c32693173588e0ebedbe738f67e69bb5b0038b70e067db06_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_305e7e95fc5a1eb1ecd0a8023d5916661d5e64f044ed03664e87cde9e5d895c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305e7e95fc5a1eb1ecd0a8023d5916661d5e64f044ed03664e87cde9e5d895c0->enter($__internal_305e7e95fc5a1eb1ecd0a8023d5916661d5e64f044ed03664e87cde9e5d895c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_305e7e95fc5a1eb1ecd0a8023d5916661d5e64f044ed03664e87cde9e5d895c0->leave($__internal_305e7e95fc5a1eb1ecd0a8023d5916661d5e64f044ed03664e87cde9e5d895c0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_259afb21f2e2d63ff7f2401e977bf23c2da011ad843f12280bf4761577e3cbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259afb21f2e2d63ff7f2401e977bf23c2da011ad843f12280bf4761577e3cbba->enter($__internal_259afb21f2e2d63ff7f2401e977bf23c2da011ad843f12280bf4761577e3cbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_259afb21f2e2d63ff7f2401e977bf23c2da011ad843f12280bf4761577e3cbba->leave($__internal_259afb21f2e2d63ff7f2401e977bf23c2da011ad843f12280bf4761577e3cbba_prof);

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
