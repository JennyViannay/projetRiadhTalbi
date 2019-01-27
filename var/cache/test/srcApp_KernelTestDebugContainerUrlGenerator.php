<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelTestDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_default_admin' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::admin'), array(), array(array('text', '/login')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\HomeController::index'), array(), array(array('text', '/')), array(), array()),
        'panier.suppArticle' => array(array('id'), array('_controller' => 'App\\Controller\\PanierController::supprimerArticle'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/suppimer')), array(), array()),
        'panier.supprime' => array(array(), array('_controller' => 'App\\Controller\\PanierController::supprimer'), array(), array(array('text', '/suppimer')), array(), array()),
        'panier.ajout' => array(array('id'), array('_controller' => 'App\\Controller\\PanierController::ajouter'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/ajouter')), array(), array()),
        'panier' => array(array(), array('_controller' => 'App\\Controller\\PanierController::index'), array(), array(array('text', '/panier}')), array(), array()),
        'product.index' => array(array(), array('_controller' => 'App\\Controller\\ProductController::index'), array(), array(array('text', '/produits')), array(), array()),
        'product.show' => array(array('slug', 'id'), array('_controller' => 'App\\Controller\\ProductController::show'), array('slug' => '[a-z0-9\\-]*'), array(array('variable', '-', '[^/]++', 'id', true), array('variable', '/', '[a-z0-9\\-]*', 'slug', true), array('text', '/produits')), array(), array()),
        'easyadmin' => array(array(), array('_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'), array(), array(array('text', '/admin/')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
