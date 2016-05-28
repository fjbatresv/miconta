<?php

namespace Admingenerated\MiContaSoporteBundle\BaseUsuarioController;

use Admingenerator\GeneratorBundle\Controller\Propel\BaseController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class ShowController extends BaseController
{
    public function indexAction($pk)
    {
        $Usuario = $this->getObject($pk);

        

        if (!$Usuario) {
            throw new NotFoundHttpException("The MiConta\SoporteBundle\Model\Usuario with Id $pk can't be found");
        }

        return $this->render('MiContaSoporteBundle:UsuarioShow:index.html.twig', $this->getAdditionalRenderParameters($Usuario) + array(
            "Usuario" => $Usuario
        ));
    }


    /**
     * Get additional parameters for rendering.
     *
     * @param \MiConta\SoporteBundle\Model\Usuario $Usuario your \MiConta\SoporteBundle\Model\Usuario object
     * return array
     **/
    protected function getAdditionalRenderParameters(\MiConta\SoporteBundle\Model\Usuario $Usuario)
    {
        return array();
    }

    protected function getObject($pk)
    {
        return $this->getQuery($pk)->findPk($pk);
    }

    protected function getQuery($pk)
    {
        return \MiConta\SoporteBundle\Model\UsuarioQuery::create();
    }
}
