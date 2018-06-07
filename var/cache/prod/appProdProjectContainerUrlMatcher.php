<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/cloth')) {
            // dressing_index
            if ('/cloth' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\ClothController::indexAction',  '_route' => 'dressing_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_dressing_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'dressing_index'));
                }

                return $ret;
            }
            not_dressing_index:

            // dressing_new_cloth
            if ('/cloth/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClothController::newClothAction',  '_route' => 'dressing_new_cloth',);
            }

            // dressing_show_cloth
            if (preg_match('#^/cloth/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dressing_show_cloth')), array (  '_controller' => 'AppBundle\\Controller\\ClothController::showAction',));
            }

            // dressing_edit_cloth
            if (preg_match('#^/cloth/(?P<id>\\d+)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dressing_edit_cloth')), array (  '_controller' => 'AppBundle\\Controller\\ClothController::editAction',));
            }

            // dressing_delete_cloth
            if (preg_match('#^/cloth/(?P<id>\\d+)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dressing_delete_cloth')), array (  '_controller' => 'AppBundle\\Controller\\ClothController::deleteClothAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // outfit_result
        if ('/outfit' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\OutfitController::showAction',  '_route' => 'outfit_result',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_outfit_result;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'outfit_result'));
            }

            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_outfit_result;
            }

            return $ret;
        }
        not_outfit_result:

        // weather_form
        if ('/weather' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\WeatherController::formAction',  '_route' => 'weather_form',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_weather_form;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'weather_form'));
            }

            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_weather_form;
            }

            return $ret;
        }
        not_weather_form:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
