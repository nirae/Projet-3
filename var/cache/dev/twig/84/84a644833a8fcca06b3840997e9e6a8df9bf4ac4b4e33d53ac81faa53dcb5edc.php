<?php

/* LouvreReservationBundle:Reservation:index.html.twig */
class __TwigTemplate_a5648076c62305637e934930b6706162d030fd086752f02aa3e2dac7104cffaf extends Twig_Template
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
        $__internal_8c0e319768701d87eefbcb86fdc7655c7d367f14253177a8243c91edfe4d5962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0e319768701d87eefbcb86fdc7655c7d367f14253177a8243c91edfe4d5962->enter($__internal_8c0e319768701d87eefbcb86fdc7655c7d367f14253177a8243c91edfe4d5962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LouvreReservationBundle:Reservation:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<body>
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div>
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayVisit", array()), 'label', array("label" => "Jour de la visite"));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayVisit", array()), 'errors');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayVisit", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "halfDay", array()), 'label', array("label" => "Demi-journée"));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "halfDay", array()), 'errors');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "halfDay", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tickets", array()), 'label', array("label" => "Billets :"));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tickets", array()), 'errors');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tickets", array()), 'widget');
        echo "
        </div>
        ";
        // line 28
        echo "    <a href=\"#\" id=\"add_ticket\" class=\"btn btn-default\">Ajouter un billet</a>
    ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    ";
        // line 33
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">

    // Gestion des ajouts de billets
    \$(document).ready(function() {
        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
        var \$container = \$('div#louvre_reservationbundle_order_tickets');

        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = \$container.find(':input').length;

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        \$('#add_ticket').click(function(e) {
            addTicket(\$container);

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });

        // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
        if (index == 0) {
            addTicket(\$container);
        }

        // La fonction qui ajoute un formulaire CategoryType
        function addTicket(\$container) {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte \"__name__label__\" qu'il contient par le label du champ
            // - le texte \"__name__\" qu'il contient par le numéro du champ
            var template = \$container.attr('data-prototype')
            .replace(/__name__label__/g, 'Billet')
            .replace(/__name__/g,        index)
            ;

            // On crée un objet jquery qui contient ce template
            var \$prototype = \$(template);

            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
            if (index != 0) {
                addDeleteLink(\$prototype);
            }

            // On ajoute le prototype modifié à la fin de la balise <div>
            \$container.append(\$prototype);

            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
            index++;
        }

        // La fonction qui ajoute un lien de suppression d'une catégorie
        function addDeleteLink(\$prototype) {
            // Création du lien
            var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
            // Ajout du lien
            \$prototype.append(\$deleteLink);
            // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
            \$deleteLink.click(function(e) {
                \$prototype.remove();

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });
    </script>
</body>
</html>
";
        
        $__internal_8c0e319768701d87eefbcb86fdc7655c7d367f14253177a8243c91edfe4d5962->leave($__internal_8c0e319768701d87eefbcb86fdc7655c7d367f14253177a8243c91edfe4d5962_prof);

    }

    public function getTemplateName()
    {
        return "LouvreReservationBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  95 => 29,  92 => 28,  87 => 25,  83 => 24,  79 => 23,  73 => 20,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  51 => 13,  45 => 10,  41 => 9,  37 => 8,  31 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<body>
    {{ form_start(form) }}
        {{ form_errors(form) }}

        <div>
            {{ form_label(form.dayVisit, 'Jour de la visite') }}
            {{ form_errors(form.dayVisit) }}
            {{ form_widget(form.dayVisit) }}
        </div>
        <div>
            {{ form_label(form.halfDay, 'Demi-journée') }}
            {{ form_errors(form.halfDay) }}
            {{ form_widget(form.halfDay) }}
        </div>
        <div>
            {{ form_label(form.email, 'Email') }}
            {{ form_errors(form.email) }}
            {{ form_widget(form.email) }}
        </div>
        <div>
            {{ form_label(form.tickets, 'Billets :') }}
            {{ form_errors(form.tickets) }}
            {{ form_widget(form.tickets) }}
        </div>
        {# A terminer #}
    <a href=\"#\" id=\"add_ticket\" class=\"btn btn-default\">Ajouter un billet</a>
    {{ form_end(form) }}


    {# Ici temporairement #}

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">

    // Gestion des ajouts de billets
    \$(document).ready(function() {
        // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
        var \$container = \$('div#louvre_reservationbundle_order_tickets');

        // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
        var index = \$container.find(':input').length;

        // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
        \$('#add_ticket').click(function(e) {
            addTicket(\$container);

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });

        // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
        if (index == 0) {
            addTicket(\$container);
        }

        // La fonction qui ajoute un formulaire CategoryType
        function addTicket(\$container) {
            // Dans le contenu de l'attribut « data-prototype », on remplace :
            // - le texte \"__name__label__\" qu'il contient par le label du champ
            // - le texte \"__name__\" qu'il contient par le numéro du champ
            var template = \$container.attr('data-prototype')
            .replace(/__name__label__/g, 'Billet')
            .replace(/__name__/g,        index)
            ;

            // On crée un objet jquery qui contient ce template
            var \$prototype = \$(template);

            // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
            if (index != 0) {
                addDeleteLink(\$prototype);
            }

            // On ajoute le prototype modifié à la fin de la balise <div>
            \$container.append(\$prototype);

            // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
            index++;
        }

        // La fonction qui ajoute un lien de suppression d'une catégorie
        function addDeleteLink(\$prototype) {
            // Création du lien
            var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
            // Ajout du lien
            \$prototype.append(\$deleteLink);
            // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
            \$deleteLink.click(function(e) {
                \$prototype.remove();

                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
            });
        }
    });
    </script>
</body>
</html>
";
    }
}
