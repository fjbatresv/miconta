<?php

namespace Admingenerated\MetapodSoporteBundle\BasePerfilController;

use Admingenerator\GeneratorBundle\Controller\Propel\BaseController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class ShowController extends BaseController
{
    public function indexAction($pk)
    {
        $Perfil = $this->getObject($pk);

        

        if (!$Perfil) {
            throw new NotFoundHttpException("The Metapod\SoporteBundle\Model\Perfil with Id $pk can't be found");
        }

        return $this->render('MetapodSoporteBundle:PerfilShow:index.html.twig', $this->getAdditionalRenderParameters($Perfil) + array(
            "Perfil" => $Perfil
        ));
    }


    /**
     * Get additional parameters for rendering.
     *
     * @param \Metapod\SoporteBundle\Model\Perfil $Perfil your \Metapod\SoporteBundle\Model\Perfil object
     * return array
     **/
    protected function getAdditionalRenderParameters(\Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
        return array();
    }

    protected function getObject($pk)
    {
        return $this->getQuery($pk)->findPk($pk);
    }

    protected function getQuery($pk)
    {
        return \Metapod\SoporteBundle\Model\PerfilQuery::create();
    }
}
