<?php

namespace Admingenerated\MetapodSoporteBundle\BasePerfilController;

use Admingenerator\GeneratorBundle\Controller\Propel\BaseController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Metapod\SoporteBundle\Form\Type\Perfil\NewType;


class NewController extends BaseController
{
    public function indexAction()
    {
        

        $Perfil = $this->getNewObject();

        $this->preBindRequest($Perfil);
        $form = $this->createForm($this->getNewType(), $Perfil, $this->getFormOptions($Perfil));

        return $this->render('MetapodSoporteBundle:PerfilNew:index.html.twig', $this->getAdditionalRenderParameters($Perfil) + array(
            "Perfil" => $Perfil,
            "form" => $form->createView(),
        ));
    }

    public function createAction()
    {
        

        $Perfil = $this->getNewObject();

        $this->preBindRequest($Perfil);
        $form = $this->createForm($this->getNewType(), $Perfil, $this->getFormOptions($Perfil));
        $form->bind($this->get('request'));

        if ($form->isValid()) {
            try {
                $this->preSave($form, $Perfil);
                $this->saveObject($Perfil);
                $this->postSave($form, $Perfil);

                $this->get('session')->getFlashBag()->add('success', $this->get('translator')->trans("action.object.edit.success", array(), 'Admingenerator') );

                if($this->get('request')->request->has('save-and-add'))
                  return new RedirectResponse($this->generateUrl("Metapod_SoporteBundle_Perfil_new" ));
                if($this->get('request')->request->has('save-and-list'))
                  return new RedirectResponse($this->generateUrl("Metapod_SoporteBundle_Perfil_list" ));
                else
                  return new RedirectResponse($this->generateUrl("Metapod_SoporteBundle_Perfil_edit", array('pk' => $Perfil->getId()) ));
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('error',  $this->get('translator')->trans("action.object.edit.error", array(), 'Admingenerator') );
                $this->onException($e, $form, $Perfil);
            }

        } else {
            $this->get('session')->getFlashBag()->add('error', $this->get('translator')->trans("action.object.edit.error", array(), 'Admingenerator') );
        }

        return $this->render('MetapodSoporteBundle:PerfilNew:index.html.twig', $this->getAdditionalRenderParameters($Perfil) + array(
            "Perfil" => $Perfil,
            "form" => $form->createView(),
        ));
    }

    /**
     * This method is here to make your life better, so overwrite it
     *
     * @param \Exception $exception throwed exception
     * @param \Symfony\Component\Form\Form $form the valid form
     * @param \Metapod\SoporteBundle\Model\Perfil $Perfil your \Metapod\SoporteBundle\Model\Perfil object
     */
    public function onException(\Exception $exception, \Symfony\Component\Form\Form $form, \Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
        if ($this->container->getParameter('kernel.debug')) {
            throw $exception;
        }
    }

    /**
     * This method is here to make your life better, so overwrite  it
     *
     * @param \Metapod\SoporteBundle\Model\Perfil $Perfil your \Metapod\SoporteBundle\Model\Perfil object
     */
    public function preBindRequest(\Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
    }

    /**
     * This method is here to make your life better, so overwrite  it
     *
     * @param \Symfony\Component\Form\Form $form the valid form
     * @param \Metapod\SoporteBundle\Model\Perfil $Perfil your \Metapod\SoporteBundle\Model\Perfil object
     */
    public function preSave(\Symfony\Component\Form\Form $form, \Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
    }

    /**
     * This method is here to make your life better, so overwrite  it
     *
     * @param \Symfony\Component\Form\Form $form the valid form
     * @param \Metapod\SoporteBundle\Model\Perfil $Perfil your \Metapod\SoporteBundle\Model\Perfil object
     */
    public function postSave(\Symfony\Component\Form\Form $form, \Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
    }


    /**
     * Get additional parameters for rendering.
     *
     * @param \Metapod\SoporteBundle\Model\Perfil $Perfil your \Metapod\SoporteBundle\Model\Perfil object
     * return array
     */
    protected function getAdditionalRenderParameters(\Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
        return array();
    }

    /**
     * Get optional form options.
     *
     * @param \Metapod\SoporteBundle\Model\Perfil $Perfil your \Metapod\SoporteBundle\Model\Perfil object
     * return array
     **/
    protected function getFormOptions(\Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
        return array();
    }

    protected function getNewType()
    {
        $type = new NewType();
        $type->setSecurityContext($this->get('security.context'));

        return $type;
    }
    
    protected function getNewObject()
    {
        return new \Metapod\SoporteBundle\Model\Perfil;
    }

    protected function saveObject(\Metapod\SoporteBundle\Model\Perfil $Perfil)
    {
        $Perfil->save();
    }
}
