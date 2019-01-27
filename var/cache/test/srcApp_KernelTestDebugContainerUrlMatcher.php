<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelTestDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/login' => array(array(array('_route' => 'app_default_admin', '_controller' => 'App\\Controller\\DefaultController::admin'), null, null, null, false, false, null)),
            '/' => array(array(array('_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null, false, false, null)),
            '/suppimer' => array(array(array('_route' => 'panier.supprime', '_controller' => 'App\\Controller\\PanierController::supprimer'), null, null, null, false, false, null)),
            '/panier}' => array(array(array('_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'), null, null, null, false, false, null)),
            '/produits' => array(array(array('_route' => 'product.index', '_controller' => 'App\\Controller\\ProductController::index'), null, null, null, false, false, null)),
            '/admin' => array(array(array('_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'), null, null, null, true, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/suppimer/([^/]++)(*:25)'
                    .'|/ajouter/([^/]++)(*:49)'
                    .'|/produits/([a-z0-9\\-]*)\\-([^/]++)(*:89)'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            25 => array(array(array('_route' => 'panier.suppArticle', '_controller' => 'App\\Controller\\PanierController::supprimerArticle'), array('id'), null, null, false, true, null)),
            49 => array(array(array('_route' => 'panier.ajout', '_controller' => 'App\\Controller\\PanierController::ajouter'), array('id'), null, null, false, true, null)),
            89 => array(array(array('_route' => 'product.show', '_controller' => 'App\\Controller\\ProductController::show'), array('slug', 'id'), null, null, false, true, null)),
        );
    }
}
