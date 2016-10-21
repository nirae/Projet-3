<?php

/* LouvreReservationBundle:Reservation:recapitulatif.html.twig */
class __TwigTemplate_6667a03182ed73854e75ca6edd25de622a3a4dbbef469df0996cebcc780c3f97 extends Twig_Template
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
        $__internal_a052b759af2d49b6f6278fbd63fbc6cfc1079155344794804f30c2bd12fe799b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a052b759af2d49b6f6278fbd63fbc6cfc1079155344794804f30c2bd12fe799b->enter($__internal_a052b759af2d49b6f6278fbd63fbc6cfc1079155344794804f30c2bd12fe799b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LouvreReservationBundle:Reservation:recapitulatif.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<body>
    <div class=\"\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <p>
            Message flash : ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
    Recap
    <div class=\"\">
        Email : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "email", array()), "html", null, true);
        echo "
    </div>
    <div class=\"\">
        Numéro de commande : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "orderNumber", array()), "html", null, true);
        echo "
    </div>

    ";
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "tickets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 21
            echo "    <div class=\"\">
        Prix du billet : ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticketPrice", array()), "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div class=\"total\">
        <p>Total :</p>
        <p id=\"total\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total", array()), "html", null, true);
        echo "</p>
    </div>

    <div class=\"\">
        Jour de la visite : ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["dayVisit"]) ? $context["dayVisit"] : $this->getContext($context, "dayVisit")), "html", null, true);
        echo "
    </div>

    <button type=\"button\" id=\"bouton\" name=\"StripeButton\">Payer</button>

    <script src=\"https://checkout.stripe.com/checkout.js\"></script>
    <script type=\"text/javascript\">

    var handler = StripeCheckout.configure({
        key: 'pk_test_8V7h2SGMHr9hQQSl8AheEc8J',
        image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
        locale: 'auto',
        token: function(token) {
            // You can access the token ID with `token.id`.
            // Get the token ID to your server-side code for use.

            ajaxPost('";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("ajax-post");
        echo "', {id: token.id}, function(reponse) {
                console.log(\"Token envoyé\");
                response = JSON.parse(reponse);
                if (response.code == 1) {
                    console.log(\"Recu!\");
                }
            });
        }
    });

    document.getElementById('bouton').addEventListener('click', function(e) {
        // Open Checkout with further options:
        handler.open({
            name: 'Musée du Louvre',
            description: 'Réservation',
            zipCode: true,
            currency: 'eur',
            amount: ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total", array()), "html", null, true);
        echo " * 100
        });
        e.preventDefault();
    });

    // Close Checkout on page navigation:
    window.addEventListener('popstate', function() {
        handler.close();
    });

    //Fonction Ajax
    // Exécute un appel AJAX POST
    // Prend en paramètres l'URL cible, la donnée à envoyer et la fonction callback appelée en cas de succès
    // Le paramètre isJson permet d'indiquer si l'envoi concerne des données JSON
    function ajaxPost(url, data, callback, isJson = true) {
        var req = new XMLHttpRequest();
        req.open(\"POST\", url);
        req.addEventListener(\"load\", function () {
            if (req.status >= 200 && req.status < 400) {
                // Appelle la fonction callback en lui passant la réponse de la requête
                callback(req.responseText);
            } else {
                console.error(req.status + \" \" + req.statusText + \" \" + url);
            }
        });
        req.addEventListener(\"error\", function () {
            console.error(\"Erreur réseau avec l'URL \" + url);
        });
        if (isJson) {
            // Définit le contenu de la requête comme étant du JSON
            req.setRequestHeader(\"Content-Type\", \"application/json\");
            // Transforme la donnée du format JSON vers le format texte avant l'envoi
            data = JSON.stringify(data);
        }
        req.send(data);
    }
    </script>
</body>
</html>
";
        
        $__internal_a052b759af2d49b6f6278fbd63fbc6cfc1079155344794804f30c2bd12fe799b->leave($__internal_a052b759af2d49b6f6278fbd63fbc6cfc1079155344794804f30c2bd12fe799b_prof);

    }

    public function getTemplateName()
    {
        return "LouvreReservationBundle:Reservation:recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 65,  109 => 48,  90 => 32,  83 => 28,  78 => 25,  69 => 22,  66 => 21,  61 => 20,  55 => 16,  49 => 13,  44 => 10,  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<body>
    <div class=\"\">
        {% for message in app.session.flashbag.get('notice') %}
        <p>
            Message flash : {{ message }}
        </p>
        {% endfor %}
    </div>
    Recap
    <div class=\"\">
        Email : {{ order.email }}
    </div>
    <div class=\"\">
        Numéro de commande : {{ order.orderNumber }}
    </div>

    {# test affichage #}
    {% for ticket in order.tickets %}
    <div class=\"\">
        Prix du billet : {{ ticket.ticketPrice }}
    </div>
    {% endfor %}

    <div class=\"total\">
        <p>Total :</p>
        <p id=\"total\">{{ order.total }}</p>
    </div>

    <div class=\"\">
        Jour de la visite : {{ dayVisit }}
    </div>

    <button type=\"button\" id=\"bouton\" name=\"StripeButton\">Payer</button>

    <script src=\"https://checkout.stripe.com/checkout.js\"></script>
    <script type=\"text/javascript\">

    var handler = StripeCheckout.configure({
        key: 'pk_test_8V7h2SGMHr9hQQSl8AheEc8J',
        image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
        locale: 'auto',
        token: function(token) {
            // You can access the token ID with `token.id`.
            // Get the token ID to your server-side code for use.

            ajaxPost('{{ url('ajax-post') }}', {id: token.id}, function(reponse) {
                console.log(\"Token envoyé\");
                response = JSON.parse(reponse);
                if (response.code == 1) {
                    console.log(\"Recu!\");
                }
            });
        }
    });

    document.getElementById('bouton').addEventListener('click', function(e) {
        // Open Checkout with further options:
        handler.open({
            name: 'Musée du Louvre',
            description: 'Réservation',
            zipCode: true,
            currency: 'eur',
            amount: {{ order.total }} * 100
        });
        e.preventDefault();
    });

    // Close Checkout on page navigation:
    window.addEventListener('popstate', function() {
        handler.close();
    });

    //Fonction Ajax
    // Exécute un appel AJAX POST
    // Prend en paramètres l'URL cible, la donnée à envoyer et la fonction callback appelée en cas de succès
    // Le paramètre isJson permet d'indiquer si l'envoi concerne des données JSON
    function ajaxPost(url, data, callback, isJson = true) {
        var req = new XMLHttpRequest();
        req.open(\"POST\", url);
        req.addEventListener(\"load\", function () {
            if (req.status >= 200 && req.status < 400) {
                // Appelle la fonction callback en lui passant la réponse de la requête
                callback(req.responseText);
            } else {
                console.error(req.status + \" \" + req.statusText + \" \" + url);
            }
        });
        req.addEventListener(\"error\", function () {
            console.error(\"Erreur réseau avec l'URL \" + url);
        });
        if (isJson) {
            // Définit le contenu de la requête comme étant du JSON
            req.setRequestHeader(\"Content-Type\", \"application/json\");
            // Transforme la donnée du format JSON vers le format texte avant l'envoi
            data = JSON.stringify(data);
        }
        req.send(data);
    }
    </script>
</body>
</html>
";
    }
}
