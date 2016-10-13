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
        $__internal_c37aaef48ef9841e8ad3de4b948105328893c90e46c675329daf915fb7c00fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37aaef48ef9841e8ad3de4b948105328893c90e46c675329daf915fb7c00fcf->enter($__internal_c37aaef48ef9841e8ad3de4b948105328893c90e46c675329daf915fb7c00fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LouvreReservationBundle:Reservation:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<body>
    Hello World!
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    <a href=\"#\" id=\"add_ticket\" class=\"btn btn-default\">Ajouter un billet</a>
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
        } else {
            // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
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
            addDeleteLink(\$prototype);

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
        
        $__internal_c37aaef48ef9841e8ad3de4b948105328893c90e46c675329daf915fb7c00fcf->leave($__internal_c37aaef48ef9841e8ad3de4b948105328893c90e46c675329daf915fb7c00fcf_prof);

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
        return array (  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<body>
    Hello World!
    {{ form(form) }}
    <a href=\"#\" id=\"add_ticket\" class=\"btn btn-default\">Ajouter un billet</a>
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
        } else {
            // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
            \$container.children('div').each(function() {
                addDeleteLink(\$(this));
            });
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
            addDeleteLink(\$prototype);

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
