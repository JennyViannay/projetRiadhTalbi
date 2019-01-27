<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/suppimer/([^/]++)(*:25)'
                    .'|/ajouter/([^/]++)(*:49)'
                    .'|/produits/([a-z0-9\\-]*)\\-([^/]++)(*:89)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:127)'
                        .'|wdt/([^/]++)(*:147)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:193)'
                                .'|router(*:207)'
                                .'|exception(?'
                                    .'|(*:227)'
                                    .'|\\.css(*:240)'
                                .')'
                            .')'
                            .'|(*:250)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            25 => array(array(array('_route' => 'panier.suppArticle', '_controller' => 'App\\Controller\\PanierController::supprimerArticle'), array('id'), null, null, false, true, null)),
            49 => array(array(array('_route' => 'panier.ajout', '_controller' => 'App\\Controller\\PanierController::ajouter'), array('id'), null, null, false, true, null)),
            89 => array(array(array('_route' => 'product.show', '_controller' => 'App\\Controller\\ProductController::show'), array('slug', 'id'), null, null, false, true, null)),
            127 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            147 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            193 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            207 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            227 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            240 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            250 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
