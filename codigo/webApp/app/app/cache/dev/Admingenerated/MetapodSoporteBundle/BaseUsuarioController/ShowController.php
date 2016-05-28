<?php

namespace Admingenerated\MetapodSoporteBundle\BaseUsuarioController;

use Admingenerator\GeneratorBundle\Controller\Propel\BaseController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class ShowController extends BaseController
{
    public function indexAction($pk)
    {
        $Usuario = $this->getObject($pk);

        

        if (!$Usuario) {
            throw new NotFoundHttpException("The Metapod\SoporteBundle\Model\Usuario with Id $pk can't be found");
        }

        return $this->render('MetapodSoporteBundle:UsuarioShow:index.html.twig', $this->getAdditionalRenderParameters($Usuario) + array(
            "Usuario" => $Usuario
        ));
    }


    /**
     * Get additional parameters for rendering.
     *
     * @param \Metapod\SoporteBundle\Model\Usuario $Usuario your \Metapod\SoporteBundle\Model\Usuario object
     * return array
     **/
    protected function getAdditionalRenderParameters(\Metapod\SoporteBundle\Model\Usuario $Usuario)
    {
        return array();
    }

    protected function getObject($pk)
    {
        return $this->getQuery($pk)->findPk($pk);
    }

    protected function getQuery($pk)
    {
        return \Metapod\SoporteBundle\Model\UsuarioQuery::create();
    }
}
