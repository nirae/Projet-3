<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1edc732a8b4bd8e4392a5d79a0259e2de1626946067f40cc72e697273e5634aa extends Twig_Template
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
        $__internal_66e224c658be96dbba0f8684517b11fafb65cc3c6b97dd5c4b5dc96ba187c2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e224c658be96dbba0f8684517b11fafb65cc3c6b97dd5c4b5dc96ba187c2eb->enter($__internal_66e224c658be96dbba0f8684517b11fafb65cc3c6b97dd5c4b5dc96ba187c2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_66e224c658be96dbba0f8684517b11fafb65cc3c6b97dd5c4b5dc96ba187c2eb->leave($__internal_66e224c658be96dbba0f8684517b11fafb65cc3c6b97dd5c4b5dc96ba187c2eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
