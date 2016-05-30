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
    private static $declaredRoutes = array(
        'MiConta_SoporteBundle_Perfil_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ListController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_excel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ExcelController::excelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/excel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_edit' => array (  0 =>   array (    0 => 'pk',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\EditController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_update' => array (  0 =>   array (    0 => 'pk',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\EditController::updateAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_show' => array (  0 =>   array (    0 => 'pk',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ShowController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_object' => array (  0 =>   array (    0 => 'pk',    1 => 'action',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ActionsController::objectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'action',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ActionsController::batchAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\NewController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\NewController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_filters' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ListController::filtersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/filter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Perfil_scopes' => array (  0 =>   array (    0 => 'group',    1 => 'scope',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Perfil\\ListController::scopesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'scope',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'group',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/scope',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'menu_perfil' => array (  0 =>   array (    0 => 'pk',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\PerfilController::menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/perfil/menus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ListController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_excel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ExcelController::excelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/excel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_edit' => array (  0 =>   array (    0 => 'pk',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\EditController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_update' => array (  0 =>   array (    0 => 'pk',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\EditController::updateAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_show' => array (  0 =>   array (    0 => 'pk',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ShowController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_object' => array (  0 =>   array (    0 => 'pk',    1 => 'action',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ActionsController::objectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'action',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pk',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ActionsController::batchAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/batch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\NewController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\NewController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_filters' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ListController::filtersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/filter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'MiConta_SoporteBundle_Usuario_scopes' => array (  0 =>   array (    0 => 'group',    1 => 'scope',  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\Usuario\\ListController::scopesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'scope',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'group',    ),    2 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/scope',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editar_perfiles_usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\UsuarioController::editarPerfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/admin/usuario/perfil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\UsuarioController::perfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soporte/usuario/perfil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pagina_inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\DefaultController::portadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_pagina_inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\DefaultController::portadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inicio/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/logout/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_pre_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiConta\\SoporteBundle\\Controller\\LoginController::preLogoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/pre/logout/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
