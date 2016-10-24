<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'reservation_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Louvre\\ReservationBundle\\Controller\\ReservationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'recapitulatif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Louvre\\ReservationBundle\\Controller\\ReservationController::recapAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recapitulatif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cgv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Louvre\\ReservationBundle\\Controller\\ReservationController::cgvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conditions-generales',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax-post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Louvre\\ReservationBundle\\Controller\\ReservationController::ajaxPostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax-post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
