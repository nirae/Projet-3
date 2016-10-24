<?php

/* LouvreReservationBundle:Reservation:index.html.twig */
class __TwigTemplate_b281cf1c8ea05c1f50a6311a08894582b315e3ddac243b5885466a48ce94f140 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<body>
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <div>
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dayVisit", array()), 'label', array("label" => "Jour de la visite"));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dayVisit", array()), 'errors');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dayVisit", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "halfDay", array()), 'label', array("label" => "Demi-journée"));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "halfDay", array()), 'errors');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "halfDay", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label" => "Email"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tickets", array()), 'label', array("label" => "Billets :"));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tickets", array()), 'errors');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tickets", array()), 'widget');
        echo "
        </div>
        ";
        // line 28
        echo "    <a href=\"#\" id=\"add_ticket\" class=\"btn btn-default\">Ajouter un billet</a>
    ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  98 => 33,  92 => 29,  89 => 28,  84 => 25,  80 => 24,  76 => 23,  70 => 20,  66 => 19,  62 => 18,  56 => 15,  52 => 14,  48 => 13,  42 => 10,  38 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
