<?php

namespace Admingenerated\MiContaSoporteBundle\BasePerfilController;

use Admingenerator\GeneratorBundle\Controller\Propel\BaseController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class ShowController extends BaseController
{
    public function indexAction($pk)
    {
        $Perfil = $this->getObject($pk);

        

        if (!$Perfil) {
            throw new NotFoundHttpException("The MiConta\SoporteBundle\Model\Perfil with Id $pk can't be found");
        }

        return $this->render('MiContaSoporteBundle:PerfilShow:index.html.twig', $this->getAdditionalRenderParameters($Perfil) + array(
            "Perfil" => $Perfil
        ));
    }


    /**
     * Get additional parameters for rendering.
     *
     * @param \MiConta\SoporteBundle\Model\Perfil $Perfil your \MiConta\SoporteBundle\Model\Perfil object
     * return array
     **/
    protected function getAdditionalRenderParameters(\MiConta\SoporteBundle\Model\Perfil $Perfil)
    {
        return array();
    }

    protected function getObject($pk)
    {
        return $this->getQuery($pk)->findPk($pk);
    }

    protected function getQuery($pk)
    {
        return \MiConta\SoporteBundle\Model\PerfilQuery::create();
    }
}
