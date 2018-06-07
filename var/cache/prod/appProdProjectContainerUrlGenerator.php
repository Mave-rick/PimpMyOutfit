<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'dressing_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClothController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cloth/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dressing_new_cloth' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClothController::newClothAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cloth/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dressing_show_cloth' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClothController::showAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cloth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dressing_edit_cloth' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClothController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cloth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dressing_delete_cloth' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClothController::deleteClothAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cloth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'outfit_result' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OutfitController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/outfit/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'weather_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\WeatherController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/weather/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
