<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/soporte')) {
            if (0 === strpos($pathinfo, '/soporte/admin')) {
                if (0 === strpos($pathinfo, '/soporte/admin/perfil')) {
                    // MiConta_SoporteBundle_Perfil_list
                    if (rtrim($pathinfo, '/') === '/soporte/admin/perfil') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'MiConta_SoporteBundle_Perfil_list');
                        }

                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ListController::indexAction',  '_route' => 'MiConta_SoporteBundle_Perfil_list',);
                    }

                    // MiConta_SoporteBundle_Perfil_excel
                    if ($pathinfo === '/soporte/admin/perfil/excel') {
                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ExcelController::excelAction',  '_route' => 'MiConta_SoporteBundle_Perfil_excel',);
                    }

                    // MiConta_SoporteBundle_Perfil_edit
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Perfil_edit')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\EditController::indexAction',));
                    }

                    // MiConta_SoporteBundle_Perfil_update
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_MiConta_SoporteBundle_Perfil_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Perfil_update')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\EditController::updateAction',));
                    }
                    not_MiConta_SoporteBundle_Perfil_update:

                    // MiConta_SoporteBundle_Perfil_show
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Perfil_show')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ShowController::indexAction',));
                    }

                    // MiConta_SoporteBundle_Perfil_object
                    if (preg_match('#^/soporte/admin/perfil/(?P<pk>[^/]++)/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Perfil_object')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ActionsController::objectAction',));
                    }

                    // MiConta_SoporteBundle_Perfil_batch
                    if ($pathinfo === '/soporte/admin/perfil/batch') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_MiConta_SoporteBundle_Perfil_batch;
                        }

                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ActionsController::batchAction',  '_route' => 'MiConta_SoporteBundle_Perfil_batch',);
                    }
                    not_MiConta_SoporteBundle_Perfil_batch:

                    // MiConta_SoporteBundle_Perfil_new
                    if ($pathinfo === '/soporte/admin/perfil/new') {
                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\NewController::indexAction',  '_route' => 'MiConta_SoporteBundle_Perfil_new',);
                    }

                    // MiConta_SoporteBundle_Perfil_create
                    if ($pathinfo === '/soporte/admin/perfil/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_MiConta_SoporteBundle_Perfil_create;
                        }

                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\NewController::createAction',  '_route' => 'MiConta_SoporteBundle_Perfil_create',);
                    }
                    not_MiConta_SoporteBundle_Perfil_create:

                    // MiConta_SoporteBundle_Perfil_filters
                    if ($pathinfo === '/soporte/admin/perfil/filter') {
                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ListController::filtersAction',  '_route' => 'MiConta_SoporteBundle_Perfil_filters',);
                    }

                    // MiConta_SoporteBundle_Perfil_scopes
                    if (0 === strpos($pathinfo, '/soporte/admin/perfil/scope') && preg_match('#^/soporte/admin/perfil/scope/(?P<group>[^/]++)/(?P<scope>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Perfil_scopes')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ListController::scopesAction',));
                    }

                    // menu_perfil
                    if (0 === strpos($pathinfo, '/soporte/admin/perfil/menus') && preg_match('#^/soporte/admin/perfil/menus/(?P<pk>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'menu_perfil');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_perfil')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\PerfilController::menuAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/soporte/admin/usuario')) {
                    // MiConta_SoporteBundle_Usuario_list
                    if (rtrim($pathinfo, '/') === '/soporte/admin/usuario') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'MiConta_SoporteBundle_Usuario_list');
                        }

                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ListController::indexAction',  '_route' => 'MiConta_SoporteBundle_Usuario_list',);
                    }

                    // MiConta_SoporteBundle_Usuario_excel
                    if ($pathinfo === '/soporte/admin/usuario/excel') {
                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ExcelController::excelAction',  '_route' => 'MiConta_SoporteBundle_Usuario_excel',);
                    }

                    // MiConta_SoporteBundle_Usuario_edit
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Usuario_edit')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\EditController::indexAction',));
                    }

                    // MiConta_SoporteBundle_Usuario_update
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_MiConta_SoporteBundle_Usuario_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Usuario_update')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\EditController::updateAction',));
                    }
                    not_MiConta_SoporteBundle_Usuario_update:

                    // MiConta_SoporteBundle_Usuario_show
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Usuario_show')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ShowController::indexAction',));
                    }

                    // MiConta_SoporteBundle_Usuario_object
                    if (preg_match('#^/soporte/admin/usuario/(?P<pk>[^/]++)/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Usuario_object')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ActionsController::objectAction',));
                    }

                    // MiConta_SoporteBundle_Usuario_batch
                    if ($pathinfo === '/soporte/admin/usuario/batch') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_MiConta_SoporteBundle_Usuario_batch;
                        }

                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ActionsController::batchAction',  '_route' => 'MiConta_SoporteBundle_Usuario_batch',);
                    }
                    not_MiConta_SoporteBundle_Usuario_batch:

                    // MiConta_SoporteBundle_Usuario_new
                    if ($pathinfo === '/soporte/admin/usuario/new') {
                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\NewController::indexAction',  '_route' => 'MiConta_SoporteBundle_Usuario_new',);
                    }

                    // MiConta_SoporteBundle_Usuario_create
                    if ($pathinfo === '/soporte/admin/usuario/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_MiConta_SoporteBundle_Usuario_create;
                        }

                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\NewController::createAction',  '_route' => 'MiConta_SoporteBundle_Usuario_create',);
                    }
                    not_MiConta_SoporteBundle_Usuario_create:

                    // MiConta_SoporteBundle_Usuario_filters
                    if ($pathinfo === '/soporte/admin/usuario/filter') {
                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ListController::filtersAction',  '_route' => 'MiConta_SoporteBundle_Usuario_filters',);
                    }

                    // MiConta_SoporteBundle_Usuario_scopes
                    if (0 === strpos($pathinfo, '/soporte/admin/usuario/scope') && preg_match('#^/soporte/admin/usuario/scope/(?P<group>[^/]++)/(?P<scope>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'MiConta_SoporteBundle_Usuario_scopes')), array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ListController::scopesAction',));
                    }

                    // editar_perfiles_usuario
                    if (rtrim($pathinfo, '/') === '/soporte/admin/usuario/perfil') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'editar_perfiles_usuario');
                        }

                        return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\UsuarioController::editarPerfilAction',  '_route' => 'editar_perfiles_usuario',);
                    }

                }

            }

            // usuario_perfil
            if (rtrim($pathinfo, '/') === '/soporte/usuario/perfil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_perfil');
                }

                return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\UsuarioController::perfilAction',  '_route' => 'usuario_perfil',);
            }

        }

        // pagina_inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_inicio');
            }

            return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'pagina_inicio',);
        }

        // _pagina_inicio
        if (rtrim($pathinfo, '/') === '/inicio') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_pagina_inicio');
            }

            return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\DefaultController::portadaAction',  '_route' => '_pagina_inicio',);
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
                    return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\LoginController::loginAction',  '_route' => 'usuario_login',);
                }

            }

            // usuario_pre_logout
            if (rtrim($pathinfo, '/') === '/usuario/pre/logout') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_pre_logout');
                }

                return array (  '_controller' => 'MiConta\\SoporteBundle\\Controller\\LoginController::preLogoutAction',  '_route' => 'usuario_pre_logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
