<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/soporte')) {
            if (0 === strpos($pathinfo, '/soporte/admin')) {
                if (0 === strpos($pathinfo, '/soporte/admin/perfil')) {
                    // Metapod_SoporteBundle_Perfil_list
                    if (rtrim($pathinfo, '/') === '/soporte/admin/perfil') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'Metapod_SoporteBundle_Perfil_list');
                        }

                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\ListController::indexAction',  '_route' => 'Metapod_SoporteBundle_Perfil_list',);
                    }

                    // Metapod_SoporteBundle_Perfil_excel
                    if ($pathinfo === '/soporte/admin/perfil/excel') {
                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\ExcelController::excelAction',  '_route' => 'Metapod_SoporteBundle_Perfil_excel',);
                    }

                    // Metapod_SoporteBundle_Perfil_edit
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Perfil_edit')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\EditController::indexAction',));
                    }

                    // Metapod_SoporteBundle_Perfil_update
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Metapod_SoporteBundle_Perfil_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Perfil_update')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\EditController::updateAction',));
                    }
                    not_Metapod_SoporteBundle_Perfil_update:

                    // Metapod_SoporteBundle_Perfil_show
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Perfil_show')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\ShowController::indexAction',));
                    }

                    // Metapod_SoporteBundle_Perfil_object
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Perfil_object')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\ActionsController::objectAction',));
                    }

                    // Metapod_SoporteBundle_Perfil_batch
                    if ($pathinfo === '/soporte/admin/perfil/batch') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Metapod_SoporteBundle_Perfil_batch;
                        }

                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\ActionsController::batchAction',  '_route' => 'Metapod_SoporteBundle_Perfil_batch',);
                    }
                    not_Metapod_SoporteBundle_Perfil_batch:

                    // Metapod_SoporteBundle_Perfil_new
                    if ($pathinfo === '/soporte/admin/perfil/new') {
                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\NewController::indexAction',  '_route' => 'Metapod_SoporteBundle_Perfil_new',);
                    }

                    // Metapod_SoporteBundle_Perfil_create
                    if ($pathinfo === '/soporte/admin/perfil/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Metapod_SoporteBundle_Perfil_create;
                        }

                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\NewController::createAction',  '_route' => 'Metapod_SoporteBundle_Perfil_create',);
                    }
                    not_Metapod_SoporteBundle_Perfil_create:

                    // Metapod_SoporteBundle_Perfil_filters
                    if ($pathinfo === '/soporte/admin/perfil/filter') {
                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\ListController::filtersAction',  '_route' => 'Metapod_SoporteBundle_Perfil_filters',);
                    }

                    // Metapod_SoporteBundle_Perfil_scopes
                    if (0 === strpos($pathinfo, '/soporte/admin/perfil/scope') && preg_match('#^/soporte/admin/perfil/scope/(?P<group>[^/]++)/(?P<scope>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Perfil_scopes')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Perfil\\ListController::scopesAction',));
                    }

                    // menu_perfil
                    if (0 === strpos($pathinfo, '/soporte/admin/perfil/menus') && preg_match('#^/soporte/admin/perfil/menus/(?P<pk>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'menu_perfil');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_perfil')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\PerfilController::menuAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/soporte/admin/usuario')) {
                    // Metapod_SoporteBundle_Usuario_list
                    if (rtrim($pathinfo, '/') === '/soporte/admin/usuario') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'Metapod_SoporteBundle_Usuario_list');
                        }

                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\ListController::indexAction',  '_route' => 'Metapod_SoporteBundle_Usuario_list',);
                    }

                    // Metapod_SoporteBundle_Usuario_excel
                    if ($pathinfo === '/soporte/admin/usuario/excel') {
                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\ExcelController::excelAction',  '_route' => 'Metapod_SoporteBundle_Usuario_excel',);
                    }

                    // Metapod_SoporteBundle_Usuario_edit
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Usuario_edit')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\EditController::indexAction',));
                    }

                    // Metapod_SoporteBundle_Usuario_update
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Metapod_SoporteBundle_Usuario_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Usuario_update')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\EditController::updateAction',));
                    }
                    not_Metapod_SoporteBundle_Usuario_update:

                    // Metapod_SoporteBundle_Usuario_show
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Usuario_show')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\ShowController::indexAction',));
                    }

                    // Metapod_SoporteBundle_Usuario_object
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Usuario_object')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\ActionsController::objectAction',));
                    }

                    // Metapod_SoporteBundle_Usuario_batch
                    if ($pathinfo === '/soporte/admin/usuario/batch') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Metapod_SoporteBundle_Usuario_batch;
                        }

                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\ActionsController::batchAction',  '_route' => 'Metapod_SoporteBundle_Usuario_batch',);
                    }
                    not_Metapod_SoporteBundle_Usuario_batch:

                    // Metapod_SoporteBundle_Usuario_new
                    if ($pathinfo === '/soporte/admin/usuario/new') {
                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\NewController::indexAction',  '_route' => 'Metapod_SoporteBundle_Usuario_new',);
                    }

                    // Metapod_SoporteBundle_Usuario_create
                    if ($pathinfo === '/soporte/admin/usuario/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_Metapod_SoporteBundle_Usuario_create;
                        }

                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\NewController::createAction',  '_route' => 'Metapod_SoporteBundle_Usuario_create',);
                    }
                    not_Metapod_SoporteBundle_Usuario_create:

                    // Metapod_SoporteBundle_Usuario_filters
                    if ($pathinfo === '/soporte/admin/usuario/filter') {
                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\ListController::filtersAction',  '_route' => 'Metapod_SoporteBundle_Usuario_filters',);
                    }

                    // Metapod_SoporteBundle_Usuario_scopes
                    if (0 === strpos($pathinfo, '/soporte/admin/usuario/scope') && preg_match('#^/soporte/admin/usuario/scope/(?P<group>[^/]++)/(?P<scope>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'Metapod_SoporteBundle_Usuario_scopes')), array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\Usuario\\ListController::scopesAction',));
                    }

                    // editar_perfiles_usuario
                    if (rtrim($pathinfo, '/') === '/soporte/admin/usuario/perfil') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'editar_perfiles_usuario');
                        }

                        return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\UsuarioController::editarPerfilAction',  '_route' => 'editar_perfiles_usuario',);
                    }

                }

            }

            // usuario_perfil
            if (rtrim($pathinfo, '/') === '/soporte/usuario/perfil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_perfil');
                }

                return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\UsuarioController::perfilAction',  '_route' => 'usuario_perfil',);
            }

        }

        // pagina_inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_inicio');
            }

            return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'pagina_inicio',);
        }

        // _pagina_inicio
        if (rtrim($pathinfo, '/') === '/inicio') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_pagina_inicio');
            }

            return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\DefaultController::portadaAction',  '_route' => '_pagina_inicio',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            if (0 === strpos($pathinfo, '/usuario/log')) {
                // usuario_logout
                if (rtrim($pathinfo, '/') === '/usuario/logout') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario_logout');
                    }

                    return array('_route' => 'usuario_logout');
                }

                // usuario_login
                if ($pathinfo === '/usuario/login') {
                    return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\LoginController::loginAction',  '_route' => 'usuario_login',);
                }

            }

            // usuario_pre_logout
            if (rtrim($pathinfo, '/') === '/usuario/pre/logout') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_pre_logout');
                }

                return array (  '_controller' => 'Metapod\\SoporteBundle\\Controller\\LoginController::preLogoutAction',  '_route' => 'usuario_pre_logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
